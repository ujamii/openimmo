<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BreitbandZugang
 * Informationen über die Breitbandmöglichkeiten.
 */
#[XmlRoot(name: 'breitband_zugang')]
class BreitbandZugang
{
    /** optional */
    #[Type('string')]
    #[XmlAttribute]
    protected ?string $art = null;

    /** optional */
    #[Type('float')]
    #[XmlAttribute]
    protected ?float $speed = null;

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
