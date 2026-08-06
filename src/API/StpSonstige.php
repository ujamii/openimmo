<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpSonstige
 */
#[XmlRoot(name: 'stp_sonstige')]
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
     * optional
     * @see PLATZART_* constants
     */
    #[Type('string')]
    #[XmlAttribute]
    protected string $platzart = '';

    /** optional */
    #[Type('string')]
    #[XmlAttribute]
    protected ?string $bemerkung = null;

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
