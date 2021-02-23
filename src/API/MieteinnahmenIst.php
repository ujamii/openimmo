<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MieteinnahmenIst
 * Mieteinnahmen pro Periode, Momentan-/Isteinnahmen (Ohne Periode = JAHR)
 *
 * @XmlRoot("mieteinnahmen_ist")
 */
class MieteinnahmenIst
{
    /**
     */
    public const PERIODE_JAHR = 'JAHR';

    /**
     */
    public const PERIODE_MONAT = 'MONAT';

    /**
     */
    public const PERIODE_TAG = 'TAG';

    /**
     */
    public const PERIODE_WOCHE = 'WOCHE';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see PERIODE_* constants
     * @var string
     */
    protected $periode;

    /**
     * @Inline
     * @Type("float")
     * @var float
     */
    protected $value;

    /**
     * @param string $periode Shortcut setter for periode
     * @param float $value Shortcut setter for value
     */
    public function __construct(string $periode = null, float $value = null)
    {
        $this->periode = $periode;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getPeriode(): ?string
    {
        return $this->periode;
    }

    /**
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param string $periode Setter for periode
     * @return MieteinnahmenIst
     */
    public function setPeriode(?string $periode)
    {
        $this->periode = $periode;
        return $this;
    }

    /**
     * @param float $value Setter for value
     * @return MieteinnahmenIst
     */
    public function setValue(?float $value)
    {
        $this->value = $value;
        return $this;
    }
}
