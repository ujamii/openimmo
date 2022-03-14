<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Alter
 * Ist es ein Neu- oder Altbau, Optionen nicht kombinierbar
 * @XmlRoot("alter")
 */
class Alter
{
    public const ALTER_ATTR_ALTBAU = 'ALTBAU';
    public const ALTER_ATTR_NEUBAU = 'NEUBAU';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see ALTER_ATTR_* constants
     */
    protected string $alterAttr = '';

    public function getAlterAttr(): ?string
    {
        return $this->alterAttr;
    }

    public function setAlterAttr(?string $alterAttr): Alter
    {
        $this->alterAttr = $alterAttr;
        return $this;
    }

    public function __construct(string $alterAttr = '')
    {
        $this->alterAttr = $alterAttr;
    }
}
