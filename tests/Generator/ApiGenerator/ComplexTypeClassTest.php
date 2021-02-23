<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class ComplexTypeClassTest extends FileGeneratingTest
{
    public function testGenerateApiClassComplexType(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile('user_defined_extend');
        $properties     = [
            self::getPropertyConfig('feld', 'array', true, ['XmlList' => '(inline = true, entry = "feld")'], 'Feld[]')
        ];

        $this->assertClassHasProperties($generatedClass, $properties);

        $getter = $generatedClass->getMethod('getFeld');
        $this->assertStringContainsString('Returns array of Feld', $getter->getDocblock()->__toString());
    }

    public function testArrayGetterDoesNotReturnNullForNewClass()
    {
        $generatedClass = $this->getGeneratedClassFromFile('user_defined_extend');
        $className = $generatedClass->getQualifiedName();

        $instance = new $className();
        $this->assertEquals([], $instance->getFeld());
    }
}
