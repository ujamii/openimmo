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
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PASSIVHAUS")
     * optional
     */
    protected ?bool $passivhaus;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("NIEDRIGENERGIE")
     * optional
     */
    protected ?bool $niedrigenergie;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("NEUBAUSTANDARD")
     * optional
     */
    protected ?bool $neubaustandard;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KFW40")
     * optional
     */
    protected ?bool $kfw40;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KFW60")
     * optional
     */
    protected ?bool $kfw60;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KFW55")
     * optional
     */
    protected ?bool $kfw55;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KFW70")
     * optional
     */
    protected ?bool $kfw70;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("MINERGIEBAUWEISE")
     * optional
     */
    protected ?bool $minergiebauweise;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("MINERGIE_ZERTIFIZIERT")
     * optional
     */
    protected ?bool $minergieZertifiziert;

    public function getPassivhaus(): ?bool
    {
        return $this->passivhaus;
    }

    public function setPassivhaus(?bool $passivhaus): Energietyp
    {
        $this->passivhaus = $passivhaus;
        return $this;
    }

    public function getNiedrigenergie(): ?bool
    {
        return $this->niedrigenergie;
    }

    public function setNiedrigenergie(?bool $niedrigenergie): Energietyp
    {
        $this->niedrigenergie = $niedrigenergie;
        return $this;
    }

    public function getNeubaustandard(): ?bool
    {
        return $this->neubaustandard;
    }

    public function setNeubaustandard(?bool $neubaustandard): Energietyp
    {
        $this->neubaustandard = $neubaustandard;
        return $this;
    }

    public function getKfw40(): ?bool
    {
        return $this->kfw40;
    }

    public function setKfw40(?bool $kfw40): Energietyp
    {
        $this->kfw40 = $kfw40;
        return $this;
    }

    public function getKfw60(): ?bool
    {
        return $this->kfw60;
    }

    public function setKfw60(?bool $kfw60): Energietyp
    {
        $this->kfw60 = $kfw60;
        return $this;
    }

    public function getKfw55(): ?bool
    {
        return $this->kfw55;
    }

    public function setKfw55(?bool $kfw55): Energietyp
    {
        $this->kfw55 = $kfw55;
        return $this;
    }

    public function getKfw70(): ?bool
    {
        return $this->kfw70;
    }

    public function setKfw70(?bool $kfw70): Energietyp
    {
        $this->kfw70 = $kfw70;
        return $this;
    }

    public function getMinergiebauweise(): ?bool
    {
        return $this->minergiebauweise;
    }

    public function setMinergiebauweise(?bool $minergiebauweise): Energietyp
    {
        $this->minergiebauweise = $minergiebauweise;
        return $this;
    }

    public function getMinergieZertifiziert(): ?bool
    {
        return $this->minergieZertifiziert;
    }

    public function setMinergieZertifiziert(?bool $minergieZertifiziert): Energietyp
    {
        $this->minergieZertifiziert = $minergieZertifiziert;
        return $this;
    }
}
