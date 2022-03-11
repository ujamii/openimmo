<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BueroPraxen
 * Objektart / Typ f. Büro/Praxen
 * @XmlRoot("buero_praxen")
 */
class BueroPraxen
{
    public const BUERO_TYP_BUEROFLAECHE = 'BUEROFLAECHE';
    public const BUERO_TYP_BUEROHAUS = 'BUEROHAUS';
    public const BUERO_TYP_BUEROZENTRUM = 'BUEROZENTRUM';
    public const BUERO_TYP_LOFT_ATELIER = 'LOFT_ATELIER';
    public const BUERO_TYP_PRAXIS = 'PRAXIS';
    public const BUERO_TYP_PRAXISFLAECHE = 'PRAXISFLAECHE';
    public const BUERO_TYP_PRAXISHAUS = 'PRAXISHAUS';
    public const BUERO_TYP_AUSSTELLUNGSFLAECHE = 'AUSSTELLUNGSFLAECHE';
    public const BUERO_TYP_COWORKING = 'COWORKING';
    public const BUERO_TYP_SHARED_OFFICE = 'SHARED_OFFICE';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see BUERO_TYP_* constants
     */
    protected ?string $bueroTyp;

    public function getBueroTyp(): ?string
    {
        return $this->bueroTyp;
    }

    public function setBueroTyp(?string $bueroTyp): BueroPraxen
    {
        $this->bueroTyp = $bueroTyp;
        return $this;
    }

    public function __construct(string $bueroTyp = null)
    {
        $this->bueroTyp = $bueroTyp;
    }
}
