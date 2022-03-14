<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Provisionnetto
 * Wenn unterschiedliche Provisionen anfallen, dann hier Netto und UmSt. einzeln
 * @XmlRoot("provisionnetto")
 */
class Provisionnetto
{
    /**
     * @Type("float")
     * @XmlAttribute
     * optional
     */
    protected ?float $provisionust = null;

    /**
     * @Inline
     * @Type("float")
     */
    protected ?float $value = null;

    public function getProvisionust(): ?float
    {
        return $this->provisionust;
    }

    public function setProvisionust(?float $provisionust): Provisionnetto
    {
        $this->provisionust = $provisionust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Provisionnetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $provisionust = null, ?float $value = null)
    {
        $this->provisionust = $provisionust;
        $this->value = $value;
    }
}
