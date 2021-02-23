<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class InvalidRestrictionTest extends FileGeneratingTest
{
    public function testGenerateApiClassDefault(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $generatedClass = $this->getGeneratedClassFromFile(
            'invalid_restriction'
        );
        $properties     = [
            self::getPropertyConfig('mwstSatz', 'float'),
        ];
        $this->assertClassHasProperties($generatedClass, $properties);
    }
}
