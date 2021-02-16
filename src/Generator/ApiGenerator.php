<?php

namespace Ujamii\OpenImmo\Generator;

use GoetasWebservices\XML\XSDReader\Schema\Attribute\Attribute;
use GoetasWebservices\XML\XSDReader\Schema\Element\ElementItem;
use GoetasWebservices\XML\XSDReader\Schema\Element\ElementRef;
use GoetasWebservices\XML\XSDReader\Schema\Inheritance\Extension;
use GoetasWebservices\XML\XSDReader\Schema\Inheritance\Restriction;
use GoetasWebservices\XML\XSDReader\Schema\Item;
use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexType;
use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexTypeSimpleContent;
use GoetasWebservices\XML\XSDReader\Schema\Type\SimpleType;
use GoetasWebservices\XML\XSDReader\Schema\Type\Type;
use GoetasWebservices\XML\XSDReader\SchemaReader;
use gossi\codegen\generator\CodeFileGenerator;
use gossi\codegen\model\PhpClass;
use gossi\codegen\model\PhpMethod;
use gossi\codegen\model\PhpParameter;
use gossi\codegen\model\PhpProperty;
use gossi\docblock\tags\TagFactory;
use Ujamii\OpenImmo\XSDReader\Schema\Type\ComplexTypeMixed;

/**
 * Class ApiGenerator
 * @package Ujamii\OpenImmo\Generator
 */
class ApiGenerator
{

    /**
     * Maximum number of properties a class should have for generating
     * a constructor. Read: If a class has more than X properties, no constructor
     * method will be generated.
     */
    public const MAX_PROPERTIES_IN_CONSTRUCTOR = 6;

    /**
     * @var string
     */
    protected $targetFolder = './src/API/';

    /**
     * @var array<bool>
     */
    protected $generatorConfig = [
        'generateScalarTypeHints'    => true,
        'generateNullableTypes'      => true,
        'generateReturnTypeHints'    => true,
    ];

    /**
     * Additional elements may be referenced inside of MixedComplexTypes.
     * @var array
     */
    protected $referencedInlineElements = [];

    /**
     * Generates the API classes.
     *
     * @param string $xsdFile file path
     * @param bool $wipeTargetFolder
     * @param ?string $targetFolder
     *
     * @throws \GoetasWebservices\XML\XSDReader\Exception\IOException
     * @throws \Exception
     */
    public function generateApiClasses(string $xsdFile, $wipeTargetFolder = true, $targetFolder = null): void
    {
        $this->setTargetFolder($targetFolder);

        if ($wipeTargetFolder) {
            $this->wipeTargetFolder();
        }

        $reader                         = new SchemaReader();
        $schema                         = $reader->readFile($xsdFile);
        $this->referencedInlineElements = [];

        foreach ($schema->getElements() as $element) {
            if ( ! ($element->getType() instanceof SimpleType)) {
                $this->parseElementDef($element);
            }
        }
        foreach ($this->referencedInlineElements as $element) {
            $this->parseElementDef($element);
        }
    }

    /**
     * @param Item|ElementItem $element
     */
    protected function parseElementDef($element): void
    {
        $className = TypeUtil::camelize($element->getName());

        $class = new PhpClass();
        $class
            ->setQualifiedName('Ujamii\\OpenImmo\\API\\' . $className)
            ->setUseStatements([
                'XmlRoot' => 'JMS\Serializer\Annotation\XmlRoot',
                'Type'    => 'JMS\Serializer\Annotation\Type'
            ])
            ->setDescription('Class ' . $className . PHP_EOL . $element->getDoc())
            ->getDocblock()
            ->appendTag(TagFactory::create('package', 'Ujamii\OpenImmo\API'))
            ->appendTag(TagFactory::create('XmlRoot("' . $element->getName() . '")'));

        /* @var $attributeFromXsd Attribute */
        foreach ($element->getType()->getAttributes() as $attributeFromXsd) {
            $this->parseAttribute($attributeFromXsd, $class);
        }

        if ($element->getType() instanceof ComplexTypeSimpleContent) {
            $this->addSimpleValue($element->getType()->getExtension(), $class);
        } elseif ($element->getType() instanceof ComplexTypeMixed) {
            /* @var ComplexTypeMixed $complexTypeMixed */
            $complexTypeMixed = $element->getType();
            foreach ($complexTypeMixed->getElements() as $property) {
                $this->parseProperty($property, $class);
            }
            // @see https://github.com/ujamii/openimmo/issues/3
            $this->addSimpleValue(null, $class);
        } else {
            /* @var ComplexType $complexType */
            foreach ($element->getType()->getElements() as $property) {
                $this->parseProperty($property, $class);
            }
        }

        if (count($element->getType()->getAttributes()) > 0) {
            $class->addUseStatement('JMS\Serializer\Annotation\XmlAttribute');
        }

        $classPropertyCount = $class->getPropertyNames()->size();
        $hasConstructor = $class->hasMethod('__construct');
        if (!$hasConstructor && $classPropertyCount > 0 && $classPropertyCount <= self::MAX_PROPERTIES_IN_CONSTRUCTOR) {
            $this->generateConstructor($class);
        }

        $this->createPhpFile($class);
    }

    /**
     * @param Extension|null $extension
     * @param PhpClass $class
     */
    protected function addSimpleValue(?Extension $extension, PhpClass $class): void
    {
        $propertyName  = 'value';
        $classProperty = PhpProperty::create($propertyName)->setVisibility(PhpProperty::VISIBILITY_PROTECTED);

        if (is_null($extension)) {
            $propertyType = 'string';
        } else {
            $propertyType = $this->getValidType($this->extractPhpType($extension->getBase()), $classProperty, $class);
        }

        $classProperty->setType($propertyType);
        $classProperty->getDocblock()->appendTag(TagFactory::create('Inline'));
        // this has been set in getValidType already (including format)
        if ($propertyType != '\DateTime') {
            $classProperty->getDocblock()->appendTag(TagFactory::create('Type("' . TypeUtil::getTypeForSerializer($propertyType) . '")'));
        }

        $class->addUseStatement('JMS\Serializer\Annotation\Inline');
        $class->setProperty($classProperty);
        self::generateGetterAndSetter($classProperty, $class);
    }

    /**
     * @param PhpClass $class
     * @param array<string> $primaryConstructorProperties
     *
     * @return void
     */
    protected function generateConstructor(PhpClass $class, array $primaryConstructorProperties = []): void
    {
        $constructor = PhpMethod::create('__construct');

        $constructorCode = [];
        $prioParams = [];
        $otherParams = [];
        foreach ($class->getPropertyNames() as $classPropertyName) {
            $type          = $class->getProperty($classPropertyName)->getType();
            $typeIsArray   = substr($type, -2) === '[]';
            $type          = $this->getValidType($type);
            $phpParam      = PhpParameter::create($classPropertyName)
                                         ->setType($typeIsArray ? 'array' : $type)
                                         ->setDescription('Shortcut setter for ' . $classPropertyName);
            if ($typeIsArray) {
                $phpParam->setExpression('[]');
            } else {
                $phpParam->setValue(null);
            }
            if (in_array($classPropertyName, $primaryConstructorProperties)) {
                $prioParams[] = $phpParam;
            } else {
                $otherParams[] = $phpParam;
            }

            $constructorCode[] = '$this->' . $classPropertyName . ' = $' . $classPropertyName . ';';
        }

        foreach (array_merge($prioParams, $otherParams) as $phpParam) {
            $constructor->addParameter($phpParam);
        }

        $constructor->setBody(implode(PHP_EOL, $constructorCode));
        $class->setMethod($constructor);
    }

    /**
     * @param ElementItem $property
     * @param PhpClass $class
     */
    protected function parseProperty(ElementItem $property, PhpClass $class): void
    {
        $propertyName  = TypeUtil::camelize($property->getName(), true);
        $classProperty = PhpProperty::create($propertyName)->setVisibility(PhpProperty::VISIBILITY_PROTECTED);
        $propertyType  = $this->getPhpPropertyTypeFromXsdElement($property);

        // take min/max into account, as this may be an array instead
        if ($property->getMax() == -1) {
            $classProperty->getDocblock()->appendTag(TagFactory::create('XmlList(inline = true, entry = "' . $property->getName() . '")'));
            $class->addUseStatement('JMS\Serializer\Annotation\XmlList');
        }

        $type = $this->getValidType($propertyType, $classProperty, $class);
        $classProperty->setType($type);
        // this has been set in getValidType already (including format)
        if ($type != '\DateTime') {
            $classProperty->getDocblock()->appendTag(TagFactory::create('Type("' . TypeUtil::getTypeForSerializer($type) . '")'));
        }

        if ($property->getType()->getRestriction()) {
            if (empty($propertyType) && ! empty($property->getType()->getRestriction()->getBase())) {
                $propertyType = $this->getValidType($property->getType()->getRestriction()->getBase()->getName(), $classProperty, $class);
                $classProperty->setType($propertyType);
            }
            $this->parseRestriction(
                $property->getType()->getRestriction(),
                $property->getName(),
                $class,
                $classProperty
            );
        }

        $class->setProperty($classProperty);

        $nullable = $property->getMin() === 0;
        self::generateGetterAndSetter($classProperty, $class, true, $nullable);
    }

    /**
     * @param Item|ElementItem $property
     *
     * @return string
     */
    protected function getPhpPropertyTypeFromXsdElement($property): string
    {
        if ($property instanceof ElementRef) {
            if ($property->getReferencedElement()->getType() instanceof SimpleType) {
                $propertyType = $this->extractPhpType($property->getReferencedElement()->getType());
            } else {
                $propertyType = TypeUtil::camelize($property->getReferencedElement()->getName());
            }
        } else {
            if ($property->getType() instanceof ComplexType) {
                $this->referencedInlineElements[] = $property;
                $propertyType                     = $this->extractPhpType($property->getType(), TypeUtil::camelize($property->getName(), true));
            } else {
                $propertyType = $this->extractPhpType($property->getType());
            }
        }

        if ( ! ($property instanceof Attribute) && $property->getMax() == -1) {
            $propertyType .= '[]';
        }

        return $propertyType;
    }

    /**
     * @param Attribute $attribute
     * @param PhpClass $class
     */
    protected function parseAttribute(Attribute $attribute, PhpClass $class): void
    {
        $propertyName  = TypeUtil::camelize(strtolower($attribute->getName()), true);
        $classProperty = PhpProperty::create($propertyName)->setVisibility(PhpProperty::VISIBILITY_PROTECTED);
        $type          = $this->extractPhpType($attribute->getType());
        $type          = $this->getValidType($type, $classProperty, $class);
        $nullable      = true;

        // this has been set in getValidType already (including format)
        if ($type != '\DateTime') {
            $classProperty->getDocblock()->appendTag(TagFactory::create('Type("' . TypeUtil::getTypeForSerializer($type) . '")'));
        }
        $classProperty->setType($type);
        $classProperty->getDocblock()->appendTag(TagFactory::create('XmlAttribute'));

        // as the openimmo guys like to switch randomly between lowercase and uppercase, serialized names may differ from property names
        if (strtolower($attribute->getName()) != $attribute->getName()) {
            $classProperty->getDocblock()->appendTag(TagFactory::create('SerializedName("' . $attribute->getName() . '")'));
            $class->addUseStatement('JMS\Serializer\Annotation\SerializedName');
        }

        // on some very few places, there are comments in the xsd file
        if ($attribute->getUse() != '') {
            $classProperty->setDescription($attribute->getUse());
            if ($attribute->getUse() === 'required') {
                $nullable = false;
            }
        }

        $this->parseRestriction(
            $attribute->getType()->getRestriction(),
            $attribute->getName(),
            $class,
            $classProperty
        );

        $class->setProperty($classProperty);

        self::generateGetterAndSetter($classProperty, $class, true, $nullable);
    }

    /**
     * @param Restriction $restriction
     * @param string $nameInXsd
     * @param PhpClass $class
     * @param PhpProperty $classProperty
     */
    protected function parseRestriction(Restriction $restriction, string $nameInXsd, PhpClass $class, PhpProperty $classProperty): void
    {
        if (count($restriction->getChecks()) > 0) {
            foreach ($restriction->getChecks() as $type => $options) {
                switch ($type) {

                    case 'enumeration':
                        $constantPrefix = strtoupper($nameInXsd . '_');
                        foreach ($options as $possibleValue) {
                            $constantName = strtoupper($constantPrefix . str_replace([' ', '-'], '_', $possibleValue['value']));
                            $class->setConstant($constantName, $possibleValue['value']);
                        }
                        $classProperty->getDocblock()->appendTag(TagFactory::create('see', $constantPrefix . '* constants'));
                        break;

                    case 'whiteSpace':
                        // do nothing. This is not a real restriction, it is just an empty block.
                        break;

                    case 'minLength':
                        self::addDescriptionPart($classProperty, 'Minimum length: ' . $options[0]['value']);
                        break;

                    case 'minInclusive':
                        self::addDescriptionPart($classProperty, 'Minimum value (inclusive): ' . $options[0]['value']);
                        break;

                    case 'maxInclusive':
                        self::addDescriptionPart($classProperty, 'Maximum value (inclusive): ' . $options[0]['value']);
                        break;

                    case 'fractionDigits':
                        self::addDescriptionPart($classProperty, 'Maximum precision: ' . $options[0]['value']);
                        break;

                    default:
                        throw new \InvalidArgumentException(vsprintf('Type "%s" is not handled in %s->parseAttribute', [$type, __CLASS__]));

                }
            }
        }
    }

    /**
     * Adds a new description part to the given class property.
     *
     * @param PhpProperty $classProperty
     * @param string $descriptionPart
     * @param string $separator
     *
     * @return void
     */
    public static function addDescriptionPart(PhpProperty $classProperty, string $descriptionPart, string $separator = ', '): void
    {
        if ('' === trim($classProperty->getTypeDescription())) {
            $currentDescriptionParts = [];
        } else {
            $currentDescriptionParts = explode($separator, $classProperty->getTypeDescription());
        }
        $currentDescriptionParts[] = $descriptionPart;
        $classProperty->setTypeDescription(implode($separator, $currentDescriptionParts));
    }

    /**
     * @param Type $typeFromXsd
     * @param string|null $propertyName
     *
     * @return string|null
     */
    protected function extractPhpType(Type $typeFromXsd, ?string $propertyName = null): ?string
    {
        $type = 'string';

        if ($typeFromXsd->getName() != '') {
            $type = $typeFromXsd->getName();
        } else {
            if ($typeFromXsd instanceof ComplexType) {
                if (null !== $propertyName) {
                    return ucfirst($propertyName);
                }
            } else {
                if ($typeFromXsd instanceof ComplexTypeSimpleContent) {
                    // is default string
                } else {
                    if ($typeFromXsd->getRestriction()->getBase() != '') {
                        $type = $typeFromXsd->getRestriction()->getBase()->getName();
                    }
                }
            }
        }

        return $type;
    }

    /**
     * @param string $propertyType
     * @param PhpProperty|null $classProperty
     * @param PhpClass|null $class
     *
     * @return string
     */
    protected function getValidType(string $propertyType, ?PhpProperty $classProperty = null, ?PhpClass $class = null): string
    {
        switch ($propertyType) {

            case 'decimal':
                $propertyType = 'float';
                break;

            case 'positiveInteger':
                $propertyType = 'int';
                break;

            case 'dateTime':
                $propertyType = '\DateTime';
                if ( ! is_null($classProperty)) {
                    $classProperty->getDocblock()->appendTag(TagFactory::create('Type("DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>")'));
                    $class->addUseStatement('JMS\Serializer\Annotation\Type');
                }
                break;

            case 'date':
                $propertyType = '\DateTime';
                if ( ! is_null($classProperty)) {
                    $classProperty->getDocblock()->appendTag(TagFactory::create('Type("DateTime<\'Y-m-d\'>")'));
                    $class->addUseStatement('JMS\Serializer\Annotation\Type');
                }
                break;

            case 'base64Binary':
                $propertyType = 'string';
                if ( ! is_null($classProperty)) {
                    $classProperty->setDescription('Base64 encoded binary');
                }
                break;

            case 'kontakt':
                $propertyType = 'string';
                break;
        }

        return $propertyType;
    }

    /**
     * @param PhpProperty $property
     * @param PhpClass $class
     * @param bool $fluentApi
     * @param bool $nullable
     */
    public static function generateGetterAndSetter(PhpProperty $property, PhpClass $class, $fluentApi = true, $nullable = true): void
    {
        self::generateSetter($property, $class, $fluentApi, $nullable);
        self::generateGetter($property, $class, $nullable);
    }



    /**
     * Removes all files in the target folder.
     */
    protected function wipeTargetFolder(): void
    {
        array_map('unlink', glob($this->getTargetFolder() . '/*.php'));
    }

    /**
     * @return array<bool>
     */
    public function getGeneratorConfig(): array
    {
        return $this->generatorConfig;
    }

    /**
     * @param array<bool> $generatorConfig
     */
    public function setGeneratorConfig(array $generatorConfig): void
    {
        $this->generatorConfig = $generatorConfig;
    }

    /**
     * @param PhpProperty $property
     * @param PhpClass $class
     * @param bool $nullable
     */
    public static function generateGetter(PhpProperty $property, PhpClass $class, bool $nullable): void
    {
        $returnsArray = substr($property->getType(), -2) === '[]';
        $getter       = PhpMethod::create('get' . ucfirst($property->getName()));
        if ($returnsArray) {
            $getterCode = 'return $this->' . $property->getName() . ' ?? [];';
            $getter->setBody($getterCode);
            $getter->setType('array');
            $getter->setDescription('Returns array of ' . str_replace('[]', '', $property->getType()));
            $getter->setNullable(false);
        } else {
            $getterCode = 'return $this->' . $property->getName() . ';';
            $getter->setBody($getterCode);
            $getter->setType($property->getType());
            $getter->setNullable($nullable);
        }
        $class->setMethod($getter);
    }

    /**
     * @param PhpProperty $property
     * @param PhpClass $class
     * @param bool $fluentApi
     * @param bool $nullable
     */
    public static function generateSetter(PhpProperty $property, PhpClass $class, bool $fluentApi, bool $nullable): void
    {
        $setter   = PhpMethod::create('set' . ucfirst($property->getName()));
        $isPlural = substr($property->getType(), -2) == '[]';

        $parameter = PhpParameter::create($property->getName())
                                 ->setType($isPlural ? 'array' : $property->getType())
                                 ->setNullable($isPlural ? false : $nullable)
                                 ->setDescription('Setter for ' . $property->getName());
        $setter->addParameter($parameter);
        $setterCode = '$this->' . $property->getName() . ' = $' . $property->getName() . ';';
        if ($fluentApi) {
            $setterCode .= PHP_EOL . 'return $this;';
            $setter->getDocblock()->appendTag(TagFactory::create('return', $class->getName()));
        }
        $setter->setBody($setterCode);
        $class->setMethod($setter);
    }

    /**
     * @param PhpClass $class
     *
     * @return bool|int
     */
    protected function createPhpFile(PhpClass $class)
    {
        $generator = new CodeFileGenerator($this->getGeneratorConfig());
        $code      = $generator->generate($class);

        return file_put_contents($this->getTargetFolder() . $class->getName() . '.php', $code);
    }

    /**
     * @return string
     */
    public function getTargetFolder(): string
    {
        return $this->targetFolder;
    }

    /**
     * @param string|null $targetFolder
     */
    public function setTargetFolder(?string $targetFolder): void
    {
        if ( ! is_null($targetFolder)) {
            if (!(is_dir($targetFolder) && is_writeable($targetFolder))) {
                throw new \Exception("Directory {$targetFolder} does not exist or is not writeable!");
            }
            $this->targetFolder = $targetFolder;
        }
    }

}
