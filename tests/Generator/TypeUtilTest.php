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

}