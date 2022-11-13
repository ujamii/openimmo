<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kaufpreis
 * Gesamt- (Angebots-)Kaufpreis der Immobilie. Wenn "Auf Anfrage" dann Wert = 0 und Attribut auf TRUE
 * @XmlRoot("kaufpreis")
 */
class Kaufpreis
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * optional
     */
    public ?bool $aufAnfrage = null;

    /**
     * @Inline
     * @Type("float")
     */
    public ?float $value = null;

    public function getAufAnfrage(): ?bool
    {
        return $this->aufAnfrage;
    }

    public function setAufAnfrage(?bool $aufAnfrage): Kaufpreis
    {
        $this->aufAnfrage = $aufAnfrage;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Kaufpreis
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?bool $aufAnfrage = null, ?float $value = null)
    {
        $this->aufAnfrage = $aufAnfrage;
        $this->value = $value;
    }
}
