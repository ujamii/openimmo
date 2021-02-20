<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class ComplexTypeClassTest extends FileGeneratingTest
{

    public function testGenerateApiClassComplexType(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'user_defined_extend'
        );
        $properties     = [
            self::getPropertyConfig('feld', 'array', true, ['XmlList' => '(inline = true, entry = "feld")'], 'Feld[]')
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }

}