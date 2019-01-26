<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class GeoTest extends TestCase
{
    /** @var Geo */
    private $geo;

    protected function setUp()
    {
        $this->geo = new Geo();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
