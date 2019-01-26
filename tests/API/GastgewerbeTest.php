<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class GastgewerbeTest extends TestCase
{
    /** @var Gastgewerbe */
    private $gastgewerbe;

    protected function setUp()
    {
        $this->gastgewerbe = new Gastgewerbe();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
