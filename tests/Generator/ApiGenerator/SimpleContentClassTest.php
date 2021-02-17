<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;

class SimpleContentClassTest extends FileGeneratingTest
{

    public function testGenerateApiClassAusblick(): void
    {
        $fixtureFile = './tests/fixtures/UserDefinedSimplefield.xsd';
        $this->generator->generateApiClasses($fixtureFile, true, $this->tmpDir);

        $this->assertFileExists($this->tmpDir . 'UserDefinedSimplefield.php');
        $generatedClass = PhpClass::fromFile($this->tmpDir . 'UserDefinedSimplefield.php');

        $this->assertContains(
            'Benutzerdefinierte Angaben',
            $generatedClass->getDocblock()->getShortDescription()
        );
        $this->assertCount(1, $generatedClass->getDocblock()->getTags('XmlRoot'));
        $this->assertEquals('("user_defined_simplefield")', $generatedClass->getDocblock()->getTags('XmlRoot')->get(0)->getDescription());

        $properties = [
            self::getPropertyConfig('feldname'),
            self::getPropertyConfig('value', 'string', true, ['Inline' => ''])
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }

}