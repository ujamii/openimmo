<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AusrichtBalkonTerrasseTest extends TestCase
{
    /** @var AusrichtBalkonTerrasse */
    private $ausrichtBalkonTerrasse;

    protected function setUp()
    {
        $this->ausrichtBalkonTerrasse = new AusrichtBalkonTerrasse();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
