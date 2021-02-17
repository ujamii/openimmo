<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

use gossi\codegen\model\PhpClass;

class TypeWithExtensionClassTest extends FileGeneratingTest
{

    public function testGenerateApiClassTypeWithExtension(): void
    {
        $generatedClass = $this->getGeneratedClassFromFile(
            'type_with_extension'
        );

        $properties = [
            self::getPropertyConfig('foobar', 'float'),
            self::getPropertyConfig('value', 'float', true, ['Inline' => ''])
        ];

        $this->assertClassHasProperties($generatedClass, $properties);
    }

}