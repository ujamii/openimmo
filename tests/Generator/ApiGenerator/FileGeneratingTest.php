<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;
use gossi\docblock\tags\AbstractTag;
use PHPUnit\Framework\TestCase;
use Ujamii\OpenImmo\Generator\ApiGenerator;
use Ujamii\OpenImmo\Generator\TypeUtil;

abstract class FileGeneratingTest extends TestCase
{
    protected const CLASSES_TARGET_FOLDER = './tests/_temp';

    /**
     * @var ApiGenerator
     */
    protected $generator;

    /**
     * @var string
     */
    protected $tmpDir;

    public function setUp(): void
    {
        $this->generator = new ApiGenerator();
        $this->tmpDir    = self::CLASSES_TARGET_FOLDER . DIRECTORY_SEPARATOR . time() . DIRECTORY_SEPARATOR;
        @mkdir($this->tmpDir);
    }

    public function tearDown(): void
    {
        array_map('unlink', glob($this->tmpDir . '/*.php'));
        rmdir($this->tmpDir);
    }

    /**
     * @param string $nameInXsd
     * @param string $docBlockComment
     *
     * @return PhpClass
     * @throws \GoetasWebservices\XML\XSDReader\Exception\IOException
     */
    public function getGeneratedClassFromFile(string $nameInXsd, string $docBlockComment = ''): PhpClass
    {
        $className   = TypeUtil::camelize($nameInXsd);
        $fixtureFile = "./tests/fixtures/{$className}.xsd";
        $this->generator->generateApiClasses($fixtureFile, true, $this->tmpDir);

        $classFileName = "{$this->tmpDir}{$className}.php";
        $this->assertFileExists($classFileName);
        $generatedClass = PhpClass::fromFile($classFileName);

        if ('' !== $docBlockComment) {
            $this->assertStringContainsString(
                $docBlockComment,
                $generatedClass->getDocblock()->getShortDescription()
            );
        }

        $this->assertCount(1, $generatedClass->getDocblock()->getTags('XmlRoot'));
        $this->assertEquals('("' . $nameInXsd . '")', $generatedClass->getDocblock()->getTags('XmlRoot')->get(0)->getDescription());

        return $generatedClass;
    }

    /**
     * @param PhpClass $generatedClass
     *
     * @return \ReflectionClass
     * @throws \ReflectionException
     */
    public function getReflectionClassFromgeneratedClass(PhpClass $generatedClass): \ReflectionClass
    {
        $classFileName = "{$this->tmpDir}{$generatedClass->getName()}.php";
        require_once($classFileName);
        $subjectClassName = $generatedClass->getQualifiedName();

        return new \ReflectionClass(new $subjectClassName());
    }

    /**
     * @param PhpClass $generatedClass
     * @param array $constants
     */
    public function assertClassHasConstants(PhpClass $generatedClass, array $constants): void
    {
        foreach ($constants as $constantName => $constantValue) {
            $this->assertTrue($generatedClass->hasConstant($constantName));
            $this->assertEquals($constantValue, $generatedClass->getConstant($constantName)->getValue());
        }
        $this->assertCount(count($constants), $generatedClass->getConstantNames());
    }

    public static function getPropertyConfig(
        string $propertyName,
        string $type = 'string',
        bool $hasGetterAndSetter = true,
        array $docTags = [],
        ?string $xsdType = null
    ): array {
        return [$propertyName, $type, $hasGetterAndSetter, $docTags, $xsdType];
    }

    public function assertClassHasProperty(
        PhpClass $class,
        string $propertyName,
        string $type = 'string',
        bool $hasGetterAndSetter = true,
        array $docTags = [],
        ?string $xsdType = null
    ): void {
        $this->assertTrue($class->hasProperty($propertyName));
        $property = $class->getProperty($propertyName);

        // TODO property type may be Feld[] instead of array<Feld>
        $propertyType = TypeUtil::getValidPhpType(null !== $xsdType ? $xsdType : $type);
        $this->assertEquals($propertyType, $property->getType());
        $this->assertTrue($property->getDocblock()->hasTag('Type'));

        $serializerType = TypeUtil::getTypeForSerializer(null !== $xsdType ? $xsdType : $type);
        $this->assertEquals('("' . $serializerType . '")', trim($property->getDocblock()->getTags('Type')->get(0)->getDescription()));

        foreach ($docTags as $tagName => $tagValue) {
            $this->assertTrue($property->getDocblock()->hasTag($tagName), $tagName . ' not found in DocBlock');
            if (! empty($tagValue)) {
                /* @var AbstractTag $docTag */
                $docTag = $property->getDocblock()->getTags($tagName)->get(0);
                $this->assertEquals($tagValue, trim($docTag->getDescription()));
            }
        }

        if ($hasGetterAndSetter) {
            $this->assertEquals('protected', $property->getVisibility());
            $this->assertTrue($class->hasMethod('get' . ucfirst($propertyName)));

            $phpType = TypeUtil::getValidPhpType($type);
            $getter  = $class->getMethod('get' . ucfirst($propertyName));
            $this->assertEquals('public', $getter->getVisibility());
            $this->assertEquals($phpType, $getter->getType(), "Return type of {$getter->getName()}");
            //$this->assertTrue($getter->getNullable());

            $setter = $class->getMethod('set' . ucfirst($propertyName));
            $this->assertEquals('public', $setter->getVisibility());
            $this->assertEquals($class->getName(), $setter->getType());
            $this->assertTrue($setter->hasParameter($propertyName));
            $this->assertEquals($phpType, $setter->getParameter($propertyName)->getType());
            //$this->assertTrue($setter->getParameter($propertyName)->getNullable());
        }
    }

    public function assertClassHasConstructor(PhpClass $class, array $properties): void
    {
        $this->assertTrue($class->hasMethod('__construct'));
        $this->assertCount(count($properties), $class->getMethod('__construct')->getParameters());

        $constructor = $class->getMethod('__construct');
        foreach ($properties as $propertyConfig) {
            list($propertyName, $type, $hasGetterAndSetter, $docTags, $xsdType) = $propertyConfig;
            $constructorParam = $constructor->getParameter($propertyName);
            $this->assertEquals($type, $constructorParam->getType());
            if ($constructorParam->getType() == 'array') {
                $this->assertEquals('[]', $constructorParam->getExpression());
            } else {
                $this->assertNull($constructorParam->getValue());
            }
//        $this->assertFalse($constructor->getParameter($propertyName)->getNullable());
        }
    }

    public function assertClassHasProperties(PhpClass $class, array $properties): void
    {
        foreach ($properties as $propertyConfig) {
            $this->assertClassHasProperty($class, ...$propertyConfig);
        }

        $propCount = count($properties);
        if ($propCount > 0 && $propCount <= ApiGenerator::MAX_PROPERTIES_IN_CONSTRUCTOR) {
            $this->assertClassHasConstructor($class, $properties);
        }
    }
}
