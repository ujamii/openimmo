<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ObjektartTest extends TestCase
{
    /** @var Objektart */
    private $objektart;

    protected function setUp()
    {
        $this->objektart = new Objektart();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
