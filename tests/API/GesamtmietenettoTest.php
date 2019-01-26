<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class GesamtmietenettoTest extends TestCase
{
    /** @var Gesamtmietenetto */
    private $gesamtmietenetto;

    /** @var float */
    private $gesamtmieteust;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->gesamtmieteust = null;
        $this->value = null;
        $this->gesamtmietenetto = new Gesamtmietenetto(
            $this->gesamtmieteust,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
