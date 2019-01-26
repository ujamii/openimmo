<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class MieteinnahmenSollTest extends TestCase
{
    /** @var MieteinnahmenSoll */
    private $mieteinnahmenSoll;

    /** @var string */
    private $periode;

    /** @var float */
    private $value;

    protected function setUp()
    {
        $this->periode = null;
        $this->value = null;
        $this->mieteinnahmenSoll = new MieteinnahmenSoll(
            $this->periode,
            $this->value
        );
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
