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
        $this->distanzZuSport = DistanzenSport::DISTANZ_ZU_SPORT_SEE;
        $this->value = 123.45;
        $this->distanzenSport = new DistanzenSport(
            $this->distanzZuSport,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->assertEquals($this->value, $this->distanzenSport->getValue());
        $this->assertEquals($this->distanzZuSport, $this->distanzenSport->getDistanzZuSport());
    }
}
