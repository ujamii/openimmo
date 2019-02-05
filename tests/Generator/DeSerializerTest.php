<?php
namespace Ujamii\OpenImmo\Tests\Generator;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerInterface;
use Ujamii\OpenImmo\API\Anhang;
use Ujamii\OpenImmo\API\Openimmo;
use Ujamii\OpenImmo\API\Uebertragung;

/**
 * Class SerializerTest
 * @package Ujamii\OpenImmo\Tests\Generator
 */
class DeSerializerTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     *
     */
    public function setUp()
    {
        $this->serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        // @see https://stackoverflow.com/questions/14629137/jmsserializer-stand-alone-annotation-does-not-exist-or-cannot-be-auto-loaded
        AnnotationRegistry::registerLoader('class_exists');
    }

    public function testReadXml()
    {
        $file = './example/openimmo-data_127.xml';
        if (!is_file($file) || !is_readable($file)) {
            $this->markTestSkipped($file . ' is not part of the distribution package due to license restrictions. Please download yourself from http://www.openimmo.de/go.php/p/24/download.htm (it\'s free)');
        }
        $xmlString = file_get_contents($file);

        $uebertragung = new Uebertragung();
        $uebertragung
            ->setArt(Uebertragung::ART_ONLINE)
            ->setUmfang(Uebertragung::UMFANG_VOLL)
            ->setModus(Uebertragung::MODUS_NEW)
            ->setVersion('1.2.7')
            ->setSendersoftware('OIGEN')
            ->setSenderversion('0.9')
            ->setTechnEmail('')
            ->setTimestamp(new \DateTime('2014-06-01T10:00:00'))
            ->setRegiId('ABCD143');

        /* @var $openImmo Openimmo */
        $openImmo = $this->serializer->deserialize($xmlString, OpenImmo::class, 'xml');
        $this->assertEquals($uebertragung, $openImmo->getUebertragung());
        $this->assertCount(1, $openImmo->getAnbieter());
        $this->assertEquals('ABCD13', $openImmo->getAnbieter()[0]->getLizenzkennung());
    }

    public function testReadRealDataXml()
    {
        $file = './example/1548246253_0.xml';
        if (!is_file($file) || !is_readable($file)) {
            $this->markTestSkipped('I am not allowed to include real world examples into this distribution package due to license restrictions.');
        }
        $xmlString = file_get_contents($file);

        /* @var $openImmo Openimmo */
        $openImmo = $this->serializer->deserialize($xmlString, OpenImmo::class, 'xml');

        $this->assertCount(1, $openImmo->getAnbieter());
        $this->assertCount(17, $openImmo->getAnbieter()[0]->getImmobilie());
    }

    public function testReadAnhangXml()
    {
        $xmlString = '<anhang location="EXTERN" gruppe="BILD">
      <anhangtitel />
      <format />
      <daten>
        <pfad>/dev/null</pfad>
      </daten>
    </anhang>';

        /* @var $anhang Anhang */
        $anhang = $this->serializer->deserialize($xmlString, Anhang::class, 'xml');

        $this->assertEquals(Anhang::LOCATION_EXTERN, $anhang->getLocation());
        $this->assertEquals(Anhang::GRUPPE_BILD, $anhang->getGruppe());
        $this->assertEquals('/dev/null', $anhang->getDaten()->getPfad());
    }

}
