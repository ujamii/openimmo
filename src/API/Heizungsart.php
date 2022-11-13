<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizungsart
 * Welche Heizungsarten sind vorhanden, Optionen kombinierbar
 * @XmlRoot("heizungsart")
 */
class Heizungsart
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("OFEN")
     * optional
     */
    public ?bool $ofen = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ETAGE")
     * optional
     */
    public ?bool $etage = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ZENTRAL")
     * optional
     */
    public ?bool $zentral = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FERN")
     * optional
     */
    public ?bool $fern = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FUSSBODEN")
     * optional
     */
    public ?bool $fussboden = null;

    public function getOfen(): ?bool
    {
        return $this->ofen;
    }

    public function setOfen(?bool $ofen): Heizungsart
    {
        $this->ofen = $ofen;
        return $this;
    }

    public function getEtage(): ?bool
    {
        return $this->etage;
    }

    public function setEtage(?bool $etage): Heizungsart
    {
        $this->etage = $etage;
        return $this;
    }

    public function getZentral(): ?bool
    {
        return $this->zentral;
    }

    public function setZentral(?bool $zentral): Heizungsart
    {
        $this->zentral = $zentral;
        return $this;
    }

    public function getFern(): ?bool
    {
        return $this->fern;
    }

    public function setFern(?bool $fern): Heizungsart
    {
        $this->fern = $fern;
        return $this;
    }

    public function getFussboden(): ?bool
    {
        return $this->fussboden;
    }

    public function setFussboden(?bool $fussboden): Heizungsart
    {
        $this->fussboden = $fussboden;
        return $this;
    }

    public function __construct(
        ?bool $ofen = null,
        ?bool $etage = null,
        ?bool $zentral = null,
        ?bool $fern = null,
        ?bool $fussboden = null,
    ) {
        $this->ofen = $ofen;
        $this->etage = $etage;
        $this->zentral = $zentral;
        $this->fern = $fern;
        $this->fussboden = $fussboden;
    }
}
