<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class HeizkostennettoTest extends TestCase
{
    /** @var Heizkostennetto */
    private $heizkostennetto;

    /** @var float */
    private $heizkostenust;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->heizkostenust = null;
        $this->value = null;
        $this->heizkostennetto = new Heizkostennetto(
            $this->heizkostenust,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
