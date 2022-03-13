<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use Ujamii\OpenImmo\Generator\TypeUtil;

class ComplexTypeClassTest extends FileGeneratingTest
{
    public function testGenerateApiClassComplexType(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile('user_defined_extend');
        $properties     = [
            self::getPropertyConfig('feld', 'array', true, ['XmlList' => '(inline = true, entry = "feld")'], 'Feld[]')
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }

    public function testArrayGetterDoesNotReturnNullForNewClass()
    {
        $generatedClass = $this->getGeneratedClassFromFile('user_defined_extend');
        $className = TypeUtil::OPENIMMO_NAMESPACE . $generatedClass->getName();

        $instance = new $className();
        $this->assertEquals([], $instance->getFeld());
    }
}
