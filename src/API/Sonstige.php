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
 * Aus kompatibilitÃ¤tegrÃ¼nden bleiben die Attribute NOCH! erhalten.
 * In nachfolgenden Versionen wird die UnterstÃ¼tzung an dieser Stelle eingestellt.
 * @XmlRoot("sonstige")
 */
class Sonstige
{
    public const SONSTIGE_TYP_PARKHAUS = 'PARKHAUS';
    public const SONSTIGE_TYP_TANKSTELLE = 'TANKSTELLE';
    public const SONSTIGE_TYP_KRANKENHAUS = 'KRANKENHAUS';
    public const SONSTIGE_TYP_SONSTIGE = 'SONSTIGE';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see SONSTIGE_TYP_* constants
     */
    public string $sonstigeTyp = '';

    public function getSonstigeTyp(): ?string
    {
        return $this->sonstigeTyp;
    }

    public function setSonstigeTyp(?string $sonstigeTyp): Sonstige
    {
        $this->sonstigeTyp = $sonstigeTyp;
        return $this;
    }

    public function __construct(string $sonstigeTyp = '')
    {
        $this->sonstigeTyp = $sonstigeTyp;
    }
}
