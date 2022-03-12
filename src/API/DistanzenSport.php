<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class DistanzenSport
 * Welche Distanz zu dem ausgewählen Sport-/Freizeitziel besteht(Angabe in km),
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 *
 * @XmlRoot("distanzen_sport")
 */
class DistanzenSport
{
    /**
     */
    public const DISTANZ_ZU_SPORT_MEER = 'MEER';

    /**
     */
    public const DISTANZ_ZU_SPORT_NAHERHOLUNG = 'NAHERHOLUNG';

    /**
     */
    public const DISTANZ_ZU_SPORT_SEE = 'SEE';

    /**
     */
    public const DISTANZ_ZU_SPORT_SKIGEBIET = 'SKIGEBIET';

    /**
     */
    public const DISTANZ_ZU_SPORT_SPORTANLAGEN = 'SPORTANLAGEN';

    /**
     */
    public const DISTANZ_ZU_SPORT_STRAND = 'STRAND';

    /**
     */
    public const DISTANZ_ZU_SPORT_WANDERGEBIETE = 'WANDERGEBIETE';

    /**
     * required
     *
     * @Type("string")
     * @XmlAttribute
     * @see DISTANZ_ZU_SPORT_* constants
     * @var string
     */
    protected $distanzZuSport;

    /**
     * @Inline
     * @Type("float")
     * @var float
     */
    protected $value;

    /**
     * @param string $distanzZuSport Shortcut setter for distanzZuSport
     * @param float $value Shortcut setter for value
     */
    public function __construct(string $distanzZuSport = null, float $value = null)
    {
        $this->distanzZuSport = $distanzZuSport;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getDistanzZuSport(): string
    {
        return $this->distanzZuSport;
    }

    /**
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param string $distanzZuSport Setter for distanzZuSport
     * @return DistanzenSport
     */
    public function setDistanzZuSport(string $distanzZuSport)
    {
        $this->distanzZuSport = $distanzZuSport;
        return $this;
    }

    /**
     * @param float $value Setter for value
     * @return DistanzenSport
     */
    public function setValue(?float $value)
    {
        $this->value = $value;
        return $this;
    }
}
