<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class EnergiepassTest extends TestCase
{
    /** @var Energiepass */
    private $energiepass;

    protected function setUp()
    {
        $this->energiepass = new Energiepass();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
