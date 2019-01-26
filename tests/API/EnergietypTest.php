<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class EnergietypTest extends TestCase
{
    /** @var Energietyp */
    private $energietyp;

    protected function setUp()
    {
        $this->energietyp = new Energietyp();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
