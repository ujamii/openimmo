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

        $property = $generatedClass->getProperty('mwstSatz');
        $this->assertStringContainsString('Maximum precision: 2', $property->getDocblock()->__toString());
        $this->assertStringContainsString('Minimum value (inclusive): 0', $property->getDocblock()->__toString());
        $this->assertStringContainsString('Maximum value (inclusive): 10', $property->getDocblock()->__toString());

        $telDurchw = $generatedClass->getProperty('telDurchw');
        $this->assertStringContainsString('Minimum length: 1', $telDurchw->getDocblock()->__toString());

        require_once "{$this->tmpDir}{$generatedClass->getName()}.php";
        $className = $generatedClass->getQualifiedName();
        $subject = new $className();
        $this->assertSame(0.0, $subject->getMwstSatz());
    }
}
