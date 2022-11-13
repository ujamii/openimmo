<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AusrichtBalkonTerrasse
 * Ausrichtung der Balkone bzw. der Terrassen, Optionen kombinierbar
 * @XmlRoot("ausricht_balkon_terrasse")
 */
class AusrichtBalkonTerrasse
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("NORD")
     * optional
     */
    public ?bool $nord = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("OST")
     * optional
     */
    public ?bool $ost = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SUED")
     * optional
     */
    public ?bool $sued = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("WEST")
     * optional
     */
    public ?bool $west = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("NORDOST")
     * optional
     */
    public ?bool $nordost = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("NORDWEST")
     * optional
     */
    public ?bool $nordwest = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SUEDOST")
     * optional
     */
    public ?bool $suedost = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SUEDWEST")
     * optional
     */
    public ?bool $suedwest = null;

    public function getNord(): ?bool
    {
        return $this->nord;
    }

    public function setNord(?bool $nord): AusrichtBalkonTerrasse
    {
        $this->nord = $nord;
        return $this;
    }

    public function getOst(): ?bool
    {
        return $this->ost;
    }

    public function setOst(?bool $ost): AusrichtBalkonTerrasse
    {
        $this->ost = $ost;
        return $this;
    }

    public function getSued(): ?bool
    {
        return $this->sued;
    }

    public function setSued(?bool $sued): AusrichtBalkonTerrasse
    {
        $this->sued = $sued;
        return $this;
    }

    public function getWest(): ?bool
    {
        return $this->west;
    }

    public function setWest(?bool $west): AusrichtBalkonTerrasse
    {
        $this->west = $west;
        return $this;
    }

    public function getNordost(): ?bool
    {
        return $this->nordost;
    }

    public function setNordost(?bool $nordost): AusrichtBalkonTerrasse
    {
        $this->nordost = $nordost;
        return $this;
    }

    public function getNordwest(): ?bool
    {
        return $this->nordwest;
    }

    public function setNordwest(?bool $nordwest): AusrichtBalkonTerrasse
    {
        $this->nordwest = $nordwest;
        return $this;
    }

    public function getSuedost(): ?bool
    {
        return $this->suedost;
    }

    public function setSuedost(?bool $suedost): AusrichtBalkonTerrasse
    {
        $this->suedost = $suedost;
        return $this;
    }

    public function getSuedwest(): ?bool
    {
        return $this->suedwest;
    }

    public function setSuedwest(?bool $suedwest): AusrichtBalkonTerrasse
    {
        $this->suedwest = $suedwest;
        return $this;
    }
}
