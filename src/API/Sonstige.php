<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstige
 * Objektart / Typ f. Sonstiges
 * Bitte ab Version 1.2.3 die Attribute GARAGEN, PARKFLACHE nicht mehr verwenden.
 * Objekte befinden sich jetzt unter Element parken.
 * Aus kompatibilitätegründen bleiben die Attribute NOCH! erhalten.
 * In nachfolgenden Versionen wird die Unterstützung an dieser Stelle eingestellt.
 *
 * @XmlRoot("sonstige")
 */
class Sonstige
{
    /**
     */
    public const SONSTIGE_TYP_KRANKENHAUS = 'KRANKENHAUS';

    /**
     */
    public const SONSTIGE_TYP_PARKHAUS = 'PARKHAUS';

    /**
     */
    public const SONSTIGE_TYP_SONSTIGE = 'SONSTIGE';

    /**
     */
    public const SONSTIGE_TYP_TANKSTELLE = 'TANKSTELLE';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see SONSTIGE_TYP_* constants
     * @var string
     */
    protected $sonstigeTyp;

    /**
     * @param string $sonstigeTyp Shortcut setter for sonstigeTyp
     */
    public function __construct(string $sonstigeTyp = null)
    {
        $this->sonstigeTyp = $sonstigeTyp;
    }

    /**
     * @return string
     */
    public function getSonstigeTyp(): ?string
    {
        return $this->sonstigeTyp;
    }

    /**
     * @param string $sonstigeTyp Setter for sonstigeTyp
     * @return Sonstige
     */
    public function setSonstigeTyp(?string $sonstigeTyp)
    {
        $this->sonstigeTyp = $sonstigeTyp;
        return $this;
    }
}
