<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class DefaultClassTest extends FileGeneratingTest
{

    public function testGenerateApiClassDefault(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'ausblick',
            'Welcher Ausblick ist vorhanden, Optionen nicht kombinierbar'
        );

        $this->assertClassHasConstants($generatedClass, [
            'BLICK_BERGE' => 'BERGE',
            'BLICK_FERNE' => 'FERNE',
            'BLICK_MEER'  => 'MEER',
            'BLICK_SEE'   => 'SEE',
        ]);

        $properties = [
            self::getPropertyConfig('blick', 'string', true, ['XmlAttribute' => '']),
        ];
        $this->assertClassHasProperties($generatedClass, $properties);
    }
}