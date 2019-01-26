<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ObjektkategorieTest extends TestCase
{
    /** @var Objektkategorie */
    private $objektkategorie;

    protected function setUp()
    {
        $this->objektkategorie = new Objektkategorie();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
