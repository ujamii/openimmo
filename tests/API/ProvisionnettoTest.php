<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ProvisionnettoTest extends TestCase
{
    /** @var Provisionnetto */
    private $provisionnetto;

    /** @var float */
    private $provisionust;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->provisionust = null;
        $this->value = null;
        $this->provisionnetto = new Provisionnetto(
            $this->provisionust,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
