<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class DistanzenTest extends TestCase
{
    /** @var Distanzen */
    private $distanzen;

    /** @var string */
    private $distanzZu;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->distanzZu = Distanzen::DISTANZ_ZU_AUTOBAHN;
        $this->value = 3265.6534;
        $this->distanzen = new Distanzen(
            $this->distanzZu,
            $this->value
        );
    }

    public function testValues()
    {
        $this->assertEquals($this->value, $this->distanzen->getValue());
        $this->assertEquals($this->distanzZu, $this->distanzen->getDistanzZu());

        $this->distanzen->setValue(555.77);
        $this->assertEquals(555.77, $this->distanzen->getValue());

        $this->distanzen->setDistanzZu(Distanzen::DISTANZ_ZU_GASTSTAETTEN);
        $this->assertEquals(Distanzen::DISTANZ_ZU_GASTSTAETTEN, $this->distanzen->getDistanzZu());
    }
}
