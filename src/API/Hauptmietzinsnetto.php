<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Hauptmietzinsnetto
 *
 * @XmlRoot("hauptmietzinsnetto")
 */
class Hauptmietzinsnetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    public ?float $hauptmietzinsust = null;

    /**
     * @Inline
     * @Type("float")
     */
    public ?float $value = null;

    public function getHauptmietzinsust(): ?float
    {
        return $this->hauptmietzinsust;
    }

    public function setHauptmietzinsust(?float $hauptmietzinsust): Hauptmietzinsnetto
    {
        $this->hauptmietzinsust = $hauptmietzinsust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Hauptmietzinsnetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $hauptmietzinsust = null, ?float $value = null)
    {
        $this->hauptmietzinsust = $hauptmietzinsust;
        $this->value = $value;
    }
}
