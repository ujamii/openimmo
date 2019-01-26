<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class NutzungsartTest extends TestCase
{
    /** @var Nutzungsart */
    private $nutzungsart;

    protected function setUp()
    {
        $this->nutzungsart = new Nutzungsart();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
