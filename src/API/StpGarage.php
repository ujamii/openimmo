<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpGarage
 */
#[XmlRoot(name: 'stp_garage')]
class StpGarage
{
    /** optional */
    #[Type('float')]
    #[XmlAttribute]
    protected ?float $stellplatzmiete = null;

    /** optional */
    #[Type('float')]
    #[XmlAttribute]
    protected ?float $stellplatzkaufpreis = null;

    /**
     * optional
     * Minimum value (inclusive): -2147483648
     * Maximum value (inclusive): 2147483647
     */
    #[Type('int')]
    #[XmlAttribute]
    protected ?int $anzahl = null;

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

    public function __construct(
        ?float $stellplatzmiete = null,
        ?float $stellplatzkaufpreis = null,
        ?int $anzahl = null,
    ) {
        $this->stellplatzmiete = $stellplatzmiete;
        $this->stellplatzkaufpreis = $stellplatzkaufpreis;
        $this->anzahl = $anzahl;
    }
}
