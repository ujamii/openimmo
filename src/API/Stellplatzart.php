<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Stellplatzart
 * Welche Stellplatzarten sind vorhanden, Optionen kombinierbar, als einfache Alternative zu den stp...Elementen
 *
 * @XmlRoot("stellplatzart")
 */
class Stellplatzart
{
    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("CARPORT")
     * @var bool
     */
    protected $carport;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("DUPLEX")
     * @var bool
     */
    protected $duplex;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FREIPLATZ")
     * @var bool
     */
    protected $freiplatz;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("GARAGE")
     * @var bool
     */
    protected $garage;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PARKHAUS")
     * @var bool
     */
    protected $parkhaus;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("TIEFGARAGE")
     * @var bool
     */
    protected $tiefgarage;

    /**
     * @param bool $garage Shortcut setter for garage
     * @param bool $tiefgarage Shortcut setter for tiefgarage
     * @param bool $carport Shortcut setter for carport
     * @param bool $freiplatz Shortcut setter for freiplatz
     * @param bool $parkhaus Shortcut setter for parkhaus
     * @param bool $duplex Shortcut setter for duplex
     */
    public function __construct(bool $garage = null, bool $tiefgarage = null, bool $carport = null, bool $freiplatz = null, bool $parkhaus = null, bool $duplex = null)
    {
        $this->garage = $garage;
        $this->tiefgarage = $tiefgarage;
        $this->carport = $carport;
        $this->freiplatz = $freiplatz;
        $this->parkhaus = $parkhaus;
        $this->duplex = $duplex;
    }

    /**
     * @return bool
     */
    public function getCarport(): ?bool
    {
        return $this->carport;
    }

    /**
     * @return bool
     */
    public function getDuplex(): ?bool
    {
        return $this->duplex;
    }

    /**
     * @return bool
     */
    public function getFreiplatz(): ?bool
    {
        return $this->freiplatz;
    }

    /**
     * @return bool
     */
    public function getGarage(): ?bool
    {
        return $this->garage;
    }

    /**
     * @return bool
     */
    public function getParkhaus(): ?bool
    {
        return $this->parkhaus;
    }

    /**
     * @return bool
     */
    public function getTiefgarage(): ?bool
    {
        return $this->tiefgarage;
    }

    /**
     * @param bool $carport Setter for carport
     * @return Stellplatzart
     */
    public function setCarport(?bool $carport)
    {
        $this->carport = $carport;
        return $this;
    }

    /**
     * @param bool $duplex Setter for duplex
     * @return Stellplatzart
     */
    public function setDuplex(?bool $duplex)
    {
        $this->duplex = $duplex;
        return $this;
    }

    /**
     * @param bool $freiplatz Setter for freiplatz
     * @return Stellplatzart
     */
    public function setFreiplatz(?bool $freiplatz)
    {
        $this->freiplatz = $freiplatz;
        return $this;
    }

    /**
     * @param bool $garage Setter for garage
     * @return Stellplatzart
     */
    public function setGarage(?bool $garage)
    {
        $this->garage = $garage;
        return $this;
    }

    /**
     * @param bool $parkhaus Setter for parkhaus
     * @return Stellplatzart
     */
    public function setParkhaus(?bool $parkhaus)
    {
        $this->parkhaus = $parkhaus;
        return $this;
    }

    /**
     * @param bool $tiefgarage Setter for tiefgarage
     * @return Stellplatzart
     */
    public function setTiefgarage(?bool $tiefgarage)
    {
        $this->tiefgarage = $tiefgarage;
        return $this;
    }
}
