<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geschlecht
 * Soll das Objekt nur an Frauen bzw. nur an Männer vermietet werden,
 *  fehlende Angabe wird als 'Ja' interpretiert
 * @XmlRoot("geschlecht")
 */
class Geschlecht
{
    public const GESCHL_ATTR_EGAL = 'EGAL';
    public const GESCHL_ATTR_NUR_MANN = 'NUR_MANN';
    public const GESCHL_ATTR_NUR_FRAU = 'NUR_FRAU';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see GESCHL_ATTR_* constants
     */
    protected string $geschlAttr = '';

    public function getGeschlAttr(): ?string
    {
        return $this->geschlAttr;
    }

    public function setGeschlAttr(?string $geschlAttr): Geschlecht
    {
        $this->geschlAttr = $geschlAttr;
        return $this;
    }

    public function __construct(string $geschlAttr = '')
    {
        $this->geschlAttr = $geschlAttr;
    }
}
