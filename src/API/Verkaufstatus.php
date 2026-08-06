<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Verkaufstatus
 * Anzeige ob z.B schon verkauft, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'verkaufstatus')]
class Verkaufstatus
{
    public const STAND_OFFEN = 'OFFEN';
    public const STAND_RESERVIERT = 'RESERVIERT';
    public const STAND_VERKAUFT = 'VERKAUFT';

    /**
     * optional
     * @see STAND_* constants
     */
    #[Type('string')]
    #[XmlAttribute]
    protected string $stand = '';

    public function getStand(): ?string
    {
        return $this->stand;
    }

    public function setStand(?string $stand): Verkaufstatus
    {
        $this->stand = $stand;
        return $this;
    }

    public function __construct(string $stand = '')
    {
        $this->stand = $stand;
    }
}
