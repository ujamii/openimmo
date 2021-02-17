<?php

namespace Ujamii\OpenImmo\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Ujamii\OpenImmo\Generator\TypeUtil;

class TypeUtilTest extends TestCase
{

    /**
     * @param string $nameInXsd
     * @param string $expectedPhpName
     * @param bool|null $lcFirst
     *
     * @dataProvider camelizeDataProvider
     */
    public function testCamelize(string $nameInXsd, string $expectedPhpName, ?bool $lcFirst = false): void
    {
        $generatedName = TypeUtil::camelize($nameInXsd, $lcFirst);
        $this->assertEquals($expectedPhpName, $generatedName);
    }

    public function camelizeDataProvider(): array
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
     * @param string $xsdType
     * @param string $serializerType
     *
     * @dataProvider getTypeForSerializerDataProvider
     */
    public function testGetTypeForSerializer(string $xsdType, string $serializerType): void
    {
        $generatedType = TypeUtil::getTypeForSerializer($xsdType);
        $this->assertEquals($serializerType, $generatedType);
    }

    public function getTypeForSerializerDataProvider(): array
    {
        return [
            ['string', 'string'],
            ['dateTime', 'dateTime'],
            ['float', 'float'],
            ['int', 'int'],
            ['array', 'array'],
            ['boolean', 'boolean'],
            ['\DateTime', '\DateTime'],
            ['decimal', 'float'],

            ['string[]', 'array<string>'],
            ['dateTime[]', 'array<dateTime>'],
            ['float[]', 'array<float>'],
            ['int[]', 'array<int>'],
            ['boolean[]', 'array<boolean>'],
            ['\DateTime[]', 'array<\DateTime>'],
            ['decimal[]', 'array<float>'],

            ['FooBarClassName', 'Ujamii\\OpenImmo\\API\\FooBarClassName'],
            ['FooBarClassName[]', 'array<Ujamii\\OpenImmo\\API\\FooBarClassName>'],
        ];
    }

}