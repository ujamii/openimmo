<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AusbaustufeTest extends TestCase
{
    /** @var Ausbaustufe */
    private $ausbaustufe;

    protected function setUp()
    {
        $this->ausbaustufe = new Ausbaustufe();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
