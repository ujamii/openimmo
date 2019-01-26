<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class VerkaufstatusTest extends TestCase
{
    /** @var Verkaufstatus */
    private $verkaufstatus;

    protected function setUp()
    {
        $this->verkaufstatus = new Verkaufstatus();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
