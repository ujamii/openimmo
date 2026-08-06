<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MinMietdauer
 * Mindestzeitraum für den die Immobilie gemietet werden muss, Optionen nicht kombinierbar, vorrangig bei WaZ
 */
#[XmlRoot(name: 'min_mietdauer')]
class MinMietdauer
{
    public const MIN_DAUER_TAG = 'TAG';
    public const MIN_DAUER_WOCHE = 'WOCHE';
    public const MIN_DAUER_MONAT = 'MONAT';
    public const MIN_DAUER_JAHR = 'JAHR';

    /**
     * optional
     * @see MIN_DAUER_* constants
     */
    #[Type('string')]
    #[XmlAttribute]
    protected string $minDauer = '';

    #[Inline]
    #[Type('string')]
    protected ?string $value = null;

    public function getMinDauer(): ?string
    {
        return $this->minDauer;
    }

    public function setMinDauer(?string $minDauer): MinMietdauer
    {
        $this->minDauer = $minDauer;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): MinMietdauer
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $minDauer = '', ?string $value = null)
    {
        $this->minDauer = $minDauer;
        $this->value = $value;
    }
}
