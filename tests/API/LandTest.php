<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class LandTest extends TestCase
{
    /** @var Land */
    private $land;

    protected function setUp()
    {
        $this->land = new Land();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
