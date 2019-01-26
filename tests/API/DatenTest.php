<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class DatenTest extends TestCase
{
    /** @var Daten */
    private $daten;

    protected function setUp()
    {
        $this->daten = new Daten();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
