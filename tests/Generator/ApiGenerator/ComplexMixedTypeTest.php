<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;

class ComplexMixedTypeTest extends FileGeneratingTest
{
    public function testGenerateApiClassComplexMixedType(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'complex_mixed_type',
            'Courtage, die der Kunde zu zahlen hat, als Betrag in ? / % / MM, daher Textfeld'
        );

        $properties = [
            self::getPropertyConfig('mitPommes', 'bool', true, ['XmlAttribute' => '']),
            self::getPropertyConfig('value', 'string', true, ['Inline' => '']),
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
        $this->assertContains(Type::class, $generatedClass->getNamespace()->getUses());
        $this->assertContains(Inline::class, $generatedClass->getNamespace()->getUses());
        $this->assertContains(XmlAttribute::class, $generatedClass->getNamespace()->getUses());
    }
}
