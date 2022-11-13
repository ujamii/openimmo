<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Serviceleistungen
 * Welche Serviceleistungen werden angeboten? Optionen kombinierbar
 * @XmlRoot("serviceleistungen")
 */
class Serviceleistungen
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("BETREUTES_WOHNEN")
     * optional
     */
    public ?bool $betreutesWohnen = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("CATERING")
     * optional
     */
    public ?bool $catering = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("REINIGUNG")
     * optional
     */
    public ?bool $reinigung = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("EINKAUF")
     * optional
     */
    public ?bool $einkauf = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("WACHDIENST")
     * optional
     */
    public ?bool $wachdienst = null;

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
