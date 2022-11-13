<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bauweise
 *
 * @XmlRoot("bauweise")
 */
class Bauweise
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("MASSIV")
     * optional
     */
    public ?bool $massiv = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FERTIGTEILE")
     * optional
     */
    public ?bool $fertigteile = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("HOLZ")
     * optional
     */
    public ?bool $holz = null;

    public function getMassiv(): ?bool
    {
        return $this->massiv;
    }

    public function setMassiv(?bool $massiv): Bauweise
    {
        $this->massiv = $massiv;
        return $this;
    }

    public function getFertigteile(): ?bool
    {
        return $this->fertigteile;
    }

    public function setFertigteile(?bool $fertigteile): Bauweise
    {
        $this->fertigteile = $fertigteile;
        return $this;
    }

    public function getHolz(): ?bool
    {
        return $this->holz;
    }

    public function setHolz(?bool $holz): Bauweise
    {
        $this->holz = $holz;
        return $this;
    }

    public function __construct(?bool $massiv = null, ?bool $fertigteile = null, ?bool $holz = null)
    {
        $this->massiv = $massiv;
        $this->fertigteile = $fertigteile;
        $this->holz = $holz;
    }
}
