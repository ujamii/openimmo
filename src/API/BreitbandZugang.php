<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BreitbandZugang
 * Informationen über die Breitbandmöglichkeiten.
 *
 * @XmlRoot("breitband_zugang")
 */
class BreitbandZugang
{
    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @var string
     */
    protected $art;

    /**
     * optional
     *
     * @Type("float")
     * @XmlAttribute
     * @var float
     */
    protected $speed;

    /**
     * @param string $art Shortcut setter for art
     * @param float $speed Shortcut setter for speed
     */
    public function __construct(string $art = null, float $speed = null)
    {
        $this->art = $art;
        $this->speed = $speed;
    }

    /**
     * @return string
     */
    public function getArt(): ?string
    {
        return $this->art;
    }

    /**
     * @return float
     */
    public function getSpeed(): ?float
    {
        return $this->speed;
    }

    /**
     * @param string $art Setter for art
     * @return BreitbandZugang
     */
    public function setArt(?string $art)
    {
        $this->art = $art;
        return $this;
    }

    /**
     * @param float $speed Setter for speed
     * @return BreitbandZugang
     */
    public function setSpeed(?float $speed)
    {
        $this->speed = $speed;
        return $this;
    }
}
