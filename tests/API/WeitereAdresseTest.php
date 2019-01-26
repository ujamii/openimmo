<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class WeitereAdresseTest extends TestCase
{
    /** @var WeitereAdresse */
    private $weitereAdresse;

    protected function setUp()
    {
        $this->weitereAdresse = new WeitereAdresse();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
