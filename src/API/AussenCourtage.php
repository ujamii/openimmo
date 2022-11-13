<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AussenCourtage
 * Courtage, die der Kunde zu zahlen hat, als Betrag in ? / % / MM, daher Textfeld
 * @XmlRoot("aussen_courtage")
 */
class AussenCourtage
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * optional
     */
    public ?bool $mitMwst = null;

    /**
     * @Inline
     * @Type("string")
     */
    public ?string $value = null;

    public function getMitMwst(): ?bool
    {
        return $this->mitMwst;
    }

    public function setMitMwst(?bool $mitMwst): AussenCourtage
    {
        $this->mitMwst = $mitMwst;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): AussenCourtage
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?bool $mitMwst = null, ?string $value = null)
    {
        $this->mitMwst = $mitMwst;
        $this->value = $value;
    }
}
