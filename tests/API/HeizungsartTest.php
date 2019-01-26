<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class HeizungsartTest extends TestCase
{
    /** @var Heizungsart */
    private $heizungsart;

    protected function setUp()
    {
        $this->heizungsart = new Heizungsart();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
