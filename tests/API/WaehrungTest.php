<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class WaehrungTest extends TestCase
{
    /** @var Waehrung */
    private $waehrung;

    protected function setUp()
    {
        $this->waehrung = new Waehrung();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
