<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtmietenetto
 * Summe alle Mietzins Zahlungen, UmSt. im Attribut.
 * @XmlRoot("gesamtmietenetto")
 */
class Gesamtmietenetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $gesamtmieteust = null;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value = null;

    public function getGesamtmieteust(): ?float
    {
        return $this->gesamtmieteust;
    }

    public function setGesamtmieteust(?float $gesamtmieteust): Gesamtmietenetto
    {
        $this->gesamtmieteust = $gesamtmieteust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Gesamtmietenetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $gesamtmieteust = null, ?float $value = null)
    {
        $this->gesamtmieteust = $gesamtmieteust;
        $this->value = $value;
    }
}
