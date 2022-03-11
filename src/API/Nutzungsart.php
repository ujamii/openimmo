<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nutzungsart
 * nutzungsart
 * @XmlRoot("nutzungsart")
 */
class Nutzungsart
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("WOHNEN")
     * required
     */
    protected ?bool $wohnen;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("GEWERBE")
     * required
     */
    protected ?bool $gewerbe;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ANLAGE")
     * optional
     */
    protected ?bool $anlage;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("WAZ")
     * optional
     */
    protected ?bool $waz;

    public function getWohnen(): bool
    {
        return $this->wohnen;
    }

    public function setWohnen(bool $wohnen): Nutzungsart
    {
        $this->wohnen = $wohnen;
        return $this;
    }

    public function getGewerbe(): bool
    {
        return $this->gewerbe;
    }

    public function setGewerbe(bool $gewerbe): Nutzungsart
    {
        $this->gewerbe = $gewerbe;
        return $this;
    }

    public function getAnlage(): ?bool
    {
        return $this->anlage;
    }

    public function setAnlage(?bool $anlage): Nutzungsart
    {
        $this->anlage = $anlage;
        return $this;
    }

    public function getWaz(): ?bool
    {
        return $this->waz;
    }

    public function setWaz(?bool $waz): Nutzungsart
    {
        $this->waz = $waz;
        return $this;
    }

    public function __construct(bool $wohnen = null, bool $gewerbe = null, bool $anlage = null, bool $waz = null)
    {
        $this->wohnen = $wohnen;
        $this->gewerbe = $gewerbe;
        $this->anlage = $anlage;
        $this->waz = $waz;
    }
}
