<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class BodenTest extends TestCase
{
    /** @var Boden */
    private $boden;

    protected function setUp()
    {
        $this->boden = new Boden();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
