<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class StpTiefgarageTest extends TestCase
{
    /** @var StpTiefgarage */
    private $stpTiefgarage;

    protected function setUp(): void
    {
        $this->stpTiefgarage = new StpTiefgarage();
    }

    public function testProperties()
    {
        $this->stpTiefgarage->setAnzahl(23);
        $this->stpTiefgarage->setStellplatzkaufpreis(98754.54);
        $this->stpTiefgarage->setStellplatzmiete(94.54);

        $this->assertEquals(23, $this->stpTiefgarage->getAnzahl());
        $this->assertEquals(98754.54, $this->stpTiefgarage->getStellplatzkaufpreis());
        $this->assertEquals(94.54, $this->stpTiefgarage->getStellplatzmiete());
    }

    public function testConstructor()
    {
        $this->stpTiefgarage = new StpTiefgarage(123, 65487.54, 42);

        $this->assertEquals(42, $this->stpTiefgarage->getAnzahl());
        $this->assertEquals(65487.54, $this->stpTiefgarage->getStellplatzkaufpreis());
        $this->assertEquals(123, $this->stpTiefgarage->getStellplatzmiete());
    }
}
