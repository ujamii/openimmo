<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class BadTest extends TestCase
{
    /** @var Bad */
    private $bad;

    protected function setUp()
    {
        $this->bad = new Bad();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
