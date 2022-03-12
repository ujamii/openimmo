<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LandUndForstwirtschaft
 * Objektart / Typ f. Land-/Forstwirtschaft
 *
 * @XmlRoot("land_und_forstwirtschaft")
 */
class LandUndForstwirtschaft
{
    /**
     */
    public const LAND_TYP_ACKERBAU = 'ACKERBAU';

    /**
     */
    public const LAND_TYP_ANWESEN = 'ANWESEN';

    /**
     */
    public const LAND_TYP_AUSSIEDLERHOF = 'AUSSIEDLERHOF';

    /**
     */
    public const LAND_TYP_BAUERNHOF = 'BAUERNHOF';

    /**
     */
    public const LAND_TYP_GARTENBAU = 'GARTENBAU';

    /**
     */
    public const LAND_TYP_JAGD_UND_FORSTWIRTSCHAFT = 'JAGD_UND_FORSTWIRTSCHAFT';

    /**
     */
    public const LAND_TYP_JAGDREVIER = 'JAGDREVIER';

    /**
     */
    public const LAND_TYP_LANDWIRTSCHAFTLICHE_BETRIEBE = 'LANDWIRTSCHAFTLICHE_BETRIEBE';

    /**
     */
    public const LAND_TYP_REITERHOEFE = 'REITERHOEFE';

    /**
     */
    public const LAND_TYP_SCHEUNEN = 'SCHEUNEN';

    /**
     */
    public const LAND_TYP_SONSTIGE_LANDWIRTSCHAFTSIMMOBILIEN = 'SONSTIGE_LANDWIRTSCHAFTSIMMOBILIEN';

    /**
     */
    public const LAND_TYP_TEICH_UND_FISCHWIRTSCHAFT = 'TEICH_UND_FISCHWIRTSCHAFT';

    /**
     */
    public const LAND_TYP_VIEHWIRTSCHAFT = 'VIEHWIRTSCHAFT';

    /**
     */
    public const LAND_TYP_WEINBAU = 'WEINBAU';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see LAND_TYP_* constants
     * @var string
     */
    protected $landTyp;

    /**
     * @param string $landTyp Shortcut setter for landTyp
     */
    public function __construct(string $landTyp = null)
    {
        $this->landTyp = $landTyp;
    }

    /**
     * @return string
     */
    public function getLandTyp(): ?string
    {
        return $this->landTyp;
    }

    /**
     * @param string $landTyp Setter for landTyp
     * @return LandUndForstwirtschaft
     */
    public function setLandTyp(?string $landTyp)
    {
        $this->landTyp = $landTyp;
        return $this;
    }
}
