<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class KuecheTest extends TestCase
{
    /** @var Kueche */
    private $kueche;

    protected function setUp()
    {
        $this->kueche = new Kueche();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
