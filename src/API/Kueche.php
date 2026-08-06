<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kueche
 * Welche Eigenschaften besitzt die Küche, Optionen kombinierbar
 */
#[XmlRoot(name: 'kueche')]
class Kueche
{
    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'EBK')]
    protected ?bool $ebk = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'OFFEN')]
    protected ?bool $offen = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'PANTRY')]
    protected ?bool $pantry = null;

    public function getEbk(): ?bool
    {
        return $this->ebk;
    }

    public function setEbk(?bool $ebk): Kueche
    {
        $this->ebk = $ebk;
        return $this;
    }

    public function getOffen(): ?bool
    {
        return $this->offen;
    }

    public function setOffen(?bool $offen): Kueche
    {
        $this->offen = $offen;
        return $this;
    }

    public function getPantry(): ?bool
    {
        return $this->pantry;
    }

    public function setPantry(?bool $pantry): Kueche
    {
        $this->pantry = $pantry;
        return $this;
    }

    public function __construct(?bool $ebk = null, ?bool $offen = null, ?bool $pantry = null)
    {
        $this->ebk = $ebk;
        $this->offen = $offen;
        $this->pantry = $pantry;
    }
}
