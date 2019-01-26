<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class InfrastrukturTest extends TestCase
{
    /** @var Infrastruktur */
    private $infrastruktur;

    protected function setUp()
    {
        $this->infrastruktur = new Infrastruktur();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
