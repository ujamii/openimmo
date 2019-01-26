<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class UebertragungTest extends TestCase
{
    /** @var Uebertragung */
    private $uebertragung;

    protected function setUp()
    {
        $this->uebertragung = new Uebertragung();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
