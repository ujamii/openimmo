<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class StpParkhausTest extends TestCase
{
    /** @var StpParkhaus */
    private $stpParkhaus;

    protected function setUp()
    {
        $this->stpParkhaus = new StpParkhaus();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
