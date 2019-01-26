<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class MasterTest extends TestCase
{
    /** @var Master */
    private $master;

    protected function setUp()
    {
        $this->master = new Master();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
