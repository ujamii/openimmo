<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use Ujamii\OpenImmo\Generator\TypeUtil;

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

        $property = $generatedClass->getProperty('mwstSatz');
        $this->assertStringContainsString('Maximum precision: 2', $property->getComment());
        $this->assertStringContainsString('Minimum value (inclusive): 0', $property->getComment());
        $this->assertStringContainsString('Maximum value (inclusive): 10', $property->getComment());

        $telDurchw = $generatedClass->getProperty('telDurchw');
        $this->assertStringContainsString('Minimum length: 1', $telDurchw->getComment());

        require_once "{$this->tmpDir}{$generatedClass->getName()}.php";
        $className = TypeUtil::OPENIMMO_NAMESPACE . $generatedClass->getName();
        $subject = new $className();
        $this->assertSame(0.0, $subject->getMwstSatz());
    }
}
