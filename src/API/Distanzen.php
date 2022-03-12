<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Distanzen
 * Welche Distanz zu dem ausgewählten Ziel besteht (Angabe in km),
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 *
 * @XmlRoot("distanzen")
 */
class Distanzen
{
    /**
     */
    public const DISTANZ_ZU_AUTOBAHN = 'AUTOBAHN';

    /**
     */
    public const DISTANZ_ZU_BUS = 'BUS';

    /**
     */
    public const DISTANZ_ZU_EINKAUFSMOEGLICHKEITEN = 'EINKAUFSMOEGLICHKEITEN';

    /**
     */
    public const DISTANZ_ZU_FERNBAHNHOF = 'FERNBAHNHOF';

    /**
     */
    public const DISTANZ_ZU_FLUGHAFEN = 'FLUGHAFEN';

    /**
     */
    public const DISTANZ_ZU_GASTSTAETTEN = 'GASTSTAETTEN';

    /**
     */
    public const DISTANZ_ZU_GESAMTSCHULE = 'GESAMTSCHULE';

    /**
     */
    public const DISTANZ_ZU_GRUNDSCHULE = 'GRUNDSCHULE';

    /**
     */
    public const DISTANZ_ZU_GYMNASIUM = 'GYMNASIUM';

    /**
     */
    public const DISTANZ_ZU_HAUPTSCHULE = 'HAUPTSCHULE';

    /**
     */
    public const DISTANZ_ZU_KINDERGAERTEN = 'KINDERGAERTEN';

    /**
     */
    public const DISTANZ_ZU_REALSCHULE = 'REALSCHULE';

    /**
     */
    public const DISTANZ_ZU_US_BAHN = 'US_BAHN';

    /**
     */
    public const DISTANZ_ZU_ZENTRUM = 'ZENTRUM';

    /**
     * required
     *
     * @Type("string")
     * @XmlAttribute
     * @see DISTANZ_ZU_* constants
     * @var string
     */
    protected $distanzZu;

    /**
     * @Inline
     * @Type("string")
     * @var string
     */
    protected $value;

    /**
     * @param string $distanzZu Shortcut setter for distanzZu
     * @param string $value Shortcut setter for value
     */
    public function __construct(string $distanzZu = null, string $value = null)
    {
        $this->distanzZu = $distanzZu;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getDistanzZu(): string
    {
        return $this->distanzZu;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $distanzZu Setter for distanzZu
     * @return Distanzen
     */
    public function setDistanzZu(string $distanzZu)
    {
        $this->distanzZu = $distanzZu;
        return $this;
    }

    /**
     * @param string $value Setter for value
     * @return Distanzen
     */
    public function setValue(?string $value)
    {
        $this->value = $value;
        return $this;
    }
}
