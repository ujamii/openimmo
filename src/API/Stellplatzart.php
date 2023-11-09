<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Stellplatzart
 * Welche Stellplatzarten sind vorhanden, Optionen kombinierbar, als einfache Alternative zu den stp...Elementen
 * @XmlRoot("stellplatzart")
 */
class Stellplatzart
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("GARAGE")
     * optional
     */
    protected ?bool $garage = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("TIEFGARAGE")
     * optional
     */
    protected ?bool $tiefgarage = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("CARPORT")
     * optional
     */
    protected ?bool $carport = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FREIPLATZ")
     * optional
     */
    protected ?bool $freiplatz = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PARKHAUS")
     * optional
     */
    protected ?bool $parkhaus = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("DUPLEX")
     * optional
     */
    protected ?bool $duplex = null;

    public function getGarage(): ?bool
    {
        return $this->garage;
    }

    public function setGarage(?bool $garage): Stellplatzart
    {
        $this->garage = $garage;
        return $this;
    }

    public function getTiefgarage(): ?bool
    {
        return $this->tiefgarage;
    }

    public function setTiefgarage(?bool $tiefgarage): Stellplatzart
    {
        $this->tiefgarage = $tiefgarage;
        return $this;
    }

    public function getCarport(): ?bool
    {
        return $this->carport;
    }

    public function setCarport(?bool $carport): Stellplatzart
    {
        $this->carport = $carport;
        return $this;
    }

    public function getFreiplatz(): ?bool
    {
        return $this->freiplatz;
    }

    public function setFreiplatz(?bool $freiplatz): Stellplatzart
    {
        $this->freiplatz = $freiplatz;
        return $this;
    }

    public function getParkhaus(): ?bool
    {
        return $this->parkhaus;
    }

    public function setParkhaus(?bool $parkhaus): Stellplatzart
    {
        $this->parkhaus = $parkhaus;
        return $this;
    }

    public function getDuplex(): ?bool
    {
        return $this->duplex;
    }

    public function setDuplex(?bool $duplex): Stellplatzart
    {
        $this->duplex = $duplex;
        return $this;
    }

    public function __construct(
        ?bool $garage = null,
        ?bool $tiefgarage = null,
        ?bool $carport = null,
        ?bool $freiplatz = null,
        ?bool $parkhaus = null,
        ?bool $duplex = null,
    ) {
        $this->garage = $garage;
        $this->tiefgarage = $tiefgarage;
        $this->carport = $carport;
        $this->freiplatz = $freiplatz;
        $this->parkhaus = $parkhaus;
        $this->duplex = $duplex;
    }
}
