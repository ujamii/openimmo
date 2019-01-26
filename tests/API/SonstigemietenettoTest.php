<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class SonstigemietenettoTest extends TestCase
{
    /** @var Sonstigemietenetto */
    private $sonstigemietenetto;

    /** @var float */
    private $sonstigemieteust;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->sonstigemieteust = null;
        $this->value = null;
        $this->sonstigemietenetto = new Sonstigemietenetto(
            $this->sonstigemieteust,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
