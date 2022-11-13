<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Distanzen
 * Welche Distanz zu dem ausgewÃ¤hlten Ziel besteht (Angabe in km),
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 * @XmlRoot("distanzen")
 */
class Distanzen
{
    public const DISTANZ_ZU_FLUGHAFEN = 'FLUGHAFEN';
    public const DISTANZ_ZU_FERNBAHNHOF = 'FERNBAHNHOF';
    public const DISTANZ_ZU_AUTOBAHN = 'AUTOBAHN';
    public const DISTANZ_ZU_US_BAHN = 'US_BAHN';
    public const DISTANZ_ZU_BUS = 'BUS';
    public const DISTANZ_ZU_KINDERGAERTEN = 'KINDERGAERTEN';
    public const DISTANZ_ZU_GRUNDSCHULE = 'GRUNDSCHULE';
    public const DISTANZ_ZU_HAUPTSCHULE = 'HAUPTSCHULE';
    public const DISTANZ_ZU_REALSCHULE = 'REALSCHULE';
    public const DISTANZ_ZU_GESAMTSCHULE = 'GESAMTSCHULE';
    public const DISTANZ_ZU_GYMNASIUM = 'GYMNASIUM';
    public const DISTANZ_ZU_ZENTRUM = 'ZENTRUM';
    public const DISTANZ_ZU_EINKAUFSMOEGLICHKEITEN = 'EINKAUFSMOEGLICHKEITEN';
    public const DISTANZ_ZU_GASTSTAETTEN = 'GASTSTAETTEN';

    /**
     * @Type("string")
     * @XmlAttribute
     * required
     * @see DISTANZ_ZU_* constants
     */
    public string $distanzZu = '';

    /**
     * @Inline
     * @Type("string")
     */
    public ?string $value = null;

    public function getDistanzZu(): string
    {
        return $this->distanzZu;
    }

    public function setDistanzZu(string $distanzZu): Distanzen
    {
        $this->distanzZu = $distanzZu;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): Distanzen
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $distanzZu = '', ?string $value = null)
    {
        $this->distanzZu = $distanzZu;
        $this->value = $value;
    }
}
