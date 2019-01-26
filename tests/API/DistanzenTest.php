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
        $this->distanzZu = null;
        $this->value = null;
        $this->distanzen = new Distanzen(
            $this->distanzZu,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
