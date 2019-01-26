<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class UserDefinedSimplefieldTest extends TestCase
{
    /** @var UserDefinedSimplefield */
    private $userDefinedSimplefield;

    protected function setUp()
    {
        $this->userDefinedSimplefield = new UserDefinedSimplefield();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
