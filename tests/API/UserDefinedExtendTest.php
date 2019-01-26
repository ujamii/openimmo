<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class UserDefinedExtendTest extends TestCase
{
    /** @var UserDefinedExtend */
    private $userDefinedExtend;

    protected function setUp()
    {
        $this->userDefinedExtend = new UserDefinedExtend();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
