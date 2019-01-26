<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class StpSonstigeTest extends TestCase
{
    /** @var StpSonstige */
    private $stpSonstige;

    protected function setUp()
    {
        $this->stpSonstige = new StpSonstige();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
