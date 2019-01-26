<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class OpenimmoTest extends TestCase
{
    /** @var Openimmo */
    private $openimmo;

    protected function setUp()
    {
        $this->openimmo = new Openimmo();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
