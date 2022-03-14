<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use JMS\Serializer\Annotation\SerializedName;

class TypeWithInconsistentNamingTest extends FileGeneratingTest
{
    public function testGenerateApiClassWithDateTypes(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'type_with_inconsistent_naming'
        );

        $properties = [
            self::getPropertyConfig('uppercaseftw', 'bool', true, ['SerializedName' => '("UPPERCASEFTW")']),
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
        $this->assertContains(SerializedName::class, $generatedClass->getNamespace()->getUses());
    }
}
