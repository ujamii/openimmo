<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nettomieteprom2von
 * Angaben bei Gewerbe Miete, UmSt. im Attribut.
 * @XmlRoot("nettomieteprom2von")
 */
class Nettomieteprom2von
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $nettomieteprom2bis = null;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value = null;

    public function getNettomieteprom2bis(): ?float
    {
        return $this->nettomieteprom2bis;
    }

    public function setNettomieteprom2bis(?float $nettomieteprom2bis): Nettomieteprom2von
    {
        $this->nettomieteprom2bis = $nettomieteprom2bis;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Nettomieteprom2von
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $nettomieteprom2bis = null, ?float $value = null)
    {
        $this->nettomieteprom2bis = $nettomieteprom2bis;
        $this->value = $value;
    }
}
