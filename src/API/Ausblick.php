<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausblick
 * Welcher Ausblick ist vorhanden, Optionen nicht kombinierbar
 * @XmlRoot("ausblick")
 */
class Ausblick
{
    public const BLICK_FERNE = 'FERNE';
    public const BLICK_SEE = 'SEE';
    public const BLICK_BERGE = 'BERGE';
    public const BLICK_MEER = 'MEER';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see BLICK_* constants
     */
    protected string $blick = '';

    public function getBlick(): ?string
    {
        return $this->blick;
    }

    public function setBlick(?string $blick): Ausblick
    {
        $this->blick = $blick;
        return $this;
    }

    public function __construct(string $blick = '')
    {
        $this->blick = $blick;
    }
}
