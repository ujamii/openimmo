<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class Nettomieteprom2vonTest extends TestCase
{
    /** @var Nettomieteprom2von */
    private $nettomieteprom2von;

    /** @var float */
    private $nettomieteprom2bis;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->nettomieteprom2bis = null;
        $this->value = null;
        $this->nettomieteprom2von = new Nettomieteprom2von(
            $this->nettomieteprom2bis,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
