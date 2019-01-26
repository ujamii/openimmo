<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class VerwaltungTechnTest extends TestCase
{
    /** @var VerwaltungTechn */
    private $verwaltungTechn;

    protected function setUp()
    {
        $this->verwaltungTechn = new VerwaltungTechn();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
