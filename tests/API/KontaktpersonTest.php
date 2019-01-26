<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class KontaktpersonTest extends TestCase
{
    /** @var Kontaktperson */
    private $kontaktperson;

    protected function setUp()
    {
        $this->kontaktperson = new Kontaktperson();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
