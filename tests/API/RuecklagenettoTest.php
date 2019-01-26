<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class RuecklagenettoTest extends TestCase
{
    /** @var Ruecklagenetto */
    private $ruecklagenetto;

    /** @var float */
    private $ruecklageust;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->ruecklageust = null;
        $this->value = null;
        $this->ruecklagenetto = new Ruecklagenetto(
            $this->ruecklageust,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
