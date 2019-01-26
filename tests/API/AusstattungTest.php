<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AusstattungTest extends TestCase
{
    /** @var Ausstattung */
    private $ausstattung;

    protected function setUp()
    {
        $this->ausstattung = new Ausstattung();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
