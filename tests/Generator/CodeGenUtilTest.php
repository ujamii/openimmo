<?php

namespace Ujamii\OpenImmo\Tests\Generator;

use gossi\codegen\model\PhpProperty;
use PHPUnit\Framework\TestCase;
use Ujamii\OpenImmo\Generator\CodeGenUtil;

class CodeGenUtilTest extends TestCase
{
    public function testAddDescriptionPart()
    {
        $property = new PhpProperty('foo');
        $property->setTypeDescription('foobar makes the world go round');

        CodeGenUtil::addDescriptionPart($property, 'really!');
        $this->assertEquals('foobar makes the world go round, really!', $property->getTypeDescription());
    }

    public function testEmptyExistingDescription()
    {
        $property = new PhpProperty('foo');
        $property->setTypeDescription('   ');

        CodeGenUtil::addDescriptionPart($property, 'foobar');
        $this->assertEquals('foobar', $property->getTypeDescription());
    }

    public function testAddEmptyDescription()
    {
        $property = new PhpProperty('foo');
        $property->setTypeDescription('foo bar');

        CodeGenUtil::addDescriptionPart($property, '   ');
        $this->assertEquals('foo bar', $property->getTypeDescription());
    }
}
