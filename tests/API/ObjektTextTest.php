<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ObjektTextTest extends TestCase
{
    /** @var ObjektText */
    private $objektText;

    protected function setUp()
    {
        $this->objektText = new ObjektText();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
