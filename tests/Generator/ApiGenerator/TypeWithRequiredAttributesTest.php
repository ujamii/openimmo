<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class TypeWithRequiredAttributesTest extends FileGeneratingTest
{
    public function testGenerateApiClassWithRequiredAttributes(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile('type_with_required_attributes');

        $properties = [
            self::getPropertyConfig('wohnen', 'bool', true, ['XmlAttribute' => '']),
            self::getPropertyConfig('anlage', 'bool', true, ['XmlAttribute' => '']),
        ];

        $this->assertClassHasProperties($generatedClass, $properties);

        $wohnenProperty = $generatedClass->getProperty('wohnen');
        $this->assertStringContainsString('required', $wohnenProperty->getDocblock()->getShortDescription());

        $anlageProperty = $generatedClass->getProperty('anlage');
        $this->assertStringContainsString('optional', $anlageProperty->getDocblock()->getShortDescription());

        $reflectionClass = $this->getReflectionClassFromgeneratedClass($generatedClass);
        $wohnenGetter = $reflectionClass->getMethod('getWohnen');
        $this->assertFalse($wohnenGetter->getReturnType()->allowsNull());

        $anlageGetter = $reflectionClass->getMethod('getAnlage');
        $this->assertTrue($anlageGetter->getReturnType()->allowsNull());
    }
}
