<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class SonstigekostennettoTest extends TestCase
{
    /** @var Sonstigekostennetto */
    private $sonstigekostennetto;

    /** @var float */
    private $sonstigekostenust;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->sonstigekostenust = null;
        $this->value = null;
        $this->sonstigekostennetto = new Sonstigekostennetto(
            $this->sonstigekostenust,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
