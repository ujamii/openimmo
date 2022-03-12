<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpParkhaus
 *
 * @XmlRoot("stp_parkhaus")
 */
class StpParkhaus
{
    /**
     * optional
     *
     * @Type("int")
     * @XmlAttribute
     * @var int Minimum value (inclusive): -2147483648, Maximum value (inclusive): 2147483647
     */
    protected $anzahl;

    /**
     * optional
     *
     * @Type("float")
     * @XmlAttribute
     * @var float
     */
    protected $stellplatzkaufpreis;

    /**
     * optional
     *
     * @Type("float")
     * @XmlAttribute
     * @var float
     */
    protected $stellplatzmiete;

    /**
     * @param float $stellplatzmiete Shortcut setter for stellplatzmiete
     * @param float $stellplatzkaufpreis Shortcut setter for stellplatzkaufpreis
     * @param int $anzahl Shortcut setter for anzahl
     */
    public function __construct(float $stellplatzmiete = null, float $stellplatzkaufpreis = null, int $anzahl = null)
    {
        $this->stellplatzmiete = $stellplatzmiete;
        $this->stellplatzkaufpreis = $stellplatzkaufpreis;
        $this->anzahl = $anzahl;
    }

    /**
     * @return int
     */
    public function getAnzahl(): ?int
    {
        return $this->anzahl;
    }

    /**
     * @return float
     */
    public function getStellplatzkaufpreis(): ?float
    {
        return $this->stellplatzkaufpreis;
    }

    /**
     * @return float
     */
    public function getStellplatzmiete(): ?float
    {
        return $this->stellplatzmiete;
    }

    /**
     * @param int $anzahl Setter for anzahl
     * @return StpParkhaus
     */
    public function setAnzahl(?int $anzahl)
    {
        $this->anzahl = $anzahl;
        return $this;
    }

    /**
     * @param float $stellplatzkaufpreis Setter for stellplatzkaufpreis
     * @return StpParkhaus
     */
    public function setStellplatzkaufpreis(?float $stellplatzkaufpreis)
    {
        $this->stellplatzkaufpreis = $stellplatzkaufpreis;
        return $this;
    }

    /**
     * @param float $stellplatzmiete Setter for stellplatzmiete
     * @return StpParkhaus
     */
    public function setStellplatzmiete(?float $stellplatzmiete)
    {
        $this->stellplatzmiete = $stellplatzmiete;
        return $this;
    }
}
