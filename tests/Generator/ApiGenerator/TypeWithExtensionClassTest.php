<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;

class TypeWithExtensionClassTest extends FileGeneratingTest
{

    public function testGenerateApiClassAusblick(): void
    {
        $fixtureFile = './tests/fixtures/TypeWithExtension.xsd';
        $this->generator->generateApiClasses($fixtureFile, true, $this->tmpDir);

        $this->assertFileExists($this->tmpDir . 'Typewithextension.php');
        $generatedClass = PhpClass::fromFile($this->tmpDir . 'Typewithextension.php');

        $this->assertCount(1, $generatedClass->getDocblock()->getTags('XmlRoot'));
        $this->assertEquals('("typewithextension")', $generatedClass->getDocblock()->getTags('XmlRoot')->get(0)->getDescription());

        $properties = [
            self::getPropertyConfig('foobar', 'float'),
            self::getPropertyConfig('value', 'float', true, ['Inline' => ''])
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }

}