<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;
use gossi\docblock\tags\AbstractTag;
use Ujamii\OpenImmo\Tests\Generator\ApiGenerator\FileGeneratingTest;

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

        $this->assertClassHasProperty($generatedClass, 'blick', 'string', true, ['XmlAttribute' => '', 'see' => '@see BLICK_* constants']);

        $this->assertTrue($generatedClass->hasMethod('__construct'));
        $this->assertCount(1, $generatedClass->getMethod('__construct')->getParameters());
        $this->assertEquals('string', $generatedClass->getMethod('__construct')->getParameter('blick')->getType());
//        $this->assertFalse($generatedClass->getMethod('__construct')->getParameter('blick')->getNullable());
    }



}