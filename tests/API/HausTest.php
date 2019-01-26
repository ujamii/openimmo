<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class HausTest extends TestCase
{
    /** @var Haus */
    private $haus;

    protected function setUp()
    {
        $this->haus = new Haus();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
