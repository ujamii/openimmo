<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausblick
 * Welcher Ausblick ist vorhanden, Optionen nicht kombinierbar
 *
 * @XmlRoot("ausblick")
 */
class Ausblick
{
    /**
     */
    public const BLICK_BERGE = 'BERGE';

    /**
     */
    public const BLICK_FERNE = 'FERNE';

    /**
     */
    public const BLICK_MEER = 'MEER';

    /**
     */
    public const BLICK_SEE = 'SEE';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see BLICK_* constants
     * @var string
     */
    protected $blick;

    /**
     * @param string $blick Shortcut setter for blick
     */
    public function __construct(string $blick = null)
    {
        $this->blick = $blick;
    }

    /**
     * @return string
     */
    public function getBlick(): ?string
    {
        return $this->blick;
    }

    /**
     * @param string $blick Setter for blick
     * @return Ausblick
     */
    public function setBlick(?string $blick)
    {
        $this->blick = $blick;
        return $this;
    }
}
