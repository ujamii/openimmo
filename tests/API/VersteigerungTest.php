<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class VersteigerungTest extends TestCase
{
    /** @var Versteigerung */
    private $versteigerung;

    protected function setUp()
    {
        $this->versteigerung = new Versteigerung();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
