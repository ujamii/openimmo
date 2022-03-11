<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstigekostennetto
 * Anganen bei Miet-Objekten, UmSt. im Attribut.
 * @XmlRoot("sonstigekostennetto")
 */
class Sonstigekostennetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $sonstigekostenust;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value;

    public function getSonstigekostenust(): ?float
    {
        return $this->sonstigekostenust;
    }

    public function setSonstigekostenust(?float $sonstigekostenust): Sonstigekostennetto
    {
        $this->sonstigekostenust = $sonstigekostenust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Sonstigekostennetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(float $sonstigekostenust = null, float $value = null)
    {
        $this->sonstigekostenust = $sonstigekostenust;
        $this->value = $value;
    }
}
