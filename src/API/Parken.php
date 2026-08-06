<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Parken
 * Objektart für diverse Parkplatz Angaben
 */
#[XmlRoot(name: 'parken')]
class Parken
{
    public const PARKEN_TYP_STELLPLATZ = 'STELLPLATZ';
    public const PARKEN_TYP_CARPORT = 'CARPORT';
    public const PARKEN_TYP_DOPPELGARAGE = 'DOPPELGARAGE';
    public const PARKEN_TYP_DUPLEX = 'DUPLEX';
    public const PARKEN_TYP_TIEFGARAGE = 'TIEFGARAGE';
    public const PARKEN_TYP_BOOTSLIEGEPLATZ = 'BOOTSLIEGEPLATZ';
    public const PARKEN_TYP_EINZELGARAGE = 'EINZELGARAGE';
    public const PARKEN_TYP_PARKHAUS = 'PARKHAUS';
    public const PARKEN_TYP_TIEFGARAGENSTELLPLATZ = 'TIEFGARAGENSTELLPLATZ';
    public const PARKEN_TYP_PARKPLATZ_STROM = 'PARKPLATZ_STROM';

    /**
     * optional
     * @see PARKEN_TYP_* constants
     */
    #[Type('string')]
    #[XmlAttribute]
    protected string $parkenTyp = '';

    public function getParkenTyp(): ?string
    {
        return $this->parkenTyp;
    }

    public function setParkenTyp(?string $parkenTyp): Parken
    {
        $this->parkenTyp = $parkenTyp;
        return $this;
    }

    public function __construct(string $parkenTyp = '')
    {
        $this->parkenTyp = $parkenTyp;
    }
}
