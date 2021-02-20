<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class TypeWithRestrictionsTest extends FileGeneratingTest
{

    public function testGenerateApiClassDefault(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'type_with_restrictions'
        );
        $properties     = [
            self::getPropertyConfig('mwstSatz', 'float'),
            self::getPropertyConfig('anzahlEtagen', 'int'),
            self::getPropertyConfig('telDurchw'),
        ];
        $this->assertClassHasProperties($generatedClass, $properties);
    }
}