<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class UnterkellertTest extends TestCase
{
    /** @var Unterkellert */
    private $unterkellert;

    protected function setUp()
    {
        $this->unterkellert = new Unterkellert();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
