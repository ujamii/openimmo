<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ruecklagenetto
 * Vorhanden RÃ¼cklagen bei einem Kauf Objekt, UmSt. im Attribut.
 * @XmlRoot("ruecklagenetto")
 */
class Ruecklagenetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    public ?float $ruecklageust = null;

    /**
     * @Inline
     * @Type("float")
     */
    public ?float $value = null;

    public function getRuecklageust(): ?float
    {
        return $this->ruecklageust;
    }

    public function setRuecklageust(?float $ruecklageust): Ruecklagenetto
    {
        $this->ruecklageust = $ruecklageust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Ruecklagenetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $ruecklageust = null, ?float $value = null)
    {
        $this->ruecklageust = $ruecklageust;
        $this->value = $value;
    }
}
