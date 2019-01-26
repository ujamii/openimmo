<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class HauptmietzinsnettoTest extends TestCase
{
    /** @var Hauptmietzinsnetto */
    private $hauptmietzinsnetto;

    /** @var float */
    private $hauptmietzinsust;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->hauptmietzinsust = null;
        $this->value = null;
        $this->hauptmietzinsnetto = new Hauptmietzinsnetto(
            $this->hauptmietzinsust,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
