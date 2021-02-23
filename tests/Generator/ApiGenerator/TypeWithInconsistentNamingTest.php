<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

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
        $this->assertTrue($generatedClass->hasUseStatement('JMS\Serializer\Annotation\SerializedName'));
    }
}
