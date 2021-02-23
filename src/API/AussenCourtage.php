<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AussenCourtage
 * Courtage, die der Kunde zu zahlen hat, als Betrag in ? / % / MM, daher Textfeld
 *
 * @XmlRoot("aussen_courtage")
 */
class AussenCourtage
{
    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @var bool
     */
    protected $mitMwst;

    /**
     * @Inline
     * @Type("string")
     * @var string
     */
    protected $value;

    /**
     * @param bool $mitMwst Shortcut setter for mitMwst
     * @param string $value Shortcut setter for value
     */
    public function __construct(bool $mitMwst = null, string $value = null)
    {
        $this->mitMwst = $mitMwst;
        $this->value = $value;
    }

    /**
     * @return bool
     */
    public function getMitMwst(): ?bool
    {
        return $this->mitMwst;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param bool $mitMwst Setter for mitMwst
     * @return AussenCourtage
     */
    public function setMitMwst(?bool $mitMwst)
    {
        $this->mitMwst = $mitMwst;
        return $this;
    }

    /**
     * @param string $value Setter for value
     * @return AussenCourtage
     */
    public function setValue(?string $value)
    {
        $this->value = $value;
        return $this;
    }
}
