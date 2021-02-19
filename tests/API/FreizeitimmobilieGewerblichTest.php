<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class FreizeitimmobilieGewerblichTest extends TestCase
{
    /** @var FreizeitimmobilieGewerblich */
    private $freizeitimmobilieGewerblich;

    protected function setUp(): void
    {
        $this->freizeitimmobilieGewerblich = new FreizeitimmobilieGewerblich();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
