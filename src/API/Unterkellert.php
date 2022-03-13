<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Unterkellert
 * Ist das Objekt unterkellert? Optionen nicht kombinierbar
 * @XmlRoot("unterkellert")
 */
class Unterkellert
{
    public const KELLER_JA = 'JA';
    public const KELLER_NEIN = 'NEIN';
    public const KELLER_TEIL = 'TEIL';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see KELLER_* constants
     */
    protected string $keller = '';

    public function getKeller(): ?string
    {
        return $this->keller;
    }

    public function setKeller(?string $keller): Unterkellert
    {
        $this->keller = $keller;
        return $this;
    }

    public function __construct(string $keller = '')
    {
        $this->keller = $keller;
    }
}
