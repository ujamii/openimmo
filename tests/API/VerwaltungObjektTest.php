<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class VerwaltungObjektTest extends TestCase
{
    /** @var VerwaltungObjekt */
    private $verwaltungObjekt;

    protected function setUp()
    {
        $this->verwaltungObjekt = new VerwaltungObjekt();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
