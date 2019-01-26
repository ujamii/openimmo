<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class StpFreiplatzTest extends TestCase
{
    /** @var StpFreiplatz */
    private $stpFreiplatz;

    protected function setUp()
    {
        $this->stpFreiplatz = new StpFreiplatz();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
