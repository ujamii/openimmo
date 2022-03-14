<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Grundstueck
 * Objektart / Typ f. Grundstücke
 * @XmlRoot("grundstueck")
 */
class Grundstueck
{
    public const GRUNDST_TYP_WOHNEN = 'WOHNEN';
    public const GRUNDST_TYP_GEWERBE = 'GEWERBE';
    public const GRUNDST_TYP_INDUSTRIE = 'INDUSTRIE';
    public const GRUNDST_TYP_LAND_FORSTWIRSCHAFT = 'LAND_FORSTWIRSCHAFT';
    public const GRUNDST_TYP_FREIZEIT = 'FREIZEIT';
    public const GRUNDST_TYP_GEMISCHT = 'GEMISCHT';
    public const GRUNDST_TYP_GEWERBEPARK = 'GEWERBEPARK';
    public const GRUNDST_TYP_SONDERNUTZUNG = 'SONDERNUTZUNG';
    public const GRUNDST_TYP_SEELIEGENSCHAFT = 'SEELIEGENSCHAFT';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see GRUNDST_TYP_* constants
     */
    protected string $grundstTyp = '';

    public function getGrundstTyp(): ?string
    {
        return $this->grundstTyp;
    }

    public function setGrundstTyp(?string $grundstTyp): Grundstueck
    {
        $this->grundstTyp = $grundstTyp;
        return $this;
    }

    public function __construct(string $grundstTyp = '')
    {
        $this->grundstTyp = $grundstTyp;
    }
}
