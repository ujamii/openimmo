<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AngeschlGastronomieTest extends TestCase
{
    /** @var AngeschlGastronomie */
    private $angeschlGastronomie;

    protected function setUp()
    {
        $this->angeschlGastronomie = new AngeschlGastronomie();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
