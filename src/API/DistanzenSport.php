<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class DistanzenSport
 * Welche Distanz zu dem ausgewÃ¤hlen Sport-/Freizeitziel besteht(Angabe in km),
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 * @XmlRoot("distanzen_sport")
 */
class DistanzenSport
{
    public const DISTANZ_ZU_SPORT_STRAND = 'STRAND';
    public const DISTANZ_ZU_SPORT_SEE = 'SEE';
    public const DISTANZ_ZU_SPORT_MEER = 'MEER';
    public const DISTANZ_ZU_SPORT_SKIGEBIET = 'SKIGEBIET';
    public const DISTANZ_ZU_SPORT_SPORTANLAGEN = 'SPORTANLAGEN';
    public const DISTANZ_ZU_SPORT_WANDERGEBIETE = 'WANDERGEBIETE';
    public const DISTANZ_ZU_SPORT_NAHERHOLUNG = 'NAHERHOLUNG';

    /**
     * @Type("string")
     * @XmlAttribute
     * required
     * @see DISTANZ_ZU_SPORT_* constants
     */
    public string $distanzZuSport = '';

    /**
     * @Inline
     * @Type("float")
     */
    public ?float $value = null;

    public function getDistanzZuSport(): string
    {
        return $this->distanzZuSport;
    }

    public function setDistanzZuSport(string $distanzZuSport): DistanzenSport
    {
        $this->distanzZuSport = $distanzZuSport;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): DistanzenSport
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $distanzZuSport = '', ?float $value = null)
    {
        $this->distanzZuSport = $distanzZuSport;
        $this->value = $value;
    }
}
