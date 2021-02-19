<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class SonstigeTest extends TestCase
{
    /** @var Sonstige */
    private $sonstige;

    protected function setUp(): void
    {
        $this->sonstige = new Sonstige();
    }

    public function testProperties()
    {
        $this->sonstige->setSonstigeTyp(Sonstige::SONSTIGE_TYP_PARKHAUS);
        $this->assertEquals(Sonstige::SONSTIGE_TYP_PARKHAUS, $this->sonstige->getSonstigeTyp());
    }

    public function testConstructor()
    {
        $this->sonstige = new Sonstige(Sonstige::SONSTIGE_TYP_KRANKENHAUS);
        $this->assertEquals(Sonstige::SONSTIGE_TYP_KRANKENHAUS, $this->sonstige->getSonstigeTyp());
    }
}
