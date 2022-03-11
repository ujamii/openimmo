<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpGarage
 *
 * @XmlRoot("stp_garage")
 */
class StpGarage
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $stellplatzmiete;

    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $stellplatzkaufpreis;

    /**
     * @Type("int")
     * @XmlAttribute
     * optional
     * Minimum value (inclusive): -2147483648
     * Maximum value (inclusive): 2147483647
     */
    protected ?int $anzahl;

    public function getStellplatzmiete(): ?float
    {
        return $this->stellplatzmiete;
    }

    public function setStellplatzmiete(?float $stellplatzmiete): StpGarage
    {
        $this->stellplatzmiete = $stellplatzmiete;
        return $this;
    }

    public function getStellplatzkaufpreis(): ?float
    {
        return $this->stellplatzkaufpreis;
    }

    public function setStellplatzkaufpreis(?float $stellplatzkaufpreis): StpGarage
    {
        $this->stellplatzkaufpreis = $stellplatzkaufpreis;
        return $this;
    }

    public function getAnzahl(): ?int
    {
        return $this->anzahl;
    }

    public function setAnzahl(?int $anzahl): StpGarage
    {
        $this->anzahl = $anzahl;
        return $this;
    }

    public function __construct(float $stellplatzmiete = null, float $stellplatzkaufpreis = null, int $anzahl = null)
    {
        $this->stellplatzmiete = $stellplatzmiete;
        $this->stellplatzkaufpreis = $stellplatzkaufpreis;
        $this->anzahl = $anzahl;
    }
}
