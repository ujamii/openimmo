<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class FahrstuhlTest extends TestCase
{
    /** @var Fahrstuhl */
    private $fahrstuhl;

    protected function setUp()
    {
        $this->fahrstuhl = new Fahrstuhl();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
