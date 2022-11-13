<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gastgewerbe
 * Objektart / Typ f. Gastgewerbe
 * @XmlRoot("gastgewerbe")
 */
class Gastgewerbe
{
    public const GASTGEW_TYP_GASTRONOMIE = 'GASTRONOMIE';
    public const GASTGEW_TYP_GASTRONOMIE_UND_WOHNUNG = 'GASTRONOMIE_UND_WOHNUNG';
    public const GASTGEW_TYP_PENSIONEN = 'PENSIONEN';
    public const GASTGEW_TYP_HOTELS = 'HOTELS';
    public const GASTGEW_TYP_WEITERE_BEHERBERGUNGSBETRIEBE = 'WEITERE_BEHERBERGUNGSBETRIEBE';
    public const GASTGEW_TYP_BAR = 'BAR';
    public const GASTGEW_TYP_CAFE = 'CAFE';
    public const GASTGEW_TYP_DISCOTHEK = 'DISCOTHEK';
    public const GASTGEW_TYP_RESTAURANT = 'RESTAURANT';
    public const GASTGEW_TYP_RAUCHERLOKAL = 'RAUCHERLOKAL';
    public const GASTGEW_TYP_EINRAUMLOKAL = 'EINRAUMLOKAL';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see GASTGEW_TYP_* constants
     */
    public string $gastgewTyp = '';

    public function getGastgewTyp(): ?string
    {
        return $this->gastgewTyp;
    }

    public function setGastgewTyp(?string $gastgewTyp): Gastgewerbe
    {
        $this->gastgewTyp = $gastgewTyp;
        return $this;
    }

    public function __construct(string $gastgewTyp = '')
    {
        $this->gastgewTyp = $gastgewTyp;
    }
}
