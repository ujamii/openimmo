<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;

class ComplexTypeClassTest extends FileGeneratingTest
{

    public function testGenerateApiClassAusblick(): void
    {
        $fixtureFile = './tests/fixtures/UserDefinedExtend.xsd';
        $this->generator->generateApiClasses($fixtureFile, true, $this->tmpDir);

        $this->assertFileExists($this->tmpDir . 'UserDefinedExtend.php');
        $generatedClass = PhpClass::fromFile($this->tmpDir . 'UserDefinedExtend.php');

        $this->assertCount(1, $generatedClass->getDocblock()->getTags('XmlRoot'));
        $this->assertEquals('("user_defined_extend")', $generatedClass->getDocblock()->getTags('XmlRoot')->get(0)->getDescription());

        $properties = [
            self::getPropertyConfig('feld', 'Feld[]', true, ['XmlList' => '(inline = true, entry = "feld")'])
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }

}