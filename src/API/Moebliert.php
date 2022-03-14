<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Moebliert
 * Wie ist die Möblierung: Voll, Teil oder keine Aussage
 * @XmlRoot("moebliert")
 */
class Moebliert
{
    public const MOEB_VOLL = 'VOLL';
    public const MOEB_TEIL = 'TEIL';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see MOEB_* constants
     */
    protected string $moeb = '';

    public function getMoeb(): ?string
    {
        return $this->moeb;
    }

    public function setMoeb(?string $moeb): Moebliert
    {
        $this->moeb = $moeb;
        return $this;
    }

    public function __construct(string $moeb = '')
    {
        $this->moeb = $moeb;
    }
}
