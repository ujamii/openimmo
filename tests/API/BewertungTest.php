<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class BewertungTest extends TestCase
{
    /** @var Bewertung */
    private $bewertung;

    protected function setUp()
    {
        $this->bewertung = new Bewertung();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
