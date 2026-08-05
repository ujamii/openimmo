<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class DuplicatePropertiesInsideChoiceTest extends FileGeneratingTest
{
    public function testGenerateApiClassDefault(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile('duplicate_properties_inside_choice');

        $properties = [
            self::getPropertyConfig('ort'),
            self::getPropertyConfig('plz'),
        ];
        $this->assertClassHasProperties($generatedClass, $properties);
    }
}
