<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AlterTest extends TestCase
{
    /** @var Alter */
    private $alter;

    protected function setUp()
    {
        $this->alter = new Alter();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
