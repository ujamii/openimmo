<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Fahrstuhl
 * Welche Art von Fahrstuhl, Aufzug, Lift - Mehrfachnennung möglich
 * @XmlRoot("fahrstuhl")
 */
class Fahrstuhl
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PERSONEN")
     * optional
     */
    protected ?bool $personen = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("LASTEN")
     * optional
     */
    protected ?bool $lasten = null;

    public function getPersonen(): ?bool
    {
        return $this->personen;
    }

    public function setPersonen(?bool $personen): Fahrstuhl
    {
        $this->personen = $personen;
        return $this;
    }

    public function getLasten(): ?bool
    {
        return $this->lasten;
    }

    public function setLasten(?bool $lasten): Fahrstuhl
    {
        $this->lasten = $lasten;
        return $this;
    }

    public function __construct(?bool $personen = null, ?bool $lasten = null)
    {
        $this->personen = $personen;
        $this->lasten = $lasten;
    }
}
