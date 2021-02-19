<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class PreiseTest extends TestCase
{
    /** @var Preise */
    private $preise;

    protected function setUp(): void
    {
        $this->preise = new Preise();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
