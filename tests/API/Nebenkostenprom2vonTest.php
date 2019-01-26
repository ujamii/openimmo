<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class Nebenkostenprom2vonTest extends TestCase
{
    /** @var Nebenkostenprom2von */
    private $nebenkostenprom2von;

    /** @var float */
    private $nebenkostenprom2bis;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->nebenkostenprom2bis = null;
        $this->value = null;
        $this->nebenkostenprom2von = new Nebenkostenprom2von(
            $this->nebenkostenprom2bis,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
