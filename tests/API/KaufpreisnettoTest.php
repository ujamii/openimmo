<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class KaufpreisnettoTest extends TestCase
{
    /** @var Kaufpreisnetto */
    private $kaufpreisnetto;

    /** @var float */
    private $kaufpreisust;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->kaufpreisust = null;
        $this->value = null;
        $this->kaufpreisnetto = new Kaufpreisnetto(
            $this->kaufpreisust,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
