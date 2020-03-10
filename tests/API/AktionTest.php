<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AktionTest extends TestCase
{
    /** @var Aktion */
    private $aktion;

    protected function setUp()
    {
        $this->aktion = new Aktion();
    }

    public function testAktionart()
    {
        $this->aktion->setAktionart(Aktion::AKTIONART_REFERENZ);
        $this->assertEquals(Aktion::AKTIONART_REFERENZ, $this->aktion->getAktionart());
    }

    public function testValue()
    {
        $this->aktion->setValue('FooBar 123!');
        $this->assertEquals('FooBar 123!', $this->aktion->getValue());
    }

    public function test__construct()
    {
        $this->aktion = new Aktion(Aktion::AKTIONART_DELETE, 'LÖSCHEN!!!');
        $this->assertEquals(Aktion::AKTIONART_DELETE, $this->aktion->getAktionart());
        $this->assertEquals('LÖSCHEN!!!', $this->aktion->getValue());
    }
}
