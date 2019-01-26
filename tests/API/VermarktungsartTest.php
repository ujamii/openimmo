<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class VermarktungsartTest extends TestCase
{
    /** @var Vermarktungsart */
    private $vermarktungsart;

    protected function setUp()
    {
        $this->vermarktungsart = new Vermarktungsart();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
