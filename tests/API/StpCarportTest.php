<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class StpCarportTest extends TestCase
{
    /** @var StpCarport */
    private $stpCarport;

    protected function setUp()
    {
        $this->stpCarport = new StpCarport();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
