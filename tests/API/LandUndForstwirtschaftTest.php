<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class LandUndForstwirtschaftTest extends TestCase
{
    /** @var LandUndForstwirtschaft */
    private $landUndForstwirtschaft;

    protected function setUp()
    {
        $this->landUndForstwirtschaft = new LandUndForstwirtschaft();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
