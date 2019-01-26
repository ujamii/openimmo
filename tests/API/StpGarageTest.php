<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class StpGarageTest extends TestCase
{
    /** @var StpGarage */
    private $stpGarage;

    protected function setUp()
    {
        $this->stpGarage = new StpGarage();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
