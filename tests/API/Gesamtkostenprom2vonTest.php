<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class Gesamtkostenprom2vonTest extends TestCase
{
    /** @var Gesamtkostenprom2von */
    private $gesamtkostenprom2von;

    /** @var float */
    private $gesamtkostenprom2bis;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->gesamtkostenprom2bis = null;
        $this->value = null;
        $this->gesamtkostenprom2von = new Gesamtkostenprom2von(
            $this->gesamtkostenprom2bis,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
