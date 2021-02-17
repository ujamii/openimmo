<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;
use gossi\docblock\tags\AbstractTag;

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

        $this->assertClassHasProperty($generatedClass, 'feldname');
        $this->assertClassHasProperty($generatedClass, 'value', 'string', true, ['Inline' => '']);

        // TODO: test constructor
    }

}