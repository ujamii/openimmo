<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstigemietenetto
 * Ergänzenden Mietkosten, UmSt. im Attribut.
 * @XmlRoot("sonstigemietenetto")
 */
class Sonstigemietenetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $sonstigemieteust = null;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value = null;

    public function getSonstigemieteust(): ?float
    {
        return $this->sonstigemieteust;
    }

    public function setSonstigemieteust(?float $sonstigemieteust): Sonstigemietenetto
    {
        $this->sonstigemieteust = $sonstigemieteust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Sonstigemietenetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $sonstigemieteust = null, ?float $value = null)
    {
        $this->sonstigemieteust = $sonstigemieteust;
        $this->value = $value;
    }
}
