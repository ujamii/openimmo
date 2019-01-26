<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class StpTiefgarageTest extends TestCase
{
    /** @var StpTiefgarage */
    private $stpTiefgarage;

    protected function setUp()
    {
        $this->stpTiefgarage = new StpTiefgarage();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
