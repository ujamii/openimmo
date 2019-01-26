<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AnbieterTest extends TestCase
{
    /** @var Anbieter */
    private $anbieter;

    protected function setUp()
    {
        $this->anbieter = new Anbieter();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
