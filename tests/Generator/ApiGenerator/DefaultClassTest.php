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
            'BLICK_IN_DIE_FERNE' => 'IN DIE FERNE',
            'BLICK_MEER'  => 'MEER',
            'BLICK_SEE'   => 'SEE',
        ]);

        $properties = [
            self::getPropertyConfig('blick', 'string', true, ['XmlAttribute' => '']),
        ];
        $this->assertClassHasProperties($generatedClass, $properties);

        $property = $generatedClass->getProperty('blick');
        $this->assertStringContainsString('see BLICK_* constants', $property->getDocblock()->getTags('see')->toArray()[0]->__toString());
    }
}
