<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Monatlichekostennetto
 * Summe der Monatlichen Kosten einer Wohnung als Information für einen Käufer (Netto), Umst im Attribut.
 * @XmlRoot("monatlichekostennetto")
 */
class Monatlichekostennetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $monatlichekostenust;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value;

    public function getMonatlichekostenust(): ?float
    {
        return $this->monatlichekostenust;
    }

    public function setMonatlichekostenust(?float $monatlichekostenust): Monatlichekostennetto
    {
        $this->monatlichekostenust = $monatlichekostenust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Monatlichekostennetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(float $monatlichekostenust = null, float $value = null)
    {
        $this->monatlichekostenust = $monatlichekostenust;
        $this->value = $value;
    }
}
