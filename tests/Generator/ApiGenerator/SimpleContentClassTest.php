<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use JMS\Serializer\Annotation\Type;

class SimpleContentClassTest extends FileGeneratingTest
{
    public function testGenerateApiClassSimpleContent(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'user_defined_simplefield',
            'Benutzerdefinierte Angaben'
        );

        $properties = [
            self::getPropertyConfig('feldname', 'string', true, ['XmlAttribute' => '']),
            self::getPropertyConfig('value', 'string', true, ['Inline' => ''])
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
        $this->assertContains(Type::class, $generatedClass->getNamespace()->getUses());
    }
}
