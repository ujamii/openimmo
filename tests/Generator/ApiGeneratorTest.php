<?php

namespace Ujamii\OpenImmo\Tests\Generator;

use gossi\codegen\model\PhpClass;
use gossi\docblock\tags\AbstractTag;
use PHPUnit\Framework\TestCase;
use Ujamii\OpenImmo\Generator\ApiGenerator;

/**
 * Class SerializerTest
 * @package Ujamii\OpenImmo\Tests\Generator
 */
class ApiGeneratorTest extends TestCase
{
    private const CLASSES_TARGET_FOLDER = './tests/_temp';

    /**
     * @var ApiGenerator
     */
    protected $generator;

    /**
     * @var string
     */
    private $tmpDir;

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

    public function testGenerateApiClassAusblick(): void
    {
        $fixtureFile = './tests/fixtures/Ausblick.xsd';
        $this->generator->generateApiClasses($fixtureFile, true, $this->tmpDir);

        $this->assertFileExists($this->tmpDir . 'Ausblick.php');
        $generatedClass = PhpClass::fromFile($this->tmpDir . 'Ausblick.php');

        $this->assertContains(
            'Welcher Ausblick ist vorhanden, Optionen nicht kombinierbar',
            $generatedClass->getDocblock()->getShortDescription()
        );
        $this->assertCount(1, $generatedClass->getDocblock()->getTags('XmlRoot'));
        $this->assertEquals('("ausblick")', $generatedClass->getDocblock()->getTags('XmlRoot')->get(0)->getDescription());

        $this->assertClassHasConstants($generatedClass, [
            'BLICK_BERGE' => 'BERGE',
            'BLICK_FERNE' => 'FERNE',
            'BLICK_MEER'  => 'MEER',
            'BLICK_SEE'   => 'SEE',
        ]);

        $this->assertTrue($generatedClass->hasProperty('blick'));
        $blickProperty = $generatedClass->getProperty('blick');
        $this->assertEquals('protected', $blickProperty->getVisibility());
        $this->assertEquals('string', $blickProperty->getType());
        $this->assertTrue($blickProperty->getDocblock()->hasTag('XmlAttribute'));
        $this->assertTrue($blickProperty->getDocblock()->hasTag('Type'));
        $this->assertEquals('("string")', $blickProperty->getDocblock()->getTags('Type')->get(0)->getDescription());
        $this->assertTrue($blickProperty->getDocblock()->hasTag('see'));
        /* @var AbstractTag $seeTag */
        $seeTag = $blickProperty->getDocblock()->getTags('see')->get(0);
        $this->assertEquals('@see BLICK_* constants', $seeTag->__toString());

        $this->assertTrue($generatedClass->hasMethod('getBlick'));
        $this->assertEquals('string', $generatedClass->getMethod('getBlick')->getType());
//        $this->assertTrue($generatedClass->getMethod('getBlick')->getNullable());
        $this->assertTrue($generatedClass->hasMethod('setBlick'));
        $this->assertEquals('Ausblick', $generatedClass->getMethod('setBlick')->getType());
        $this->assertCount(1, $generatedClass->getMethod('setBlick')->getParameters());
//        $this->assertTrue($generatedClass->getMethod('setBlick')->getParameter('blick')->getNullable());
        $this->assertEquals('string', $generatedClass->getMethod('setBlick')->getParameter('blick')->getType());
        $this->assertTrue($generatedClass->hasMethod('__construct'));
        $this->assertCount(1, $generatedClass->getMethod('__construct')->getParameters());
        $this->assertEquals('string', $generatedClass->getMethod('__construct')->getParameter('blick')->getType());
//        $this->assertFalse($generatedClass->getMethod('__construct')->getParameter('blick')->getNullable());
    }

    public function testDefaultGeneratorConfig(): void
    {
        $config = [
            'generateScalarTypeHints' => true,
            'generateNullableTypes'   => true,
            'generateReturnTypeHints' => true,
        ];

        $this->assertEquals($config, $this->generator->getGeneratorConfig());
    }

    public function testSetGeneratorConfig(): void
    {
        $config = [
            'generateScalarTypeHints' => false,
            'generateNullableTypes'   => false,
            'generateReturnTypeHints' => false,
        ];
        $this->generator->setGeneratorConfig($config);

        $this->assertEquals($config, $this->generator->getGeneratorConfig());
    }

    public function testDefaultTargetFolder(): void
    {
        $this->assertEquals('./src/API/', $this->generator->getTargetFolder());
    }

    public function testSetExistingTargetFolder(): void
    {
        $folder = sys_get_temp_dir();
        $this->generator->setTargetFolder($folder);
        $this->assertEquals($folder, $this->generator->getTargetFolder());
    }

    /**
     * @throws \Exception
     */
    public function testSetNonExistingTargetFolder(): void
    {
        $this->expectException(\Exception::class);
        $folder = '/dev/null';
        $this->generator->setTargetFolder($folder);
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

}