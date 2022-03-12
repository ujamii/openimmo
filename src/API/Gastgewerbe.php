<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gastgewerbe
 * Objektart / Typ f. Gastgewerbe
 *
 * @XmlRoot("gastgewerbe")
 */
class Gastgewerbe
{
    /**
     */
    public const GASTGEW_TYP_BAR = 'BAR';

    /**
     */
    public const GASTGEW_TYP_CAFE = 'CAFE';

    /**
     */
    public const GASTGEW_TYP_DISCOTHEK = 'DISCOTHEK';

    /**
     */
    public const GASTGEW_TYP_EINRAUMLOKAL = 'EINRAUMLOKAL';

    /**
     */
    public const GASTGEW_TYP_GASTRONOMIE = 'GASTRONOMIE';

    /**
     */
    public const GASTGEW_TYP_GASTRONOMIE_UND_WOHNUNG = 'GASTRONOMIE_UND_WOHNUNG';

    /**
     */
    public const GASTGEW_TYP_HOTELS = 'HOTELS';

    /**
     */
    public const GASTGEW_TYP_PENSIONEN = 'PENSIONEN';

    /**
     */
    public const GASTGEW_TYP_RAUCHERLOKAL = 'RAUCHERLOKAL';

    /**
     */
    public const GASTGEW_TYP_RESTAURANT = 'RESTAURANT';

    /**
     */
    public const GASTGEW_TYP_WEITERE_BEHERBERGUNGSBETRIEBE = 'WEITERE_BEHERBERGUNGSBETRIEBE';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see GASTGEW_TYP_* constants
     * @var string
     */
    protected $gastgewTyp;

    /**
     * @param string $gastgewTyp Shortcut setter for gastgewTyp
     */
    public function __construct(string $gastgewTyp = null)
    {
        $this->gastgewTyp = $gastgewTyp;
    }

    /**
     * @return string
     */
    public function getGastgewTyp(): ?string
    {
        return $this->gastgewTyp;
    }

    /**
     * @param string $gastgewTyp Setter for gastgewTyp
     * @return Gastgewerbe
     */
    public function setGastgewTyp(?string $gastgewTyp)
    {
        $this->gastgewTyp = $gastgewTyp;
        return $this;
    }
}
