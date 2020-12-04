<?php

namespace Ujamii\OpenImmo\Handler;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\XmlSerializationVisitor;

/**
 * Class DateTimeHandler
 * @see https://github.com/schmittjoh/serializer/blob/master/doc/handlers.rst
 */
class DateTimeHandler implements SubscribingHandlerInterface
{

    /**
     * @return array|array[]
     */
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigatorInterface::DIRECTION_SERIALIZATION,
                'format'    => 'xml',
                'type'      => 'DateTime',
                'method'    => 'serializeDateTimeToXml',
            ],
            [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format'    => 'xml',
                'type'      => 'DateTime',
                'method'    => 'deserializeDateTimeToXml',
            ],
        ];
    }

    /**
     * @param XmlSerializationVisitor $visitor
     * @param \DateTime $date
     * @param array $type
     * @param Context $context
     *
     * @return string
     */
    public function serializeDateTimeToXml(XmlSerializationVisitor $visitor, \DateTime $date, array $type, Context $context): string
    {
        return $date->format($type['params'][0]);
    }

    /**
     * @param XmlDeserializationVisitor $visitor
     * @param string $dateAsString
     * @param array $type
     * @param Context $context
     *
     * @return \DateTime
     * @throws \Exception
     */
    public function deserializeDateTimeToXml(XmlDeserializationVisitor $visitor, string $dateAsString, array $type, Context $context): \DateTime
    {
        return new \DateTime($dateAsString);
    }
}
