<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AnhangTest extends TestCase
{
    /** @var Anhang */
    private $anhang;

    protected function setUp()
    {
        $this->anhang = new Anhang();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
