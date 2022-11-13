<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Befeuerung
 * Welche Befeuerungsarten sind vorhanden, Optionen kombinierbar
 * @XmlRoot("befeuerung")
 */
class Befeuerung
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("OEL")
     * optional
     */
    public ?bool $oel = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("GAS")
     * optional
     */
    public ?bool $gas = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ELEKTRO")
     * optional
     */
    public ?bool $elektro = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ALTERNATIV")
     * optional
     */
    public ?bool $alternativ = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SOLAR")
     * optional
     */
    public ?bool $solar = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ERDWAERME")
     * optional
     */
    public ?bool $erdwaerme = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("LUFTWP")
     * optional
     */
    public ?bool $luftwp = null;

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
     * @SerializedName("BLOCK")
     * optional
     */
    public ?bool $block = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("WASSER-ELEKTRO")
     * optional
     */
    public ?bool $wasserElektro = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PELLET")
     * optional
     */
    public ?bool $pellet = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KOHLE")
     * optional
     */
    public ?bool $kohle = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("HOLZ")
     * optional
     */
    public ?bool $holz = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FLUESSIGGAS")
     * optional
     */
    public ?bool $fluessiggas = null;

    public function getOel(): ?bool
    {
        return $this->oel;
    }

    public function setOel(?bool $oel): Befeuerung
    {
        $this->oel = $oel;
        return $this;
    }

    public function getGas(): ?bool
    {
        return $this->gas;
    }

    public function setGas(?bool $gas): Befeuerung
    {
        $this->gas = $gas;
        return $this;
    }

    public function getElektro(): ?bool
    {
        return $this->elektro;
    }

    public function setElektro(?bool $elektro): Befeuerung
    {
        $this->elektro = $elektro;
        return $this;
    }

    public function getAlternativ(): ?bool
    {
        return $this->alternativ;
    }

    public function setAlternativ(?bool $alternativ): Befeuerung
    {
        $this->alternativ = $alternativ;
        return $this;
    }

    public function getSolar(): ?bool
    {
        return $this->solar;
    }

    public function setSolar(?bool $solar): Befeuerung
    {
        $this->solar = $solar;
        return $this;
    }

    public function getErdwaerme(): ?bool
    {
        return $this->erdwaerme;
    }

    public function setErdwaerme(?bool $erdwaerme): Befeuerung
    {
        $this->erdwaerme = $erdwaerme;
        return $this;
    }

    public function getLuftwp(): ?bool
    {
        return $this->luftwp;
    }

    public function setLuftwp(?bool $luftwp): Befeuerung
    {
        $this->luftwp = $luftwp;
        return $this;
    }

    public function getFern(): ?bool
    {
        return $this->fern;
    }

    public function setFern(?bool $fern): Befeuerung
    {
        $this->fern = $fern;
        return $this;
    }

    public function getBlock(): ?bool
    {
        return $this->block;
    }

    public function setBlock(?bool $block): Befeuerung
    {
        $this->block = $block;
        return $this;
    }

    public function getWasserElektro(): ?bool
    {
        return $this->wasserElektro;
    }

    public function setWasserElektro(?bool $wasserElektro): Befeuerung
    {
        $this->wasserElektro = $wasserElektro;
        return $this;
    }

    public function getPellet(): ?bool
    {
        return $this->pellet;
    }

    public function setPellet(?bool $pellet): Befeuerung
    {
        $this->pellet = $pellet;
        return $this;
    }

    public function getKohle(): ?bool
    {
        return $this->kohle;
    }

    public function setKohle(?bool $kohle): Befeuerung
    {
        $this->kohle = $kohle;
        return $this;
    }

    public function getHolz(): ?bool
    {
        return $this->holz;
    }

    public function setHolz(?bool $holz): Befeuerung
    {
        $this->holz = $holz;
        return $this;
    }

    public function getFluessiggas(): ?bool
    {
        return $this->fluessiggas;
    }

    public function setFluessiggas(?bool $fluessiggas): Befeuerung
    {
        $this->fluessiggas = $fluessiggas;
        return $this;
    }
}
