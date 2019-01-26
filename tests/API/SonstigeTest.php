<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class SonstigeTest extends TestCase
{
    /** @var Sonstige */
    private $sonstige;

    protected function setUp()
    {
        $this->sonstige = new Sonstige();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
