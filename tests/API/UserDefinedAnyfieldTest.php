<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class UserDefinedAnyfieldTest extends TestCase
{
    /** @var UserDefinedAnyfield */
    private $userDefinedAnyfield;

    protected function setUp()
    {
        $this->userDefinedAnyfield = new UserDefinedAnyfield();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
