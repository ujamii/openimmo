<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtkostenprom2von
 * Gesamtkosten bei Gewerbeobjekten Von - Bis.
 * @XmlRoot("gesamtkostenprom2von")
 */
class Gesamtkostenprom2von
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $gesamtkostenprom2bis = null;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value = null;

    public function getGesamtkostenprom2bis(): ?float
    {
        return $this->gesamtkostenprom2bis;
    }

    public function setGesamtkostenprom2bis(?float $gesamtkostenprom2bis): Gesamtkostenprom2von
    {
        $this->gesamtkostenprom2bis = $gesamtkostenprom2bis;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Gesamtkostenprom2von
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $gesamtkostenprom2bis = null, ?float $value = null)
    {
        $this->gesamtkostenprom2bis = $gesamtkostenprom2bis;
        $this->value = $value;
    }
}
