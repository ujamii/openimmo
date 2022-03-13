<?php

namespace Ujamii\OpenImmo\Generator;

use GoetasWebservices\XML\XSDReader\Schema\Attribute\Attribute;
use GoetasWebservices\XML\XSDReader\Schema\Element\Element;
use GoetasWebservices\XML\XSDReader\Schema\Element\ElementDef;
use GoetasWebservices\XML\XSDReader\Schema\Element\ElementItem;
use GoetasWebservices\XML\XSDReader\Schema\Element\ElementRef;
use GoetasWebservices\XML\XSDReader\Schema\Inheritance\Extension;
use GoetasWebservices\XML\XSDReader\Schema\Inheritance\Restriction;
use GoetasWebservices\XML\XSDReader\Schema\Item;
use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexType;
use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexTypeSimpleContent;
use GoetasWebservices\XML\XSDReader\Schema\Type\SimpleType;
use GoetasWebservices\XML\XSDReader\SchemaReader;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Property;
use Nette\PhpGenerator\PsrPrinter;
use Ujamii\OpenImmo\XSDReader\Schema\Type\ComplexTypeMixed;

/**
 * Class ApiGenerator
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
    protected string $targetFolder = './src/API/';

    /**
     * Additional elements may be referenced inside of MixedComplexTypes.
     * @var array
     */
    protected array $referencedInlineElements = [];

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
    public function generateApiClasses(string $xsdFile, bool $wipeTargetFolder = true, ?string $targetFolder = null): void
    {
        $this->setTargetFolder($targetFolder);

        if ($wipeTargetFolder) {
            $this->wipeTargetFolder();
        }

        $reader                         = new SchemaReader();
        $schema                         = $reader->readFile($xsdFile);
        $this->referencedInlineElements = [];

        foreach ($schema->getElements() as $element) {
            if (! ($element->getType() instanceof SimpleType)) {
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
    private function parseElementDef($element): void
    {
        $className = TypeUtil::camelize($element->getName());

        $namespace = new PhpNamespace('Ujamii\\OpenImmo\\API');
        $namespace
            ->addUse(XmlRoot::class, 'XmlRoot')
            ->addUse(Type::class, 'Type');
        $class = $namespace->addClass($className);
        $class
            ->addComment('Class ' . $className . PHP_EOL . $element->getDoc())
            ->addComment('@XmlRoot("' . $element->getName() . '")');

        /* @var $attributeFromXsd Attribute */
        foreach ($element->getType()->getAttributes() as $attributeFromXsd) {
            $this->parseAttribute($attributeFromXsd, $class, $namespace);
        }

        if ($element->getType() instanceof ComplexTypeSimpleContent) {
            $this->addSimpleValue($element->getType()->getExtension(), $class, $namespace);
        } elseif ($element->getType() instanceof ComplexTypeMixed) {
            // @see https://github.com/ujamii/openimmo/issues/3
            $this->addSimpleValue(null, $class, $namespace);
        } else {
            /* @var ComplexType $complexType */
            foreach ($element->getType()->getElements() as $property) {
                $this->parseProperty($property, $class, $namespace);
            }
        }

        if (count($element->getType()->getAttributes()) > 0) {
            $namespace->addUse(XmlAttribute::class);
        }

        $classPropertyCount = count($class->getProperties());
        $hasConstructor     = $class->hasMethod('__construct');
        if (! $hasConstructor && $classPropertyCount > 0 && $classPropertyCount <= self::MAX_PROPERTIES_IN_CONSTRUCTOR) {
            $this->generateConstructor($class);
        }

        $this->createPhpFile($namespace, $class);
    }

    /**
     * @param Extension|null $extension
     * @param ClassType $class
     * @param PhpNamespace $namespace
     */
    private function addSimpleValue(?Extension $extension, ClassType $class, PhpNamespace $namespace): void
    {
        $propertyName  = 'value';
        $classProperty = $class->addProperty($propertyName)
                               ->setVisibility(ClassType::VisibilityProtected);

        if (is_null($extension)) {
            $xsdType = 'string';
        } else {
            $xsdType = TypeUtil::extractTypeForPhp($extension->getBase());
        }

        $propertyType = TypeUtil::getValidPhpType($xsdType);
        $classProperty->setType($propertyType)
                      ->setNullable(true)
                      ->setValue(null)
                      ->addComment('@Inline')
                      ->addComment('@Type("' . TypeUtil::getTypeForSerializer($xsdType) . '")');
        $namespace
            ->addUse(Type::class)
            ->addUse(Inline::class);
        CodeGenUtil::generateGetterAndSetter($classProperty, $class, true, ! TypeUtil::isConstantsBasedProperty($classProperty));
    }

    /**
     * @param ClassType $class
     *
     * @return void
     */
    private function generateConstructor(ClassType $class): void
    {
        $constructor = $class->addMethod('__construct');

        $constructorCode = [];
        foreach ($class->getProperties() as $classPropertyName => $property) {
            $type        = $property->getType();
            $typeIsArray = $type === 'array';
            //$type        = TypeUtil::getValidPhpType($type);
            $phpParam = $constructor->addParameter($classPropertyName)
                                    ->setNullable($property->isNullable())
                                    ->setType($typeIsArray ? 'array' : $type);
            $phpParam->setDefaultValue(TypeUtil::getDefaultValueForType($type, $property->isNullable()));

            $constructorCode[] = '$this->' . $classPropertyName . ' = $' . $classPropertyName . ';';
        }

        $constructor->setBody(implode(PHP_EOL, $constructorCode));
    }

    /**
     * @param Element|ElementRef|ElementDef $property
     * @param ClassType $class
     * @param PhpNamespace $namespace
     */
    private function parseProperty(ElementItem $property, ClassType $class, PhpNamespace $namespace): void
    {
        $propertyName = TypeUtil::camelize($property->getName(), true);
        if (array_key_exists($propertyName, $class->getProperties())) {
            return;
        }
        $classProperty = $class->addProperty($propertyName)
                               ->setVisibility(ClassType::VisibilityProtected);
        $xsdType       = $this->getPhpPropertyTypeFromXsdElement($property);

        // take min/max into account, as this may be an array instead
        if ($property->getMax() === -1) {
            $classProperty->addComment('@XmlList(inline = true, entry = "' . $property->getName() . '")');
            $namespace->addUse(XmlList::class);
        }

        $phpType        = TypeUtil::getValidPhpType($xsdType);
        $serializerType = TypeUtil::getTypeForSerializer($xsdType);

        $classProperty->addComment('@Type("' . $serializerType . '")');
        $namespace->addUse(Type::class);

        $isArray  = 'array' === $phpType;
        $nullable = ! $isArray && $property->getMin() === 0;

        // if the property type is an object, it should be nullable
        if (strpos($serializerType, TypeUtil::OPENIMMO_NAMESPACE) === 0 || '\DateTime' === $phpType) {
            $nullable = true;
        }


        $classProperty->setType($phpType)
                      ->setNullable($nullable);

        if ($nullable) {
            $classProperty->setValue(null);
        } else {
            $classProperty
                ->setValue(TypeUtil::getDefaultValueForType($phpType, $nullable))
                ->addComment('@SkipWhenEmpty');
            $namespace->addUse(SkipWhenEmpty::class);
        }

        if ($property->getType()->getRestriction()) {
            $this->parseRestriction(
                $property->getType()->getRestriction(),
                $property->getName(),
                $class,
                $classProperty
            );
        }

        CodeGenUtil::generateGetterAndSetter($classProperty, $class, true, $nullable);
    }

    /**
     * @param Item|Element|ElementRef|ElementDef|ElementItem $property
     *
     * @return string
     */
    private function getPhpPropertyTypeFromXsdElement($property): string
    {
        if ($property instanceof ElementRef) {
            if ($property->getReferencedElement()->getType() instanceof SimpleType) {
                $propertyType = TypeUtil::extractTypeForPhp($property->getReferencedElement()->getType());
            } else {
                $propertyType = TypeUtil::camelize($property->getReferencedElement()->getName());
            }
        } else {
            if ($property->getType() instanceof ComplexType) {
                $this->referencedInlineElements[] = $property;
                $propertyType                     = TypeUtil::extractTypeForPhp($property->getType(), TypeUtil::camelize($property->getName(), true));
            } else {
                $propertyType = TypeUtil::extractTypeForPhp($property->getType());
            }
        }

        if (! ($property instanceof Attribute) && $property->getMax() == -1) {
            $propertyType .= '[]';
        }

        return $propertyType;
    }

    /**
     * @param Attribute $attribute
     * @param ClassType $class
     * @param PhpNamespace $namespace
     */
    private function parseAttribute(Attribute $attribute, ClassType $class, PhpNamespace $namespace): void
    {
        $propertyName  = TypeUtil::camelize(strtolower($attribute->getName()), true);
        $classProperty = $class->addProperty($propertyName)
                               ->setVisibility(ClassType::VisibilityProtected);
        $xsdType       = TypeUtil::extractTypeForPhp($attribute->getType());
        $phpType       = TypeUtil::getValidPhpType($xsdType);
        $classProperty->addComment('@Type("' . TypeUtil::getTypeForSerializer($xsdType) . '")');
        $namespace->addUse(Type::class);
        $nullable = true;

        $classProperty->setNullable($nullable)
                      ->setValue(TypeUtil::getDefaultValueForType($phpType, $nullable))
                      ->setType($phpType)
                      ->addComment('@XmlAttribute');

        // as the openimmo guys like to switch randomly between lowercase and uppercase, serialized names may differ from property names
        if (strtolower($attribute->getName()) !== $attribute->getName()) {
            $classProperty->addComment('@SerializedName("' . $attribute->getName() . '")');
            $namespace->addUse(SerializedName::class);
        }

        // on some very few places, there are comments in the xsd file
        if ($attribute->getUse() !== '') {
            $classProperty->addComment($attribute->getUse());
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

        CodeGenUtil::generateGetterAndSetter($classProperty, $class, true, $nullable);
    }

    /**
     * @param Restriction $restriction
     * @param string $nameInXsd
     * @param ClassType $class
     * @param Property $classProperty
     */
    private function parseRestriction(Restriction $restriction, string $nameInXsd, ClassType $class, Property $classProperty): void
    {
        foreach ($restriction->getChecks() as $type => $options) {
            switch ($type) {

                case 'enumeration':
                    $constantPrefix = strtoupper($nameInXsd . '_');
                    foreach ($options as $possibleValue) {
                        $constantName = strtoupper($constantPrefix . str_replace([' ', '-'], '_', $possibleValue['value']));
                        if (! array_key_exists($constantName, $class->getConstants())) {
                            $class->addConstant($constantName, $possibleValue['value']);
                        }
                    }
                    $classProperty->addComment("@see {$constantPrefix}* constants")
                                  ->setValue(TypeUtil::getDefaultValueForType($classProperty->getType(), false))
                                  ->setNullable(false);
                    break;

                case 'whiteSpace':
                    // do nothing. This is not a real restriction, it is just an empty block.
                    break;

                case 'minLength':
                    CodeGenUtil::addDescriptionPart($classProperty, 'Minimum length: ' . $options[0]['value']);
                    break;

                case 'minInclusive':
                    CodeGenUtil::addDescriptionPart($classProperty, 'Minimum value (inclusive): ' . $options[0]['value']);
                    break;

                case 'maxInclusive':
                    CodeGenUtil::addDescriptionPart($classProperty, 'Maximum value (inclusive): ' . $options[0]['value']);
                    break;

                case 'fractionDigits':
                    CodeGenUtil::addDescriptionPart($classProperty, 'Maximum precision: ' . $options[0]['value']);
                    break;

                default:
                    throw new \InvalidArgumentException(vsprintf('Type "%s" is not handled in %s->parseAttribute', [$type, __CLASS__]));

            }
        }
    }

    /**
     * Removes all files in the target folder.
     */
    private function wipeTargetFolder(): void
    {
        array_map('unlink', glob($this->getTargetFolder() . '/*.php'));
    }

    /**
     * @param PhpNamespace $namespace
     * @param ClassType $class
     *
     * @return bool|int
     */
    private function createPhpFile(PhpNamespace $namespace, ClassType $class)
    {
        $file = new PhpFile();
        $file->addNamespace($namespace);
        $code = (new PsrPrinter())->printFile($file);

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
     *
     * @throws \Exception
     */
    public function setTargetFolder(?string $targetFolder): void
    {
        if (! is_null($targetFolder)) {
            if (! (is_dir($targetFolder) && is_writable($targetFolder))) {
                throw new \Exception("Directory {$targetFolder} does not exist or is not writeable!");
            }
            $this->targetFolder = $targetFolder;
        }
    }
}
