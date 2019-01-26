<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ZimmerTest extends TestCase
{
    /** @var Zimmer */
    private $zimmer;

    protected function setUp()
    {
        $this->zimmer = new Zimmer();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
