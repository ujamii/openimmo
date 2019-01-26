<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AusblickTest extends TestCase
{
    /** @var Ausblick */
    private $ausblick;

    protected function setUp()
    {
        $this->ausblick = new Ausblick();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
