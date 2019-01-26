<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ParkenTest extends TestCase
{
    /** @var Parken */
    private $parken;

    protected function setUp()
    {
        $this->parken = new Parken();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
