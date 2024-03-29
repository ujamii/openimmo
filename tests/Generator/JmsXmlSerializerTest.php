<?php

namespace Ujamii\OpenImmo\Tests\Generator;

use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use Ujamii\OpenImmo\API\Anbieter;
use Ujamii\OpenImmo\API\Ausblick;
use Ujamii\OpenImmo\API\AussenCourtage;
use Ujamii\OpenImmo\API\Bewertung;
use Ujamii\OpenImmo\API\Distanzen;
use Ujamii\OpenImmo\API\DistanzenSport;
use Ujamii\OpenImmo\API\Feld;
use Ujamii\OpenImmo\API\Immobilie;
use Ujamii\OpenImmo\API\Infrastruktur;
use Ujamii\OpenImmo\API\Kontaktperson;
use Ujamii\OpenImmo\API\Nutzungsart;
use Ujamii\OpenImmo\API\Objektart;
use Ujamii\OpenImmo\API\Objektkategorie;
use Ujamii\OpenImmo\API\Openimmo;
use Ujamii\OpenImmo\API\Uebertragung;
use Ujamii\OpenImmo\API\Vermarktungsart;
use Ujamii\OpenImmo\API\Wohnung;
use Ujamii\OpenImmo\Handler\DateTimeHandler;

class JmsXmlSerializerTest extends TestCase
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     *
     */
    public function setUp(): void
    {
        $builder = \JMS\Serializer\SerializerBuilder::create();
        $builder
            ->configureHandlers(function (HandlerRegistryInterface $registry) {
                $registry->registerSubscribingHandler(new DateTimeHandler());
            });
        $this->serializer = $builder->build();
    }

    public function testWriteImmobilieXml(): void
    {
        $data = new Immobilie();
        $data->setKontaktperson((new Kontaktperson())->setAnrede('Herr'));

        $xmlContent = $this->serializer->serialize($data, 'xml');
        // as soon as https://github.com/schmittjoh/serializer/pull/883 is merged, the <name/> can be removed
        $this->assertXmlStringEqualsXmlString('<immobilie><kontaktperson><name/><anrede>Herr</anrede></kontaktperson></immobilie>', $xmlContent);
    }

    public function testWriteUebertragungXml(): void
    {
        $xmlString = '<uebertragung art="ONLINE" umfang="VOLL" modus="NEW" version="1.2.7" sendersoftware="OIGEN" senderversion="0.9" techn_email="" timestamp="2014-06-01T10:00:00" regi_id="ABCD143" />';

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

    public function testWriteUebertragungXmlRealWorld(): void
    {
        $xmlString = '<uebertragung art="OFFLINE" modus="CHANGE" sendersoftware="OOF" senderversion="$Rev: 85202 $" techn_email="xxx@xxx.de" timestamp="2019-09-30T12:42:27" umfang="TEIL" version="1.2.7"/>';

        $uebertragung = new Uebertragung();
        $uebertragung
            ->setArt(Uebertragung::ART_OFFLINE)
            ->setUmfang(Uebertragung::UMFANG_TEIL)
            ->setModus(Uebertragung::MODUS_CHANGE)
            ->setVersion('1.2.7')
            ->setSendersoftware('OOF')
            ->setSenderversion('$Rev: 85202 $')
            ->setTechnEmail('xxx@xxx.de')
            ->setTimestamp(new \DateTime('2019-09-30T12:42:27.000+00:00'));

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($uebertragung, 'xml'));
    }

    public function testWriteNutzungsartXmlAsUsedInReadme(): void
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

    public function testWriteDistanzenZuSportXml(): void
    {
        $xmlString = '<distanzen_sport distanz_zu_sport="SEE">15.0</distanzen_sport>';
        $phpObj    = new DistanzenSport(DistanzenSport::DISTANZ_ZU_SPORT_SEE, 15);

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($phpObj, 'xml'));
    }

    public function testWriteInfrastrukturXmlAsUsedInReadme(): void
    {
        $xmlString    = '<infrastruktur>
            <zulieferung>false</zulieferung>
            <ausblick blick="BERGE" />
            <distanzen distanz_zu="HAUPTSCHULE">22.0</distanzen>
            <distanzen_sport distanz_zu_sport="SEE">15.0</distanzen_sport>
          </infrastruktur>';
        $infrastrktur = new Infrastruktur();
        $infrastrktur
            ->setZulieferung(false)
            ->setAusblick((new Ausblick())->setBlick(Ausblick::BLICK_BERGE))
            ->setDistanzenSport([
                new DistanzenSport(DistanzenSport::DISTANZ_ZU_SPORT_SEE, 15)
            ])
            ->setDistanzen([
                new Distanzen(Distanzen::DISTANZ_ZU_HAUPTSCHULE, 22.0)
            ]);

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($infrastrktur, 'xml'));
    }

    public function testWriteAnbieterXml(): void
    {
        // as soon as https://github.com/schmittjoh/serializer/pull/883 is merged, the <openimmo_anid/> can be removed
        $xmlString = '<openimmo>
            <anbieter>
            <firma >MusterMannFrau Immobilien</firma>
            <openimmo_anid/>
            <lizenzkennung>ABCD13</lizenzkennung>
            </anbieter>
        </openimmo>';

        $openImmo = new Openimmo();
        $anbieter = (new Anbieter())->setFirma('MusterMannFrau Immobilien')->setLizenzkennung('ABCD13');
        $openImmo->setAnbieter([$anbieter]);

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($openImmo, 'xml'));
    }

    public function testWriteObjektKategorieXml(): void
    {
        $xmlString = '<objektkategorie>
        <nutzungsart GEWERBE="false" WOHNEN="true"/>
        <vermarktungsart KAUF="false" MIETE_PACHT="true"/>
        <objektart>
          <wohnung wohnungtyp="MAISONETTE" />
          <objektart_zusatz>Dachgeschoss</objektart_zusatz>
        </objektart>
      </objektkategorie>';

        $category = new Objektkategorie();
        $category->setNutzungsart((new Nutzungsart())->setWohnen(true)->setGewerbe(false));
        $category->setVermarktungsart((new Vermarktungsart())->setKauf(false)->setMietePacht(true));

        $art = new Objektart();
        $art->setWohnung([(new Wohnung())->setWohnungtyp(Wohnung::WOHNUNGTYP_MAISONETTE)]);
        $art->setObjektartZusatz(['Dachgeschoss']);

        $category->setObjektart($art);
        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($category, 'xml'));
    }

    public function testWriteComplexTypeMixed(): void
    {
        $xmlString = '<aussen_courtage mit_mwst="false">k.A.</aussen_courtage>';
        $subject = new AussenCourtage(false, 'k.A.');

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($subject, 'xml'));
    }

    public function testWriteComplexType(): void
    {
        $xmlString = '<bewertung>
            <feld>
              <name>abc</name>
              <wert>100</wert>
              <typ>int</typ>
              <modus>kauf</modus>
            </feld>
          </bewertung>';
        $subject = new Bewertung();
        $subject->setFeld([new Feld('abc', '100', ['int'], ['kauf'])]);

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($subject, 'xml'));
    }
}
