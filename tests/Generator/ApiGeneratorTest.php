<?php

namespace Ujamii\OpenImmo\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Ujamii\OpenImmo\Generator\ApiGenerator;

/**
 * Class SerializerTest
 * @package Ujamii\OpenImmo\Tests\Generator
 */
class ApiGeneratorTest extends TestCase
{

    /**
     * @var ApiGenerator
     */
    protected $generator;

    public function setUp()
    {
        $this->generator = new ApiGenerator();
    }

    public function testDefaultGeneratorConfig()
    {
        $config = [
            'generateScalarTypeHints' => true,
            'generateNullableTypes'   => true,
            'generateReturnTypeHints' => true,
        ];

        $this->assertEquals($config, $this->generator->getGeneratorConfig());
    }

    public function testSetGeneratorConfig()
    {
        $config = [
            'generateScalarTypeHints' => false,
            'generateNullableTypes'   => false,
            'generateReturnTypeHints' => false,
        ];
        $this->generator->setGeneratorConfig($config);

        $this->assertEquals($config, $this->generator->getGeneratorConfig());
    }

    public function testDefaultTargetFolder()
    {
        $this->assertEquals('./src/API/', $this->generator->getTargetFolder());
    }

    public function testSetTargetFolder()
    {
        $folder = '/dev/null';
        $this->generator->setTargetFolder($folder);
        $this->assertEquals($folder, $this->generator->getTargetFolder());
    }

}