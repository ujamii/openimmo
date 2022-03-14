<?php

namespace Ujamii\OpenImmo\Tests\Generator;

use Nette\PhpGenerator\Property;
use PHPUnit\Framework\TestCase;
use Ujamii\OpenImmo\Generator\CodeGenUtil;

class CodeGenUtilTest extends TestCase
{
    public function testAddDescriptionPart()
    {
        $property = new Property('foo');
        $property->setComment('foobar makes the world go round');

        CodeGenUtil::addDescriptionPart($property, 'really!');
        $this->assertEquals('foobar makes the world go round' . CodeGenUtil::DESCRIPTION_PART_DELIMTER . 'really!', $property->getComment());
    }

    public function testEmptyExistingDescription()
    {
        $property = new Property('foo');
        $property->setComment('   ');

        CodeGenUtil::addDescriptionPart($property, 'foobar');
        $this->assertEquals('foobar', $property->getComment());
    }

    public function testAddEmptyDescription()
    {
        $property = new Property('foo');
        $property->setComment('foo bar');

        CodeGenUtil::addDescriptionPart($property, '   ');
        $this->assertEquals('foo bar', $property->getComment());
    }
}
