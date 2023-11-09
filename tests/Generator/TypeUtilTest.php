<?php

namespace Ujamii\OpenImmo\Tests\Generator;

use Nette\PhpGenerator\Property;
use PHPUnit\Framework\TestCase;
use Ujamii\OpenImmo\Generator\TypeUtil;

class TypeUtilTest extends TestCase
{
    /**
     * @param bool|null $lcFirst
     *
     * @dataProvider camelizeDataProvider
     */
    public function testCamelize(string $nameInXsd, string $expectedPhpName, ?bool $lcFirst = false): void
    {
        $generatedName = TypeUtil::camelize($nameInXsd, $lcFirst);
        $this->assertSame($expectedPhpName, $generatedName);

        // test lcFirst is false by default
        $this->assertSame('FooBar', TypeUtil::camelize('foo_bar'));
    }

    public static function camelizeDataProvider(): array
    {
        return [
            ['bebaubar_nach', 'BebaubarNach'],
            ['umsst-id', 'UmsstId'],
            ['bebaubar_nach', 'bebaubarNach', true],
            ['umsst-id', 'umsstId', true],
            [strtolower('WASSER-ELEKTRO'), 'wasserElektro', true],
            [strtolower('ERDWAERME'), 'erdwaerme', true],
        ];
    }

    /**
     *
     * @dataProvider getTypeForSerializerDataProvider
     */
    public function testGetTypeForSerializer(string $xsdType, string $serializerType): void
    {
        $generatedType = TypeUtil::getTypeForSerializer($xsdType);
        $this->assertSame($serializerType, $generatedType);
    }

    public static function getTypeForSerializerDataProvider(): array
    {
        return [
            ['string', 'string'],
            ['dateTime', "DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>"],
            ['date', "DateTime<'Y-m-d'>"],
            ['float', 'float'],
            ['int', 'int'],
            ['array', 'array'],
            ['boolean', 'bool'],
            ['\DateTime', "DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>"],
            ['decimal', 'float'],

            ['string[]', 'array<string>'],
            ['float[]', 'array<float>'],
            ['int[]', 'array<int>'],
            ['boolean[]', 'array<bool>'],
            ['decimal[]', 'array<float>'],

            ['FooBarClassName', 'Ujamii\\OpenImmo\\API\\FooBarClassName'],
            ['FooBarClassName[]', 'array<Ujamii\\OpenImmo\\API\\FooBarClassName>'],
        ];
    }

    /**
     *
     * @dataProvider getValidPhpTypeDataProvider
     */
    public function testGetValidPhpType(string $xsdType, string $phpType): void
    {
        $generatedType = TypeUtil::getValidPhpType($xsdType);
        $this->assertSame($phpType, $generatedType);
    }

    public static function getValidPhpTypeDataProvider(): array
    {
        return [
            ['decimal', 'float'],
            ['float', 'float'],

            ['boolean', 'bool'],
            ['bool', 'bool'],

            ['int', 'int'],
            ['positiveInteger', 'int'],
            ['PositiveIntegerType', 'int'],

            ['date', '\\' . \DateTime::class],
            ['dateTime', '\\' . \DateTime::class],

            ['string', 'string'],
            ['kontakt', 'string'],
            ['base64Binary', 'string'],

            ['array', 'array'],

            ['FooBarClassName', '\\Ujamii\\OpenImmo\\API\\FooBarClassName'],
        ];
    }

    /**
     * @param mixed $defaultValue
     *
     * @dataProvider getDefaultValueForTypeDataProvider
     */
    public function testGetDefaultValueForType(string $propertyType, bool $nullable, $defaultValue): void
    {
        $generatedValue = TypeUtil::getDefaultValueForType($propertyType, $nullable);
        $this->assertSame($defaultValue, $generatedValue);
    }

    public static function getDefaultValueForTypeDataProvider(): array
    {
        return [
            ['float', false, 0.0],
            ['float', true, null],

            ['bool', false, false],
            ['bool', true, null],

            ['int', false, 0],
            ['int', true, null],

            ['string', false, ''],
            ['string', true, null],

            ['array', false, []],
            ['array', true, null],

            ['Foobar', false, null],
            ['Foobar', true, null],

            ['Feld[]', false, []],
            ['Feld[]', true, null],
        ];
    }

    /**
     * @dataProvider getConstantsBasedPropertyDataProvider
     */
    public function testIsConstantsBasedProperty(Property $property, bool $expectedResult): void
    {
        $this->assertSame($expectedResult, TypeUtil::isConstantsBasedProperty($property));
    }

    public static function getConstantsBasedPropertyDataProvider(): \Generator
    {
        $property = new Property('foobar');
        $property->setComment('Hallo Welt!');
        yield [
            $property,
            false
        ];

        $property2 = new Property('foobar');
        $property2->addComment('@see foobar_* constants');
        yield [
            $property2,
            false
        ];

        $property3 = new Property('foobar');
        $property3->setComment('@see FOOBAR_* constants');
        yield [
            $property3,
            true
        ];
    }
}
