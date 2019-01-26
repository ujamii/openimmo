<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class WohnungTest extends TestCase
{
    /** @var Wohnung */
    private $wohnung;

    protected function setUp()
    {
        $this->wohnung = new Wohnung();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
