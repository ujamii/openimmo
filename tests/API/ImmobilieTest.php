<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ImmobilieTest extends TestCase
{
    /** @var Immobilie */
    private $immobilie;

    protected function setUp()
    {
        $this->immobilie = new Immobilie();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
