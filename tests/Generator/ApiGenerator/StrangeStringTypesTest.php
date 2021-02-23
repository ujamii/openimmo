<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class StrangeStringTypesTest extends FileGeneratingTest
{
    public function testGenerateApiClassWithDateTypes(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'strange_string_types'
        );

        $properties = [
            self::getPropertyConfig('telZentrale'),
            self::getPropertyConfig('anhanginhalt'),
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }
}
