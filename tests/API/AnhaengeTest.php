<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AnhaengeTest extends TestCase
{
    /** @var Anhaenge */
    private $anhaenge;

    protected function setUp()
    {
        $this->anhaenge = new Anhaenge();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
