<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nebenkostenprom2von
 * Angaben bei Gewerbe Miete,UmSt. im Attribut.
 * @XmlRoot("nebenkostenprom2von")
 */
class Nebenkostenprom2von
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $nebenkostenprom2bis;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value;

    public function getNebenkostenprom2bis(): ?float
    {
        return $this->nebenkostenprom2bis;
    }

    public function setNebenkostenprom2bis(?float $nebenkostenprom2bis): Nebenkostenprom2von
    {
        $this->nebenkostenprom2bis = $nebenkostenprom2bis;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Nebenkostenprom2von
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(float $nebenkostenprom2bis = null, float $value = null)
    {
        $this->nebenkostenprom2bis = $nebenkostenprom2bis;
        $this->value = $value;
    }
}
