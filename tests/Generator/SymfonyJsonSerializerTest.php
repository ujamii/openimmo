<?php

namespace Ujamii\OpenImmo\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Ujamii\OpenImmo\API\Aktion;
use Ujamii\OpenImmo\API\Anbieter;
use Ujamii\OpenImmo\API\Ausblick;
use Ujamii\OpenImmo\API\AussenCourtage;
use Ujamii\OpenImmo\API\Bewertung;
use Ujamii\OpenImmo\API\Distanzen;
use Ujamii\OpenImmo\API\DistanzenSport;
use Ujamii\OpenImmo\API\Feld;
use Ujamii\OpenImmo\API\Geo;
use Ujamii\OpenImmo\API\Immobilie;
use Ujamii\OpenImmo\API\Infrastruktur;
use Ujamii\OpenImmo\API\Kontaktperson;
use Ujamii\OpenImmo\API\Nutzungsart;
use Ujamii\OpenImmo\API\Objektart;
use Ujamii\OpenImmo\API\Objektkategorie;
use Ujamii\OpenImmo\API\Openimmo;
use Ujamii\OpenImmo\API\Uebertragung;
use Ujamii\OpenImmo\API\Vermarktungsart;
use Ujamii\OpenImmo\API\VerwaltungTechn;
use Ujamii\OpenImmo\API\Wohnung;

class SymfonyJsonSerializerTest extends TestCase
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    protected $serializerContext = [
        AbstractObjectNormalizer::SKIP_NULL_VALUES       => true,
        AbstractObjectNormalizer::PRESERVE_EMPTY_OBJECTS => false,
        'json_encode_options'                            => \JSON_PRESERVE_ZERO_FRACTION
    ];

    /**
     *
     */
    public function setUp(): void
    {
        $encoders    = [new JsonEncoder()];
        $normalizers = [
            new DateTimeNormalizer(),
            new GetSetMethodNormalizer()
        ];

        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function testWriteImmobilieJson(): void
    {
        $jsonString = '{
            "geo": {
                "userDefinedAnyfield": [],
                "userDefinedExtend": [],
                "userDefinedSimplefield": []
            },
            "kontaktperson": {
                "anrede": "Herr",
                "emailSonstige": [],
                "name": "John Doe",
                "telSonstige": [],
                "userDefinedAnyfield": [],
                "userDefinedExtend": [],
                "userDefinedSimplefield": []
            },
            "objektkategorie": {
                "nutzungsart": {
                    "gewerbe": false,
                    "wohnen": false
                },
                "objektart": {
                    "bueroPraxen": [],
                    "einzelhandel": [],
                    "freizeitimmobilieGewerblich": [],
                    "gastgewerbe": [],
                    "grundstueck": [],
                    "hallenLagerProd": [],
                    "haus": [],
                    "landUndForstwirtschaft": [],
                   "objektartZusatz": [],
                    "parken": [],
                    "sonstige": [],
                    "wohnung": [],
                    "zimmer": [],
                    "zinshausRenditeobjekt": []
                },
                "userDefinedAnyfield": [],
                "userDefinedExtend": [],
                "userDefinedSimplefield": [],
                "vermarktungsart": {
                    "kauf": true,
                    "mietePacht": false
                }
            },
            "userDefinedAnyfield": [],
            "userDefinedExtend": [],
            "userDefinedSimplefield": [],
            "verwaltungTechn": {
                "aktion": {
                    "aktionart": "CHANGE"
                },
                "objektnrExtern": "456",
                "openimmoObid": "123",
                "standVom": "2021-06-30T09:54:33+00:00",
                "userDefinedAnyfield": [],
                "userDefinedExtend": [],
                "userDefinedSimplefield": []
            },
            "weitereAdresse": []
        }';

        $data = new Immobilie();
        $data->setKontaktperson((new Kontaktperson())->setAnrede('Herr')->setName('John Doe'));
        $data->setGeo(new Geo());
        $data->setObjektkategorie(
            (new Objektkategorie())
                ->setNutzungsart((new Nutzungsart())->setGewerbe(false)->setWohnen(false))
                ->setObjektart(new Objektart())
                ->setVermarktungsart((new Vermarktungsart())->setKauf(true)->setMietePacht(false))
        );
        $data->setVerwaltungTechn(
            (new VerwaltungTechn())
                ->setAktion(new Aktion(Aktion::AKTIONART_CHANGE))
                ->setObjektnrExtern('456')
                ->setOpenimmoObid('123')
                ->setStandVom(new \DateTime('@1625046873'))
        );

        $jsonContent = $this->serializer->serialize($data, JsonEncoder::FORMAT, $this->serializerContext);
        $this->assertJsonStringEqualsJsonString($jsonString, $jsonContent);
    }

    public function testWriteUebertragungJson(): void
    {
        $jsonString = '{
            "art": "ONLINE",
            "modus": "NEW",
            "regiId": "ABCD143",
            "sendersoftware": "OIGEN",
            "senderversion": "0.9",
            "technEmail": "",
            "timestamp": "2014-06-01T10:00:00+00:00",
            "umfang": "VOLL",
            "version": "1.2.7"
        }';

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

        $jsonContent = $this->serializer->serialize($uebertragung, JsonEncoder::FORMAT, $this->serializerContext);
        $this->assertJsonStringEqualsJsonString($jsonString, $jsonContent);
    }

    public function testWriteUebertragungJsonRealWorld(): void
    {
        $jsonString = '{
            "art": "OFFLINE",
            "modus": "CHANGE",
            "sendersoftware": "OOF",
            "senderversion": "$Rev: 85202 $",
            "technEmail": "xxx@xxx.de",
            "timestamp": "2019-09-30T12:42:27+00:00",
            "umfang": "TEIL",
            "version": "1.2.7"
        }';

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

        $jsonContent = $this->serializer->serialize($uebertragung, JsonEncoder::FORMAT, $this->serializerContext);
        $this->assertJsonStringEqualsJsonString($jsonString, $jsonContent);
    }

    public function testWriteNutzungsartJsonAsUsedInReadme(): void
    {
        $jsonString  = '{
            "anlage": false,
            "gewerbe": false,
            "waz": false,
            "wohnen": true
        }';
        $nutzungsart = new Nutzungsart();
        $nutzungsart
            ->setWohnen(true)
            ->setGewerbe(false)
            ->setAnlage(false)
            ->setWaz(false);

        $jsonContent = $this->serializer->serialize($nutzungsart, JsonEncoder::FORMAT, $this->serializerContext);
        $this->assertJsonStringEqualsJsonString($jsonString, $jsonContent);
    }

    public function testWriteDistanzenZuSportJson(): void
    {
        $jsonString = '{"distanzZuSport": "SEE", "value": 15}';
        $phpObj     = new DistanzenSport(DistanzenSport::DISTANZ_ZU_SPORT_SEE, 15);

        $jsonContent = $this->serializer->serialize($phpObj, JsonEncoder::FORMAT, $this->serializerContext);
        $this->assertJsonStringEqualsJsonString($jsonString, $jsonContent);
    }

    public function testWriteInfrastrukturJsonAsUsedInReadme(): void
    {
        $jsonString    = '{
            "ausblick": {
                "blick": "BERGE"
            },
            "distanzen": [
                {
                    "distanzZu": "HAUPTSCHULE",
                    "value": 22
                }
            ],
            "distanzenSport": [
                {
                    "distanzZuSport": "SEE",
                    "value": 15
                }
            ],
            "userDefinedAnyfield": [],
            "userDefinedExtend": [],
            "userDefinedSimplefield": [],
            "zulieferung": false
        }';
        $infrastruktur = new Infrastruktur();
        $infrastruktur
            ->setZulieferung(false)
            ->setAusblick((new Ausblick())->setBlick(Ausblick::BLICK_BERGE))
            ->setDistanzenSport([
                new DistanzenSport(DistanzenSport::DISTANZ_ZU_SPORT_SEE, 15)
            ])
            ->setDistanzen([
                new Distanzen(Distanzen::DISTANZ_ZU_HAUPTSCHULE, 22.0)
            ]);

        $jsonContent = $this->serializer->serialize($infrastruktur, JsonEncoder::FORMAT, $this->serializerContext);
        $this->assertJsonStringEqualsJsonString($jsonString, $jsonContent);
    }

    public function testWriteAnbieterJson(): void
    {
        $jsonString = '{
            "anbieter": [
                {
                    "firma": "MusterMannFrau Immobilien",
                    "immobilie": [],
                    "lizenzkennung": "ABCD13",
                    "openimmoAnid": "MUSTER",
                    "userDefinedAnyfield": [],
                    "userDefinedExtend": [],
                    "userDefinedSimplefield": []
                }
            ],
            "uebertragung": {
                "art": "OFFLINE",
                "modus": "CHANGE",
                "sendersoftware": "OOF",
                "senderversion": "$Rev: 85202 $",
                "technEmail": "xxx@xxx.de",
                "timestamp": "2019-09-30T12:42:27+00:00",
                "umfang": "TEIL",
                "version": "1.2.7"
            },
            "userDefinedAnyfield": [],
            "userDefinedSimplefield": []
        }';

        $openImmo = new Openimmo();
        $openImmo
            ->setAnbieter([
                (new Anbieter())
                    ->setFirma('MusterMannFrau Immobilien')
                    ->setLizenzkennung('ABCD13')
                    ->setOpenimmoAnid('MUSTER')
            ])
            ->setUebertragung(
                (new Uebertragung())
                    ->setArt(Uebertragung::ART_OFFLINE)
                    ->setUmfang(Uebertragung::UMFANG_TEIL)
                    ->setModus(Uebertragung::MODUS_CHANGE)
                    ->setVersion('1.2.7')
                    ->setSendersoftware('OOF')
                    ->setSenderversion('$Rev: 85202 $')
                    ->setTechnEmail('xxx@xxx.de')
                    ->setTimestamp(new \DateTime('2019-09-30T12:42:27.000+00:00'))
            );

        $jsonContent = $this->serializer->serialize($openImmo, JsonEncoder::FORMAT, $this->serializerContext);
        $this->assertJsonStringEqualsJsonString($jsonString, $jsonContent);
    }

    public function testWriteObjektKategorieJson(): void
    {
        $jsonString = '{
            "nutzungsart": {
                "gewerbe": false,
                "wohnen": true
            },
            "objektart": {
                "bueroPraxen": [],
                "einzelhandel": [],
                "freizeitimmobilieGewerblich": [],
                "gastgewerbe": [],
                "grundstueck": [],
                "hallenLagerProd": [],
                "haus": [],
                "landUndForstwirtschaft": [],
                "objektartZusatz": [
                    "Dachgeschoss"
                ],
                "parken": [],
                "sonstige": [],
                "wohnung": [
                    {
                        "wohnungtyp": "MAISONETTE"
                    }
                ],
                "zimmer": [],
                "zinshausRenditeobjekt": []
            },
            "userDefinedAnyfield": [],
            "userDefinedExtend": [],
            "userDefinedSimplefield": [],
            "vermarktungsart": {
                "kauf": false,
                "mietePacht": true
            }
        }';

        $category = new Objektkategorie();
        $category->setNutzungsart((new Nutzungsart())->setWohnen(true)->setGewerbe(false));
        $category->setVermarktungsart((new Vermarktungsart())->setKauf(false)->setMietePacht(true));

        $art = new Objektart();
        $art->setWohnung([(new Wohnung())->setWohnungtyp(Wohnung::WOHNUNGTYP_MAISONETTE)]);
        $art->setObjektartZusatz(['Dachgeschoss']);

        $category->setObjektart($art);
        $jsonContent = $this->serializer->serialize($category, JsonEncoder::FORMAT, $this->serializerContext);
        $this->assertJsonStringEqualsJsonString($jsonString, $jsonContent);
    }

    public function testWriteComplexTypeMixed(): void
    {
        $jsonString = '{"mitMwst": false, "value": "k.A."}';
        $subject    = new AussenCourtage(false, 'k.A.');

        $jsonContent = $this->serializer->serialize($subject, JsonEncoder::FORMAT, $this->serializerContext);
        $this->assertJsonStringEqualsJsonString($jsonString, $jsonContent);
    }

    public function testWriteComplexType(): void
    {
        $jsonString = '{
            "feld": [
                {
                    "modus": [
                        "kauf"
                    ],
                    "name": "abc",
                    "typ": [
                        "int"
                    ],
                    "wert": "100"
                }
            ]
        }';
        $subject    = new Bewertung();
        $subject->setFeld([new Feld('abc', '100', ['int'], ['kauf'])]);

        $jsonContent = $this->serializer->serialize($subject, JsonEncoder::FORMAT, $this->serializerContext);
        $this->assertJsonStringEqualsJsonString($jsonString, $jsonContent);
    }
}
