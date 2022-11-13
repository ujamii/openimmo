<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Evbnetto
 * Erhaltungs- und Verbesserungsbeitrag. Ãhnlich InstanthaltungsrÃ¼cklage, UmSt. im Attribut.
 * @XmlRoot("evbnetto")
 */
class Evbnetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    public ?float $evbust = null;

    /**
     * @Inline
     * @Type("float")
     */
    public ?float $value = null;

    public function getEvbust(): ?float
    {
        return $this->evbust;
    }

    public function setEvbust(?float $evbust): Evbnetto
    {
        $this->evbust = $evbust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Evbnetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $evbust = null, ?float $value = null)
    {
        $this->evbust = $evbust;
        $this->value = $value;
    }
}
