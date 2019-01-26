<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AktionTest extends TestCase
{
    /** @var Aktion */
    private $aktion;

    protected function setUp()
    {
        $this->aktion = new Aktion();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
