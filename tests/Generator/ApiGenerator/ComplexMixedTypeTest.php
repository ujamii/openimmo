<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;

class ComplexMixedTypeTest extends FileGeneratingTest
{

    public function testGenerateApiClassComplexMixedType(): void
    {
        $fixtureFile = './tests/fixtures/ComplexMixedType.xsd';
        $this->generator->generateApiClasses($fixtureFile, true, $this->tmpDir);

        $this->assertFileExists($this->tmpDir . 'ComplexMixedType.php');
        $generatedClass = PhpClass::fromFile($this->tmpDir . 'ComplexMixedType.php');

        $this->assertContains(
            'Courtage, die der Kunde zu zahlen hat, als Betrag in ? / % / MM, daher Textfeld',
            $generatedClass->getDocblock()->getShortDescription()
        );

        $this->assertCount(1, $generatedClass->getDocblock()->getTags('XmlRoot'));
        $this->assertEquals('("complex_mixed_type")', $generatedClass->getDocblock()->getTags('XmlRoot')->get(0)->getDescription());

        $properties = [
            self::getPropertyConfig('mitPommes', 'bool'),
            self::getPropertyConfig('value', 'string', true, ['Inline' => '']),
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }

}