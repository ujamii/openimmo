<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kaufpreisnetto
 * Ausgewiesene Kaufpreis Netto, Optional mit Umst im Attribut. Speziell für Gewerbe
 * @XmlRoot("kaufpreisnetto")
 */
class Kaufpreisnetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $kaufpreisust = null;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value = null;

    public function getKaufpreisust(): ?float
    {
        return $this->kaufpreisust;
    }

    public function setKaufpreisust(?float $kaufpreisust): Kaufpreisnetto
    {
        $this->kaufpreisust = $kaufpreisust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Kaufpreisnetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $kaufpreisust = null, ?float $value = null)
    {
        $this->kaufpreisust = $kaufpreisust;
        $this->value = $value;
    }
}
