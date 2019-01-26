<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class SicherheitstechnikTest extends TestCase
{
    /** @var Sicherheitstechnik */
    private $sicherheitstechnik;

    protected function setUp()
    {
        $this->sicherheitstechnik = new Sicherheitstechnik();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
