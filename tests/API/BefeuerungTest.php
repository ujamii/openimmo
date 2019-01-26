<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class BefeuerungTest extends TestCase
{
    /** @var Befeuerung */
    private $befeuerung;

    protected function setUp()
    {
        $this->befeuerung = new Befeuerung();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
