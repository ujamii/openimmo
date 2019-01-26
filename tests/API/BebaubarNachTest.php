<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class BebaubarNachTest extends TestCase
{
    /** @var BebaubarNach */
    private $bebaubarNach;

    protected function setUp()
    {
        $this->bebaubarNach = new BebaubarNach();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
