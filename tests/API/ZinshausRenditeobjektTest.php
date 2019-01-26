<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ZinshausRenditeobjektTest extends TestCase
{
    /** @var ZinshausRenditeobjekt */
    private $zinshausRenditeobjekt;

    protected function setUp()
    {
        $this->zinshausRenditeobjekt = new ZinshausRenditeobjekt();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
