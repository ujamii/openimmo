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
    /**
     */
    public const PLATZART_CARPORT = 'CARPORT';

    /**
     */
    public const PLATZART_DUPLEX = 'DUPLEX';

    /**
     */
    public const PLATZART_FREIPLATZ = 'FREIPLATZ';

    /**
     */
    public const PLATZART_GARAGE = 'GARAGE';

    /**
     */
    public const PLATZART_PARKHAUS = 'PARKHAUS';

    /**
     */
    public const PLATZART_SONSTIGES = 'SONSTIGES';

    /**
     */
    public const PLATZART_TIEFGARAGE = 'TIEFGARAGE';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @var string
     */
    protected $bemerkung;

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see PLATZART_* constants
     * @var string
     */
    protected $platzart;

    /**
     * @param string $platzart Shortcut setter for platzart
     * @param string $bemerkung Shortcut setter for bemerkung
     */
    public function __construct(string $platzart = null, string $bemerkung = null)
    {
        $this->platzart = $platzart;
        $this->bemerkung = $bemerkung;
    }

    /**
     * @return string
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    /**
     * @return string
     */
    public function getPlatzart(): ?string
    {
        return $this->platzart;
    }

    /**
     * @param string $bemerkung Setter for bemerkung
     * @return StpSonstige
     */
    public function setBemerkung(?string $bemerkung)
    {
        $this->bemerkung = $bemerkung;
        return $this;
    }

    /**
     * @param string $platzart Setter for platzart
     * @return StpSonstige
     */
    public function setPlatzart(?string $platzart)
    {
        $this->platzart = $platzart;
        return $this;
    }
}
