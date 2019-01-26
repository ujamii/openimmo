<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class FreitexteTest extends TestCase
{
    /** @var Freitexte */
    private $freitexte;

    protected function setUp()
    {
        $this->freitexte = new Freitexte();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
