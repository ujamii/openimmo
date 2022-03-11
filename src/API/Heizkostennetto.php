<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizkostennetto
 * Die Heizkosten einer Einheit als Nettowert. Die Umsatzsteuer optional im Attribut
 * @XmlRoot("heizkostennetto")
 */
class Heizkostennetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $heizkostenust;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value;

    public function getHeizkostenust(): ?float
    {
        return $this->heizkostenust;
    }

    public function setHeizkostenust(?float $heizkostenust): Heizkostennetto
    {
        $this->heizkostenust = $heizkostenust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Heizkostennetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(float $heizkostenust = null, float $value = null)
    {
        $this->heizkostenust = $heizkostenust;
        $this->value = $value;
    }
}
