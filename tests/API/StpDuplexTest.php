<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class StpDuplexTest extends TestCase
{
    /** @var StpDuplex */
    private $stpDuplex;

    protected function setUp()
    {
        $this->stpDuplex = new StpDuplex();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
