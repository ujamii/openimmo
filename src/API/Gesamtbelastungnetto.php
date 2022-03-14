<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtbelastungnetto
 * Die Summe alle Nebenkosten und Mietzinse bei Miete, UmSt. im Attribut.
 * @XmlRoot("gesamtbelastungnetto")
 */
class Gesamtbelastungnetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $gesamtbelastungust = null;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value = null;

    public function getGesamtbelastungust(): ?float
    {
        return $this->gesamtbelastungust;
    }

    public function setGesamtbelastungust(?float $gesamtbelastungust): Gesamtbelastungnetto
    {
        $this->gesamtbelastungust = $gesamtbelastungust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Gesamtbelastungnetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $gesamtbelastungust = null, ?float $value = null)
    {
        $this->gesamtbelastungust = $gesamtbelastungust;
        $this->value = $value;
    }
}
