<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;

class PositiveIntegerTypeTest extends FileGeneratingTest
{

    public function testGenerateApiClassAusblick(): void
    {
        $fixtureFile = './tests/fixtures/PositiveIntegerType.xsd';
        $this->generator->generateApiClasses($fixtureFile, true, $this->tmpDir);

        $this->assertFileExists($this->tmpDir . 'PositiveIntegerType.php');
        $generatedClass = PhpClass::fromFile($this->tmpDir . 'PositiveIntegerType.php');

        $this->assertCount(1, $generatedClass->getDocblock()->getTags('XmlRoot'));
        $this->assertEquals('("positive_integer_type")', $generatedClass->getDocblock()->getTags('XmlRoot')->get(0)->getDescription());

        $properties = [
            self::getPropertyConfig('positiveInteger', 'int', true, [])
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }

}