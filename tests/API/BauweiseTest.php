<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class BauweiseTest extends TestCase
{
    /** @var Bauweise */
    private $bauweise;

    protected function setUp()
    {
        $this->bauweise = new Bauweise();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
