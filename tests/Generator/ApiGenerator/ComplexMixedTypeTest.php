<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

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
        $this->assertTrue($generatedClass->hasUseStatement('JMS\\Serializer\\Annotation\\Type'));
        $this->assertTrue($generatedClass->hasUseStatement('JMS\\Serializer\\Annotation\\Inline'));
        $this->assertTrue($generatedClass->hasUseStatement('JMS\\Serializer\\Annotation\\XmlAttribute'));
    }
}
