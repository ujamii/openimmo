<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class AnhangTest extends TestCase
{
    /** @var Anhang */
    private $anhang;

    protected function setUp()
    {
        $this->anhang = new Anhang();
    }

    public function testProperties()
    {
        $this->anhang->setAnhangtitel('Foobar 123');
        $this->anhang->setFormat('JPEG');
        $this->anhang->setGruppe('Random');
        $this->anhang->setLocation('C:');
        $daten = new Daten('/dev/null', 'base64encodedBinary');
        $this->anhang->setDaten($daten);
        $check = new Check(Check::CTYPE_DATETIME, new \DateTime());
        $this->anhang->setCheck($check);

        $this->assertEquals('Foobar 123', $this->anhang->getAnhangtitel());
        $this->assertEquals('JPEG', $this->anhang->getFormat());
        $this->assertEquals('Random', $this->anhang->getGruppe());
        $this->assertEquals('C:', $this->anhang->getLocation());
        $this->assertEquals($daten, $this->anhang->getDaten());
        $this->assertEquals($check, $this->anhang->getCheck());
    }
}
