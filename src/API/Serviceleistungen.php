<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Serviceleistungen
 * Welche Serviceleistungen werden angeboten? Optionen kombinierbar
 */
#[XmlRoot(name: 'serviceleistungen')]
class Serviceleistungen
{
    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'BETREUTES_WOHNEN')]
    protected ?bool $betreutesWohnen = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'CATERING')]
    protected ?bool $catering = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'REINIGUNG')]
    protected ?bool $reinigung = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'EINKAUF')]
    protected ?bool $einkauf = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'WACHDIENST')]
    protected ?bool $wachdienst = null;

    public function getBetreutesWohnen(): ?bool
    {
        return $this->betreutesWohnen;
    }

    public function setBetreutesWohnen(?bool $betreutesWohnen): Serviceleistungen
    {
        $this->betreutesWohnen = $betreutesWohnen;
        return $this;
    }

    public function getCatering(): ?bool
    {
        return $this->catering;
    }

    public function setCatering(?bool $catering): Serviceleistungen
    {
        $this->catering = $catering;
        return $this;
    }

    public function getReinigung(): ?bool
    {
        return $this->reinigung;
    }

    public function setReinigung(?bool $reinigung): Serviceleistungen
    {
        $this->reinigung = $reinigung;
        return $this;
    }

    public function getEinkauf(): ?bool
    {
        return $this->einkauf;
    }

    public function setEinkauf(?bool $einkauf): Serviceleistungen
    {
        $this->einkauf = $einkauf;
        return $this;
    }

    public function getWachdienst(): ?bool
    {
        return $this->wachdienst;
    }

    public function setWachdienst(?bool $wachdienst): Serviceleistungen
    {
        $this->wachdienst = $wachdienst;
        return $this;
    }

    public function __construct(
        ?bool $betreutesWohnen = null,
        ?bool $catering = null,
        ?bool $reinigung = null,
        ?bool $einkauf = null,
        ?bool $wachdienst = null,
    ) {
        $this->betreutesWohnen = $betreutesWohnen;
        $this->catering = $catering;
        $this->reinigung = $reinigung;
        $this->einkauf = $einkauf;
        $this->wachdienst = $wachdienst;
    }
}
