<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class FotoTest extends TestCase
{
    /** @var Foto */
    private $foto;

    protected function setUp()
    {
        $this->foto = new Foto();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
