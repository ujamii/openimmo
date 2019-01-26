<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class FlaechenTest extends TestCase
{
    /** @var Flaechen */
    private $flaechen;

    protected function setUp()
    {
        $this->flaechen = new Flaechen();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
