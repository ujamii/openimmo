<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Wohnung
 * Objektart / Typ f. Wohnungen
 * @XmlRoot("wohnung")
 */
class Wohnung
{
    public const WOHNUNGTYP_DACHGESCHOSS = 'DACHGESCHOSS';
    public const WOHNUNGTYP_MAISONETTE = 'MAISONETTE';
    public const WOHNUNGTYP_LOFT_STUDIO_ATELIER = 'LOFT-STUDIO-ATELIER';
    public const WOHNUNGTYP_PENTHOUSE = 'PENTHOUSE';
    public const WOHNUNGTYP_TERRASSEN = 'TERRASSEN';
    public const WOHNUNGTYP_ETAGE = 'ETAGE';
    public const WOHNUNGTYP_ERDGESCHOSS = 'ERDGESCHOSS';
    public const WOHNUNGTYP_SOUTERRAIN = 'SOUTERRAIN';
    public const WOHNUNGTYP_APARTMENT = 'APARTMENT';
    public const WOHNUNGTYP_FERIENWOHNUNG = 'FERIENWOHNUNG';
    public const WOHNUNGTYP_GALERIE = 'GALERIE';
    public const WOHNUNGTYP_ROHDACHBODEN = 'ROHDACHBODEN';
    public const WOHNUNGTYP_ATTIKAWOHNUNG = 'ATTIKAWOHNUNG';
    public const WOHNUNGTYP_KEINE_ANGABE = 'KEINE_ANGABE';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see WOHNUNGTYP_* constants
     */
    public string $wohnungtyp = '';

    public function getWohnungtyp(): ?string
    {
        return $this->wohnungtyp;
    }

    public function setWohnungtyp(?string $wohnungtyp): Wohnung
    {
        $this->wohnungtyp = $wohnungtyp;
        return $this;
    }

    public function __construct(string $wohnungtyp = '')
    {
        $this->wohnungtyp = $wohnungtyp;
    }
}
