<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ServiceleistungenTest extends TestCase
{
    /** @var Serviceleistungen */
    private $serviceleistungen;

    protected function setUp()
    {
        $this->serviceleistungen = new Serviceleistungen();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
