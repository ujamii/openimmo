<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class PreisZeiteinheitTest extends TestCase
{
    /** @var PreisZeiteinheit */
    private $preisZeiteinheit;

    protected function setUp()
    {
        $this->preisZeiteinheit = new PreisZeiteinheit();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
