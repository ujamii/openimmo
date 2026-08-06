<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Befeuerung
 * Welche Befeuerungsarten sind vorhanden, Optionen kombinierbar
 */
#[XmlRoot(name: 'befeuerung')]
class Befeuerung
{
    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'OEL')]
    protected ?bool $oel = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'GAS')]
    protected ?bool $gas = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'ELEKTRO')]
    protected ?bool $elektro = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'ALTERNATIV')]
    protected ?bool $alternativ = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'SOLAR')]
    protected ?bool $solar = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'ERDWAERME')]
    protected ?bool $erdwaerme = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'LUFTWP')]
    protected ?bool $luftwp = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'FERN')]
    protected ?bool $fern = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'BLOCK')]
    protected ?bool $block = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'WASSER-ELEKTRO')]
    protected ?bool $wasserElektro = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'PELLET')]
    protected ?bool $pellet = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'KOHLE')]
    protected ?bool $kohle = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'HOLZ')]
    protected ?bool $holz = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'FLUESSIGGAS')]
    protected ?bool $fluessiggas = null;

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
