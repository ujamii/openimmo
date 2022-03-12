<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Grundstueck
 * Objektart / Typ f. Grundstücke
 *
 * @XmlRoot("grundstueck")
 */
class Grundstueck
{
    /**
     */
    public const GRUNDST_TYP_FREIZEIT = 'FREIZEIT';

    /**
     */
    public const GRUNDST_TYP_GEMISCHT = 'GEMISCHT';

    /**
     */
    public const GRUNDST_TYP_GEWERBE = 'GEWERBE';

    /**
     */
    public const GRUNDST_TYP_GEWERBEPARK = 'GEWERBEPARK';

    /**
     */
    public const GRUNDST_TYP_INDUSTRIE = 'INDUSTRIE';

    /**
     */
    public const GRUNDST_TYP_LAND_FORSTWIRSCHAFT = 'LAND_FORSTWIRSCHAFT';

    /**
     */
    public const GRUNDST_TYP_SEELIEGENSCHAFT = 'SEELIEGENSCHAFT';

    /**
     */
    public const GRUNDST_TYP_SONDERNUTZUNG = 'SONDERNUTZUNG';

    /**
     */
    public const GRUNDST_TYP_WOHNEN = 'WOHNEN';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see GRUNDST_TYP_* constants
     * @var string
     */
    protected $grundstTyp;

    /**
     * @param string $grundstTyp Shortcut setter for grundstTyp
     */
    public function __construct(string $grundstTyp = null)
    {
        $this->grundstTyp = $grundstTyp;
    }

    /**
     * @return string
     */
    public function getGrundstTyp(): ?string
    {
        return $this->grundstTyp;
    }

    /**
     * @param string $grundstTyp Setter for grundstTyp
     * @return Grundstueck
     */
    public function setGrundstTyp(?string $grundstTyp)
    {
        $this->grundstTyp = $grundstTyp;
        return $this;
    }
}
