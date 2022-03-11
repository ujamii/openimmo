<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use Nette\PhpGenerator\ClassType;
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
     * @return ClassType
     * @throws \GoetasWebservices\XML\XSDReader\Exception\IOException
     */
    public function getGeneratedClassFromFile(string $nameInXsd, string $docBlockComment = ''): ClassType
    {
        $className   = TypeUtil::camelize($nameInXsd);
        $fixtureFile = "./tests/fixtures/{$className}.xsd";
        $this->generator->generateApiClasses($fixtureFile, true, $this->tmpDir);

        $classFileName = "{$this->tmpDir}{$className}.php";
        $this->assertFileExists($classFileName);
        /** @var ClassType $generatedClass */
        $generatedClass = ClassType::fromCode(file_get_contents($classFileName));

        if ('' !== $docBlockComment) {
            $this->assertStringContainsString(
                $docBlockComment,
                $generatedClass->getComment()
            );
        }

        $this->assertStringContainsString('@XmlRoot("' . $nameInXsd . '")', $generatedClass->getComment());

        return $generatedClass;
    }

    /**
     * @param ClassType $generatedClass
     *
     * @return \ReflectionClass
     * @throws \ReflectionException
     */
    public function getReflectionClassFromgeneratedClass(ClassType $generatedClass): \ReflectionClass
    {
        $classFileName = "{$this->tmpDir}{$generatedClass->getName()}.php";
        require_once($classFileName);
        $subjectClassName = $generatedClass->getNamespace()->getName() . '\\' . $generatedClass->getName();

        return new \ReflectionClass(new $subjectClassName());
    }

    /**
     * @param ClassType $generatedClass
     * @param array $constants
     */
    public function assertClassHasConstants(ClassType $generatedClass, array $constants): void
    {
        foreach ($constants as $constantName => $constantValue) {
            $this->assertArrayHasKey($constantName, $generatedClass->getConstants(), "Constant {$constantName} does not exist");
            $this->assertEquals($constantValue, $generatedClass->getConstants()[$constantName]->getValue());
        }
        $this->assertCount(count($constants), $generatedClass->getConstants());
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
        ClassType $class,
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

        $serializerType = TypeUtil::getTypeForSerializer(null !== $xsdType ? $xsdType : $type);
        $this->assertStringContainsString('@Type("' . $serializerType . '")', $property->getComment());

        foreach ($docTags as $tagName => $tagValue) {
            if (empty($tagValue)) {
                $this->assertStringContainsString('@' . $tagName, $property->getComment(), $tagName . ' not found in DocBlock');
            } else {
                $this->assertStringContainsString('@' . $tagName . $tagValue, $property->getComment(), $tagName . ' not found in DocBlock');
            }
        }

        if ($hasGetterAndSetter) {
            $this->assertEquals('protected', $property->getVisibility());
            $this->assertTrue($class->hasMethod('get' . ucfirst($propertyName)));

            $phpType = TypeUtil::getValidPhpType($type);
            $getter  = $class->getMethod('get' . ucfirst($propertyName));
            $this->assertEquals('public', $getter->getVisibility());
            $this->assertEquals($phpType, $getter->getReturnType(), "Return type of {$getter->getName()}");
            //$this->assertTrue($getter->getNullable());

            $setter = $class->getMethod('set' . ucfirst($propertyName));
            $this->assertEquals('public', $setter->getVisibility());
            $this->assertEquals($class->getName(), $setter->getReturnType());
            $this->assertArrayHasKey($propertyName, $setter->getParameters());
            $this->assertEquals($phpType, $setter->$setter->getParameters()[$propertyName]->getType());
            //$this->assertTrue($setter->getParameter($propertyName)->getNullable());
        }
    }

    public function assertClassHasConstructor(ClassType $class, array $properties): void
    {
        $this->assertTrue($class->hasMethod('__construct'));
        $this->assertCount(count($properties), $class->getMethod('__construct')->getParameters());

        $constructor = $class->getMethod('__construct');
        foreach ($properties as $propertyConfig) {
            list($propertyName, $type, $hasGetterAndSetter, $docTags, $xsdType) = $propertyConfig;
            $constructorParam = $constructor->getParameter($propertyName);
            $this->assertEquals($type, $constructorParam->getType());
            if ($constructorParam->getType() === 'array') {
                $this->assertEquals('[]', $constructorParam->getExpression());
            } else {
                if ($constructorParam->getNullable()) {
                    $this->assertNull($constructorParam->getValue());
                }
            }
//        $this->assertFalse($constructor->getParameter($propertyName)->getNullable());
        }
    }

    public function assertClassHasProperties(ClassType $class, array $properties): void
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
