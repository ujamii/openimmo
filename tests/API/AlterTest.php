<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AlterTest extends TestCase
{
    /** @var Alter */
    private $alter;

    protected function setUp()
    {
        $this->alter = new Alter();
    }

    public function testAlterAttr()
    {
        $this->alter->setAlterAttr(Alter::ALTER_ATTR_ALTBAU);
        $this->assertEquals(Alter::ALTER_ATTR_ALTBAU, $this->alter->getAlterAttr());
    }

    public function testValue()
    {
        $this->alter->setValue('234 Jahre');
        $this->assertEquals('234 Jahre', $this->alter->getValue());
    }

    public function testConstructor()
    {
        $this->alter = new Alter(Alter::ALTER_ATTR_NEUBAU, '3 Tage');
        $this->assertEquals(Alter::ALTER_ATTR_NEUBAU, $this->alter->getAlterAttr());
        $this->assertEquals('3 Tage', $this->alter->getValue());
    }
}
