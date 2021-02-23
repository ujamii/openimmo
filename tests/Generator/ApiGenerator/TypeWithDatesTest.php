<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class TypeWithDatesTest extends FileGeneratingTest
{
    public function testGenerateApiClassWithDateTypes(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'type_with_dates'
        );

        $properties = [
            self::getPropertyConfig('dateTime', '\\' . \DateTime::class, true, [], 'dateTime'),
            self::getPropertyConfig('date', '\\' . \DateTime::class, true, [], 'date'),
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }
}
