<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MaxMietdauer
 * Maximalzeitraum für den die Immobilie gemietet werdenkann, Optionen nicht kombinierbar, vorrangig bei WaZ
 *
 * @XmlRoot("max_mietdauer")
 */
class MaxMietdauer
{
    /**
     */
    public const MAX_DAUER_JAHR = 'JAHR';

    /**
     */
    public const MAX_DAUER_MONAT = 'MONAT';

    /**
     */
    public const MAX_DAUER_TAG = 'TAG';

    /**
     */
    public const MAX_DAUER_WOCHE = 'WOCHE';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see MAX_DAUER_* constants
     * @var string
     */
    protected $maxDauer;

    /**
     * @Inline
     * @Type("string")
     * @var string
     */
    protected $value;

    /**
     * @param string $maxDauer Shortcut setter for maxDauer
     * @param string $value Shortcut setter for value
     */
    public function __construct(string $maxDauer = null, string $value = null)
    {
        $this->maxDauer = $maxDauer;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getMaxDauer(): ?string
    {
        return $this->maxDauer;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $maxDauer Setter for maxDauer
     * @return MaxMietdauer
     */
    public function setMaxDauer(?string $maxDauer)
    {
        $this->maxDauer = $maxDauer;
        return $this;
    }

    /**
     * @param string $value Setter for value
     * @return MaxMietdauer
     */
    public function setValue(?string $value)
    {
        $this->value = $value;
        return $this;
    }
}
