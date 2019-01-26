<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class DistanzenSportTest extends TestCase
{
    /** @var DistanzenSport */
    private $distanzenSport;

    /** @var string */
    private $distanzZuSport;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->distanzZuSport = null;
        $this->value = null;
        $this->distanzenSport = new DistanzenSport(
            $this->distanzZuSport,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
