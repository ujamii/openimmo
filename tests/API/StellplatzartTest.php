<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class StellplatzartTest extends TestCase
{
    /** @var Stellplatzart */
    private $stellplatzart;

    protected function setUp()
    {
        $this->stellplatzart = new Stellplatzart();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
