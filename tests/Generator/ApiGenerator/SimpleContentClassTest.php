<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class SimpleContentClassTest extends FileGeneratingTest
{

    public function testGenerateApiClassSimpleContent(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'user_defined_simplefield',
            'Benutzerdefinierte Angaben'
        );

        $properties = [
            self::getPropertyConfig('feldname'),
            self::getPropertyConfig('value', 'string', true, ['Inline' => ''])
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }

}