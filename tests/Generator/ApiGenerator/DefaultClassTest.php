<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;

class DefaultClassTest extends FileGeneratingTest
{

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

        $properties = [
            self::getPropertyConfig('blick', 'string', true, ['XmlAttribute' => '', 'see' => '@see BLICK_* constants']),
        ];
        $this->assertClassHasProperties($generatedClass, $properties);
    }
}