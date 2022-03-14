<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MaxMietdauer
 * Maximalzeitraum für den die Immobilie gemietet werdenkann, Optionen nicht kombinierbar, vorrangig bei WaZ
 * @XmlRoot("max_mietdauer")
 */
class MaxMietdauer
{
    public const MAX_DAUER_TAG = 'TAG';
    public const MAX_DAUER_WOCHE = 'WOCHE';
    public const MAX_DAUER_MONAT = 'MONAT';
    public const MAX_DAUER_JAHR = 'JAHR';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see MAX_DAUER_* constants
     */
    protected string $maxDauer = '';

    /**
     * @Inline
     * @Type("string")
     */
    protected ?string $value = null;

    public function getMaxDauer(): ?string
    {
        return $this->maxDauer;
    }

    public function setMaxDauer(?string $maxDauer): MaxMietdauer
    {
        $this->maxDauer = $maxDauer;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): MaxMietdauer
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $maxDauer = '', ?string $value = null)
    {
        $this->maxDauer = $maxDauer;
        $this->value = $value;
    }
}
