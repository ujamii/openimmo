<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Summemietenetto
 * Gesamtsumme der Mietkosten, UmSt. im Attribut.
 * @XmlRoot("summemietenetto")
 */
class Summemietenetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $summemieteust = null;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value = null;

    public function getSummemieteust(): ?float
    {
        return $this->summemieteust;
    }

    public function setSummemieteust(?float $summemieteust): Summemietenetto
    {
        $this->summemieteust = $summemieteust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Summemietenetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $summemieteust = null, ?float $value = null)
    {
        $this->summemieteust = $summemieteust;
        $this->value = $value;
    }
}
