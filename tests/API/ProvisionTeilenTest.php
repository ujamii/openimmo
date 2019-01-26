<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ProvisionTeilenTest extends TestCase
{
    /** @var ProvisionTeilen */
    private $provisionTeilen;

    protected function setUp()
    {
        $this->provisionTeilen = new ProvisionTeilen();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
