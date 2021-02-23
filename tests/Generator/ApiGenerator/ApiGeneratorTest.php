<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class ApiGeneratorTest extends FileGeneratingTest
{
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
}
