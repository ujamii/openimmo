<?php declare(strict_types=1);

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
        $return = $this->alter->setAlterAttr(Alter::ALTER_ATTR_ALTBAU);
        $this->assertEquals(Alter::ALTER_ATTR_ALTBAU, $this->alter->getAlterAttr());
        $this->assertEquals($this->alter, $return);
    }

    public function testConstructor()
    {
        $this->alter = new Alter(Alter::ALTER_ATTR_NEUBAU);
        $this->assertEquals(Alter::ALTER_ATTR_NEUBAU, $this->alter->getAlterAttr());
    }
}
