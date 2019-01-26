<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class BueroPraxenTest extends TestCase
{
    /** @var BueroPraxen */
    private $bueroPraxen;

    protected function setUp()
    {
        $this->bueroPraxen = new BueroPraxen();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
