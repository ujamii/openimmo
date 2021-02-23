<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Energietyp
 *
 * @XmlRoot("energietyp")
 */
class Energietyp
{
    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KFW40")
     * @var bool
     */
    protected $kfw40;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KFW55")
     * @var bool
     */
    protected $kfw55;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KFW60")
     * @var bool
     */
    protected $kfw60;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KFW70")
     * @var bool
     */
    protected $kfw70;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("MINERGIEBAUWEISE")
     * @var bool
     */
    protected $minergiebauweise;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("MINERGIE_ZERTIFIZIERT")
     * @var bool
     */
    protected $minergieZertifiziert;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("NEUBAUSTANDARD")
     * @var bool
     */
    protected $neubaustandard;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("NIEDRIGENERGIE")
     * @var bool
     */
    protected $niedrigenergie;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PASSIVHAUS")
     * @var bool
     */
    protected $passivhaus;

    /**
     * @return bool
     */
    public function getKfw40(): ?bool
    {
        return $this->kfw40;
    }

    /**
     * @return bool
     */
    public function getKfw55(): ?bool
    {
        return $this->kfw55;
    }

    /**
     * @return bool
     */
    public function getKfw60(): ?bool
    {
        return $this->kfw60;
    }

    /**
     * @return bool
     */
    public function getKfw70(): ?bool
    {
        return $this->kfw70;
    }

    /**
     * @return bool
     */
    public function getMinergiebauweise(): ?bool
    {
        return $this->minergiebauweise;
    }

    /**
     * @return bool
     */
    public function getMinergieZertifiziert(): ?bool
    {
        return $this->minergieZertifiziert;
    }

    /**
     * @return bool
     */
    public function getNeubaustandard(): ?bool
    {
        return $this->neubaustandard;
    }

    /**
     * @return bool
     */
    public function getNiedrigenergie(): ?bool
    {
        return $this->niedrigenergie;
    }

    /**
     * @return bool
     */
    public function getPassivhaus(): ?bool
    {
        return $this->passivhaus;
    }

    /**
     * @param bool $kfw40 Setter for kfw40
     * @return Energietyp
     */
    public function setKfw40(?bool $kfw40)
    {
        $this->kfw40 = $kfw40;
        return $this;
    }

    /**
     * @param bool $kfw55 Setter for kfw55
     * @return Energietyp
     */
    public function setKfw55(?bool $kfw55)
    {
        $this->kfw55 = $kfw55;
        return $this;
    }

    /**
     * @param bool $kfw60 Setter for kfw60
     * @return Energietyp
     */
    public function setKfw60(?bool $kfw60)
    {
        $this->kfw60 = $kfw60;
        return $this;
    }

    /**
     * @param bool $kfw70 Setter for kfw70
     * @return Energietyp
     */
    public function setKfw70(?bool $kfw70)
    {
        $this->kfw70 = $kfw70;
        return $this;
    }

    /**
     * @param bool $minergiebauweise Setter for minergiebauweise
     * @return Energietyp
     */
    public function setMinergiebauweise(?bool $minergiebauweise)
    {
        $this->minergiebauweise = $minergiebauweise;
        return $this;
    }

    /**
     * @param bool $minergieZertifiziert Setter for minergieZertifiziert
     * @return Energietyp
     */
    public function setMinergieZertifiziert(?bool $minergieZertifiziert)
    {
        $this->minergieZertifiziert = $minergieZertifiziert;
        return $this;
    }

    /**
     * @param bool $neubaustandard Setter for neubaustandard
     * @return Energietyp
     */
    public function setNeubaustandard(?bool $neubaustandard)
    {
        $this->neubaustandard = $neubaustandard;
        return $this;
    }

    /**
     * @param bool $niedrigenergie Setter for niedrigenergie
     * @return Energietyp
     */
    public function setNiedrigenergie(?bool $niedrigenergie)
    {
        $this->niedrigenergie = $niedrigenergie;
        return $this;
    }

    /**
     * @param bool $passivhaus Setter for passivhaus
     * @return Energietyp
     */
    public function setPassivhaus(?bool $passivhaus)
    {
        $this->passivhaus = $passivhaus;
        return $this;
    }
}
