<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class BieterverfahrenTest extends TestCase
{
    /** @var Bieterverfahren */
    private $bieterverfahren;

    protected function setUp()
    {
        $this->bieterverfahren = new Bieterverfahren();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
