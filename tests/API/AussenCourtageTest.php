<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AussenCourtageTest extends TestCase
{
    /** @var AussenCourtage */
    private $aussenCourtage;

    protected function setUp()
    {
        $this->aussenCourtage = new AussenCourtage();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
