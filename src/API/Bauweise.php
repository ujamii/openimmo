<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bauweise
 */
#[XmlRoot(name: 'bauweise')]
class Bauweise
{
    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'MASSIV')]
    protected ?bool $massiv = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'FERTIGTEILE')]
    protected ?bool $fertigteile = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'HOLZ')]
    protected ?bool $holz = null;

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
