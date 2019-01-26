<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class BetriebskostennettoTest extends TestCase
{
    /** @var Betriebskostennetto */
    private $betriebskostennetto;

    /** @var float */
    private $betriebskostenust;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->betriebskostenust = null;
        $this->value = null;
        $this->betriebskostennetto = new Betriebskostennetto(
            $this->betriebskostenust,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
