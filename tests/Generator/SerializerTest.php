<?php
namespace Ujamii\OpenImmo\Tests\Generator;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerInterface;
use Ujamii\OpenImmo\API\Immobilie;
use Ujamii\OpenImmo\API\Kontaktperson;

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

    public function testWriteXml()
    {
        $data = new Immobilie();
        $data->setKontaktperson((new Kontaktperson())->setAnrede('Herr'));

        $xmlContent = $this->serializer->serialize($data, 'xml');
        $this->assertXmlStringEqualsXmlString('<immobilie><kontaktperson><anrede>Herr</anrede></kontaktperson></immobilie>', $xmlContent);
    }
}
