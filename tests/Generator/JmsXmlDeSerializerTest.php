<?php

namespace Ujamii\OpenImmo\Tests\Generator;

use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use Ujamii\OpenImmo\API\Anhang;
use Ujamii\OpenImmo\API\AussenCourtage;
use Ujamii\OpenImmo\API\Bewertung;
use Ujamii\OpenImmo\API\EmailSonstige;
use Ujamii\OpenImmo\API\Foto;
use Ujamii\OpenImmo\API\Geo;
use Ujamii\OpenImmo\API\Objektkategorie;
use Ujamii\OpenImmo\API\Openimmo;
use Ujamii\OpenImmo\API\Uebertragung;
use Ujamii\OpenImmo\API\Wohnung;
use Ujamii\OpenImmo\API\Zimmer;
use Ujamii\OpenImmo\Handler\DateTimeHandler;

class JmsXmlDeSerializerTest extends TestCase
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

    public function testReadXml(): void
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

        $immobilie = $openImmo->getAnbieter()[0]->getImmobilie()[0];
        $this->assertTrue($immobilie->getObjektkategorie()->getNutzungsart()->getWohnen());
        $this->assertFalse($immobilie->getObjektkategorie()->getNutzungsart()->getGewerbe());
        $this->assertFalse($immobilie->getObjektkategorie()->getNutzungsart()->getAnlage());
        $this->assertFalse($immobilie->getObjektkategorie()->getNutzungsart()->getWaz());

        $this->assertTrue($immobilie->getObjektkategorie()->getVermarktungsart()->getKauf());
        $this->assertFalse($immobilie->getObjektkategorie()->getVermarktungsart()->getMietePacht());
        $this->assertFalse($immobilie->getObjektkategorie()->getVermarktungsart()->getErbpacht());
        $this->assertFalse($immobilie->getObjektkategorie()->getVermarktungsart()->getLeasing());

        $this->assertCount(1, $immobilie->getObjektkategorie()->getObjektart()->getZimmer());
        $this->assertEquals(Zimmer::ZIMMERTYP_ZIMMER, $immobilie->getObjektkategorie()->getObjektart()->getZimmer()[0]->getZimmertyp());
        $this->assertCount(1, $immobilie->getObjektkategorie()->getObjektart()->getObjektartZusatz());
        $this->assertEquals('Moebeliert', $immobilie->getObjektkategorie()->getObjektart()->getObjektartZusatz()[0]);

        $this->assertCount(1, $immobilie->getKontaktperson()->getEmailSonstige());
        $this->assertEquals(EmailSonstige::EMAILART_EM_DIREKT, $immobilie->getKontaktperson()->getEmailSonstige()[0]->getEmailart());
        $this->assertEquals('1', $immobilie->getKontaktperson()->getEmailSonstige()[0]->getBemerkung());
        $this->assertEquals('foo@bar.de', $immobilie->getKontaktperson()->getEmailSonstige()[0]->getValue());
        $this->assertEquals('yx@y.de', $immobilie->getKontaktperson()->getEmailFeedback());

        $this->assertEquals(Foto::LOCATION_EXTERN, $immobilie->getKontaktperson()->getFoto()->getLocation());
        $this->assertEquals('abc.jpg', $immobilie->getKontaktperson()->getFoto()->getDaten()->getPfad());
        $this->assertEquals('JPEG', $immobilie->getKontaktperson()->getFoto()->getFormat());

        $this->assertEquals('Schönes Appartment im Stadtzentrum', $immobilie->getFreitexte()->getObjekttitel());
        $this->assertEquals('Hier können Hinweise auf die Regelung im Fernabsatzgesetz stehen.', $immobilie->getFreitexte()->getSonstigeAngaben());
        $this->assertNotNull($immobilie->getFreitexte()->getObjektText());
        $this->assertEquals('Nice appartment in the inner city', $immobilie->getFreitexte()->getObjektText()->getValue());
        $this->assertEquals('en', $immobilie->getFreitexte()->getObjektText()->getLang());
    }

    public function testReadRealDataXml(): void
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

    public function testReadAnhangXml(): void
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

    /**
     * Note the difference in microsecond precision! As the default `precision` (in PHP.ini) is 14, the microsecond
     * part will only have 6 digits, while other tools may generate longer values!
     */
    public function testDateTimeWithMicroseconds(): void
    {
        $xmlString = '<uebertragung art="ONLINE" umfang="VOLL" version="1.2.7" sendersoftware="IMEX" senderversion="1.56" timestamp="2020-08-07T11:56:39.1242974+02:00" />';
        /* @var Uebertragung $uebertragung */
        $uebertragung = $this->serializer->deserialize($xmlString, Uebertragung::class, 'xml');

        $this->assertEquals(Uebertragung::ART_ONLINE, $uebertragung->getArt());
        $this->assertEquals(Uebertragung::UMFANG_VOLL, $uebertragung->getUmfang());
        $this->assertEquals('1.2.7', $uebertragung->getVersion());
        $this->assertEquals('IMEX', $uebertragung->getSendersoftware());
        $this->assertEquals('1.56', $uebertragung->getSenderversion());
        $this->assertEquals('2020-08-07T11:56:39.124297+02:00', $uebertragung->getTimestamp()->format('Y-m-d\TH:i:s.uP'));
    }

    public function testReadAussenCourtageXml(): void
    {
        $xmlString = '<aussen_courtage mit_mwst="true">12354,12 €</aussen_courtage>';

        /* @var $aussenCourtage AussenCourtage */
        $aussenCourtage = $this->serializer->deserialize($xmlString, AussenCourtage::class, 'xml');

        $this->assertEquals(true, $aussenCourtage->getMitMwst());
        $this->assertEquals('12354,12 €', $aussenCourtage->getValue());
    }

    public function testReadObjektKategorieXml(): void
    {
        $xmlString = '<objektkategorie>
            <nutzungsart WOHNEN="true" GEWERBE="false" />
            <objektart>
              <objektart_zusatz>Dachgeschoss</objektart_zusatz>
              <wohnung wohnungtyp="MAISONETTE" />
            </objektart>
            <vermarktungsart KAUF="false" MIETE_PACHT="true" />
          </objektkategorie>';

        /* @var Objektkategorie $category */
        $category = $this->serializer->deserialize($xmlString, Objektkategorie::class, 'xml');

        $this->assertTrue($category->getNutzungsart()->getWohnen());
        $this->assertFalse($category->getNutzungsart()->getGewerbe());

        $this->assertTrue($category->getVermarktungsart()->getMietePacht());
        $this->assertFalse($category->getVermarktungsart()->getKauf());

        $this->assertEquals(Wohnung::WOHNUNGTYP_MAISONETTE, $category->getObjektart()->getWohnung()[0]->getWohnungtyp());
        $this->assertEquals('Dachgeschoss', $category->getObjektart()->getObjektartZusatz()[0]);
    }

    public function testReadComplexType(): void
    {
        $xmlString = '<bewertung>
            <feld>
              <modus>kauf</modus>
              <name>abc</name>
              <typ>int</typ>
              <wert>100</wert>
            </feld>
          </bewertung>';

        /* @var Bewertung $subject */
        $subject = $this->serializer->deserialize($xmlString, Bewertung::class, 'xml');
        $fields  = $subject->getFeld();

        $this->assertCount(1, $fields);
        $feld = $fields[0];

        $this->assertEquals(['kauf'], $feld->getModus());
        $this->assertEquals(['int'], $feld->getTyp());
        $this->assertEquals('abc', $feld->getName());
        $this->assertEquals(100, $feld->getWert());
    }

    public function testReadComplexTypeWithArrays(): void
    {
        $xmlString = '<bewertung>
            <feld>
              <modus>kauf</modus>
              <modus>miete</modus>
              <modus>pacht</modus>
              <name>abc</name>
              <typ>int</typ>
              <typ>float</typ>
              <typ>string</typ>
              <wert>100</wert>
            </feld>
          </bewertung>';

        /* @var Bewertung $subject */
        $subject = $this->serializer->deserialize($xmlString, Bewertung::class, 'xml');
        $fields  = $subject->getFeld();

        $this->assertCount(1, $fields);
        $feld = $fields[0];

        $this->assertEquals(['kauf', 'miete', 'pacht'], $feld->getModus());
        $this->assertEquals(['int', 'float', 'string'], $feld->getTyp());
        $this->assertEquals('abc', $feld->getName());
        $this->assertEquals(100, $feld->getWert());
    }

    public function testReadGeoWithUserDefinedSimplefields(): void
    {
        $xmlString = '<geo>
            <plz>01809</plz>
            <ort>Heidenau</ort>
            <strasse>Dr.-Otto-Nuschke-Straße</strasse>
            <hausnummer>2</hausnummer>
            <land iso_land="DEU"/>
            <etage>0</etage>
            <wohnungsnr>8.1.1</wohnungsnr>
            <regionaler_zusatz>Mügeln</regionaler_zusatz>
            <user_defined_simplefield feldname="ZONE">Mügeln</user_defined_simplefield>
            <user_defined_simplefield feldname="regionaler_zusatz_gruppe"></user_defined_simplefield>
        </geo>';

        /* @var Geo $subject */
        $subject = $this->serializer->deserialize($xmlString, Geo::class, 'xml');

        $this->assertSame('01809', $subject->getPlz());
        $this->assertSame('Heidenau', $subject->getOrt());
        $this->assertSame('Dr.-Otto-Nuschke-Straße', $subject->getStrasse());
        $this->assertSame('2', $subject->getHausnummer());
        $this->assertSame('DEU', $subject->getLand()->getIsoLand());
        $this->assertSame(0, $subject->getEtage());
        $this->assertSame('8.1.1', $subject->getWohnungsnr());
        $this->assertSame('Mügeln', $subject->getRegionalerZusatz());
        $this->assertCount(2, $subject->getUserDefinedSimplefield());
        $this->assertSame('Mügeln', $subject->getUserDefinedSimplefield()[0]->getValue());
        $this->assertSame('ZONE', $subject->getUserDefinedSimplefield()[0]->getFeldname());
        $this->assertSame('regionaler_zusatz_gruppe', $subject->getUserDefinedSimplefield()[1]->getFeldname());
    }
}
