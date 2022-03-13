<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MieteinnahmenIst
 * Mieteinnahmen pro Periode, Momentan-/Isteinnahmen (Ohne Periode = JAHR)
 * @XmlRoot("mieteinnahmen_ist")
 */
class MieteinnahmenIst
{
    public const PERIODE_TAG = 'TAG';
    public const PERIODE_WOCHE = 'WOCHE';
    public const PERIODE_MONAT = 'MONAT';
    public const PERIODE_JAHR = 'JAHR';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see PERIODE_* constants
     */
    protected string $periode = '';

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value = null;

    public function getPeriode(): ?string
    {
        return $this->periode;
    }

    public function setPeriode(?string $periode): MieteinnahmenIst
    {
        $this->periode = $periode;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): MieteinnahmenIst
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $periode = '', ?float $value = null)
    {
        $this->periode = $periode;
        $this->value = $value;
    }
}
