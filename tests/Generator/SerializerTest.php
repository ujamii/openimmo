<?php
namespace Ujamii\OpenImmo\Tests\Generator;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerInterface;
use Ujamii\OpenImmo\API\Immobilie;
use Ujamii\OpenImmo\API\Kontaktperson;
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
            ->setArt('ONLINE')
            ->setUmfang('VOLL')
            ->setModus('NEW')
            ->setVersion('1.2.7')
            ->setSendersoftware('OIGEN')
            ->setSenderversion('0.9')
            ->setTechnEmail('')
            ->setTimestamp(new \DateTime('2014-06-01T10:00:00'))
            ->setRegiId('ABCD143');

        $this->assertXmlStringEqualsXmlString($xmlString, $this->serializer->serialize($uebertragung, 'xml'));
    }
}
