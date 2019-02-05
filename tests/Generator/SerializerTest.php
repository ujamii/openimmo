<?php

namespace Ujamii\OpenImmo\Tests\Generator;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerInterface;
use Ujamii\OpenImmo\API\Anbieter;
use Ujamii\OpenImmo\API\Ausblick;
use Ujamii\OpenImmo\API\Distanzen;
use Ujamii\OpenImmo\API\DistanzenSport;
use Ujamii\OpenImmo\API\Immobilie;
use Ujamii\OpenImmo\API\Infrastruktur;
use Ujamii\OpenImmo\API\Kontaktperson;
use Ujamii\OpenImmo\API\Nutzungsart;
use Ujamii\OpenImmo\API\Openimmo;
use Ujamii\OpenImmo\API\Uebertragung;

/**
 * Class SerializerTest
 * @package Ujamii\OpenImmo\Tests\Generator
 */
class SerializerTest extends \PHPUnit\Framework\TestCase
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

    public function testWriteImmobilieXml()
    {
        $data = new Immobilie();
        $data->setKontaktperson((new Kontaktperson())->setAnrede('Herr'));

        $xmlContent = $this->serializer->serialize($data, 'xml');
        $this->assertXmlStringEqualsXmlString('<immobilie><kontaktperson><anrede>Herr</anrede></kontaktperson></immobilie>', $xmlContent);
    }

    public function testWriteUebertragungXml()
    {
        $xmlString = '<uebertragung art="ONLINE" umfang="VOLL" modus="NEW" version="1.2.7" sendersoftware="OIGEN" senderversion="0.9" techn_email="" timestamp="2014-06-01T10:00:00"  regi_id="ABCD143" />';

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

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($uebertragung, 'xml'));
    }

    public function testWriteNutzungsartXml()
    {
        $xmlString   = '<nutzungsart WOHNEN="true" GEWERBE="false" ANLAGE="false" WAZ="false" />';
        $nutzungsart = new Nutzungsart();
        $nutzungsart
            ->setWohnen(true)
            ->setGewerbe(false)
            ->setAnlage(false)
            ->setWaz(false);

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($nutzungsart, 'xml'));
    }

    public function testWriteDistanzenZuSportXml()
    {
        $xmlString = '<distanzen_sport distanz_zu_sport="SEE" >15.0</distanzen_sport>';
        $phpObj    = new DistanzenSport(DistanzenSport::DISTANZ_ZU_SPORT_SEE, 15);

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($phpObj, 'xml'));
    }

    public function testWriteInfrastrukturXml()
    {
        $xmlString    = '<infrastruktur>
            <ausblick blick="BERGE" />
            <distanzen distanz_zu="HAUPTSCHULE" >22.0</distanzen>
            <distanzen_sport distanz_zu_sport="SEE" >15.0</distanzen_sport>
            <zulieferung>false</zulieferung>
          </infrastruktur>';
        $infrastrktur = new Infrastruktur();
        $infrastrktur
            ->setZulieferung(false)
            ->setAusblick((new Ausblick())->setBlick(Ausblick::BLICK_BERGE))
            ->setDistanzenSport([
                new DistanzenSport(DistanzenSport::DISTANZ_ZU_SPORT_SEE, 15)
            ])
            ->setDistanzen([
                new Distanzen(Distanzen::DISTANZ_ZU_HAUPTSCHULE, 22)
            ]);

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($infrastrktur, 'xml'));
    }

    public function testWriteAnbieterXml()
    {
        $xmlString = '<openimmo>
        <anbieter>
        <firma >MusterMannFrau Immobilien</firma >
        <lizenzkennung>ABCD13</lizenzkennung></anbieter></openimmo>';

        $openImmo = new Openimmo();
        $anbieter = (new Anbieter())->setFirma('MusterMannFrau Immobilien')->setLizenzkennung('ABCD13');
        $openImmo->setAnbieter([$anbieter]);

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($openImmo, 'xml'));
    }
}
