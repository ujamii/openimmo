<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;
use gossi\docblock\tags\AbstractTag;
use PHPUnit\Framework\TestCase;
use Ujamii\OpenImmo\Generator\ApiGenerator;

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
        mkdir($this->tmpDir);
    }

    public function tearDown(): void
    {
        array_map('unlink', glob($this->tmpDir . '/*.php'));
        rmdir($this->tmpDir);
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
        array $docTags = ['XmlAttribute' => '']
    ): array {
        return [$propertyName, $type, $hasGetterAndSetter, $docTags];
    }

    public function assertClassHasProperty(
        PhpClass $class,
        string $propertyName,
        string $type = 'string',
        bool $hasGetterAndSetter = true,
        array $docTags = ['XmlAttribute' => '']
    ): void {
        $this->assertTrue($class->hasProperty($propertyName));
        $property = $class->getProperty($propertyName);
        $this->assertEquals($type, $property->getType());
        $this->assertTrue($property->getDocblock()->hasTag('Type'));
        $this->assertEquals('("' . $type . '")', trim($property->getDocblock()->getTags('Type')->get(0)->getDescription()));

        foreach ($docTags as $tagName => $tagValue) {
            $this->assertTrue($property->getDocblock()->hasTag($tagName));
            if ( ! empty($tagValue)) {
                /* @var AbstractTag $docTag */
                $docTag = $property->getDocblock()->getTags($tagName)->get(0);
                $this->assertEquals($tagValue, $docTag->__toString());
            }
        }

        if ($hasGetterAndSetter) {
            $this->assertEquals('protected', $property->getVisibility());
            $this->assertTrue($class->hasMethod('get' . ucfirst($propertyName)));

            $getter = $class->getMethod('get' . ucfirst($propertyName));
            $this->assertEquals('public', $getter->getVisibility());
            $this->assertEquals($type, $getter->getType());
            //$this->assertTrue($getter->getNullable());

            $setter = $class->getMethod('set' . ucfirst($propertyName));
            $this->assertEquals('public', $setter->getVisibility());
            $this->assertEquals($class->getName(), $setter->getType());
            $this->assertTrue($setter->hasParameter($propertyName));
            $this->assertEquals($type, $setter->getParameter($propertyName)->getType());
            //$this->assertTrue($setter->getParameter($propertyName)->getNullable());
        }
    }

    public function assertClassHasConstructor(PhpClass $class, array $properties): void
    {
        $this->assertTrue($class->hasMethod('__construct'));
        $this->assertCount(count($properties), $class->getMethod('__construct')->getParameters());

        $constructor = $class->getMethod('__construct');
        foreach ($properties as $propertyConfig) {
            list($propertyName, $type) = $propertyConfig;
            $this->assertEquals($type, $constructor->getParameter($propertyName)->getType());
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