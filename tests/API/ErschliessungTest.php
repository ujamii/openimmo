<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ErschliessungTest extends TestCase
{
    /** @var Erschliessung */
    private $erschliessung;

    protected function setUp()
    {
        $this->erschliessung = new Erschliessung();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
