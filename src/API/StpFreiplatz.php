<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpFreiplatz
 *
 * @XmlRoot("stp_freiplatz")
 */
class StpFreiplatz
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    public ?float $stellplatzmiete = null;

    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    public ?float $stellplatzkaufpreis = null;

    /**
     * @Type("int")
     * @XmlAttribute
     * optional
     * Minimum value (inclusive): -2147483648
     * Maximum value (inclusive): 2147483647
     */
    public ?int $anzahl = null;

    public function getStellplatzmiete(): ?float
    {
        return $this->stellplatzmiete;
    }

    public function setStellplatzmiete(?float $stellplatzmiete): StpFreiplatz
    {
        $this->stellplatzmiete = $stellplatzmiete;
        return $this;
    }

    public function getStellplatzkaufpreis(): ?float
    {
        return $this->stellplatzkaufpreis;
    }

    public function setStellplatzkaufpreis(?float $stellplatzkaufpreis): StpFreiplatz
    {
        $this->stellplatzkaufpreis = $stellplatzkaufpreis;
        return $this;
    }

    public function getAnzahl(): ?int
    {
        return $this->anzahl;
    }

    public function setAnzahl(?int $anzahl): StpFreiplatz
    {
        $this->anzahl = $anzahl;
        return $this;
    }

    public function __construct(?float $stellplatzmiete = null, ?float $stellplatzkaufpreis = null, ?int $anzahl = null)
    {
        $this->stellplatzmiete = $stellplatzmiete;
        $this->stellplatzkaufpreis = $stellplatzkaufpreis;
        $this->anzahl = $anzahl;
    }
}
