<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BreitbandZugang
 * Informationen Ã¼ber die BreitbandmÃ¶glichkeiten.
 * @XmlRoot("breitband_zugang")
 */
class BreitbandZugang
{
    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     */
    public ?string $art = null;

    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    public ?float $speed = null;

    public function getArt(): ?string
    {
        return $this->art;
    }

    public function setArt(?string $art): BreitbandZugang
    {
        $this->art = $art;
        return $this;
    }

    public function getSpeed(): ?float
    {
        return $this->speed;
    }

    public function setSpeed(?float $speed): BreitbandZugang
    {
        $this->speed = $speed;
        return $this;
    }

    public function __construct(?string $art = null, ?float $speed = null)
    {
        $this->art = $art;
        $this->speed = $speed;
    }
}
