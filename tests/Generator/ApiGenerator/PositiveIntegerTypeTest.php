<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class PositiveIntegerTypeTest extends FileGeneratingTest
{

    public function testGenerateApiClassPositiveIntegerType(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'positive_integer_type'
        );

        $properties = [
            self::getPropertyConfig('positiveInteger', 'int', true, [])
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }

}