<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class BreitbandZugangTest extends TestCase
{
    /** @var BreitbandZugang */
    private $breitbandZugang;

    protected function setUp()
    {
        $this->breitbandZugang = new BreitbandZugang();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
