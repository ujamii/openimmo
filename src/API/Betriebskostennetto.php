<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Betriebskostennetto
 * Betriebskosten eines Objektes bei Vermietun, UmSt. im Attribut
 * @XmlRoot("betriebskostennetto")
 */
class Betriebskostennetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    public ?float $betriebskostenust = null;

    /**
     * @Inline
     * @Type("float")
     */
    public ?float $value = null;

    public function getBetriebskostenust(): ?float
    {
        return $this->betriebskostenust;
    }

    public function setBetriebskostenust(?float $betriebskostenust): Betriebskostennetto
    {
        $this->betriebskostenust = $betriebskostenust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Betriebskostennetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $betriebskostenust = null, ?float $value = null)
    {
        $this->betriebskostenust = $betriebskostenust;
        $this->value = $value;
    }
}
