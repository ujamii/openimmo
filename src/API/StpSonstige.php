<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpSonstige
 *
 * @XmlRoot("stp_sonstige")
 */
class StpSonstige
{
    public const PLATZART_FREIPLATZ = 'FREIPLATZ';
    public const PLATZART_GARAGE = 'GARAGE';
    public const PLATZART_TIEFGARAGE = 'TIEFGARAGE';
    public const PLATZART_CARPORT = 'CARPORT';
    public const PLATZART_DUPLEX = 'DUPLEX';
    public const PLATZART_PARKHAUS = 'PARKHAUS';
    public const PLATZART_SONSTIGES = 'SONSTIGES';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see PLATZART_* constants
     */
    public string $platzart = '';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     */
    public ?string $bemerkung = null;

    public function getPlatzart(): ?string
    {
        return $this->platzart;
    }

    public function setPlatzart(?string $platzart): StpSonstige
    {
        $this->platzart = $platzart;
        return $this;
    }

    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    public function setBemerkung(?string $bemerkung): StpSonstige
    {
        $this->bemerkung = $bemerkung;
        return $this;
    }

    public function __construct(string $platzart = '', ?string $bemerkung = null)
    {
        $this->platzart = $platzart;
        $this->bemerkung = $bemerkung;
    }
}
