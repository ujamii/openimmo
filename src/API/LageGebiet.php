<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageGebiet
 * Lage Gebiet, Optionen nicht kombinierbar
 * @XmlRoot("lage_gebiet")
 */
class LageGebiet
{
    public const GEBIETE_WOHN = 'WOHN';
    public const GEBIETE_GEWERBE = 'GEWERBE';
    public const GEBIETE_INDUSTRIE = 'INDUSTRIE';
    public const GEBIETE_MISCH = 'MISCH';
    public const GEBIETE_NEUBAU = 'NEUBAU';
    public const GEBIETE_ORTSLAGE = 'ORTSLAGE';
    public const GEBIETE_SIEDLUNG = 'SIEDLUNG';
    public const GEBIETE_STADTRAND = 'STADTRAND';
    public const GEBIETE_STADTTEIL = 'STADTTEIL';
    public const GEBIETE_STADTZENTRUM = 'STADTZENTRUM';
    public const GEBIETE_NEBENZENTRUM = 'NEBENZENTRUM';
    public const GEBIETE_1A = '1A';
    public const GEBIETE_1B = '1B';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see GEBIETE_* constants
     */
    public string $gebiete = '';

    public function getGebiete(): ?string
    {
        return $this->gebiete;
    }

    public function setGebiete(?string $gebiete): LageGebiet
    {
        $this->gebiete = $gebiete;
        return $this;
    }

    public function __construct(string $gebiete = '')
    {
        $this->gebiete = $gebiete;
    }
}
