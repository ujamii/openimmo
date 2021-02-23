<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Verkaufstatus
 * Anzeige ob z.B schon verkauft, Optionen nicht kombinierbar
 *
 * @XmlRoot("verkaufstatus")
 */
class Verkaufstatus
{
    /**
     */
    public const STAND_OFFEN = 'OFFEN';

    /**
     */
    public const STAND_RESERVIERT = 'RESERVIERT';

    /**
     */
    public const STAND_VERKAUFT = 'VERKAUFT';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see STAND_* constants
     * @var string
     */
    protected $stand;

    /**
     * @param string $stand Shortcut setter for stand
     */
    public function __construct(string $stand = null)
    {
        $this->stand = $stand;
    }

    /**
     * @return string
     */
    public function getStand(): ?string
    {
        return $this->stand;
    }

    /**
     * @param string $stand Setter for stand
     * @return Verkaufstatus
     */
    public function setStand(?string $stand)
    {
        $this->stand = $stand;
        return $this;
    }
}
