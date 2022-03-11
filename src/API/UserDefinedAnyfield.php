<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedAnyfield
 *
 * @XmlRoot("user_defined_anyfield")
 */
class UserDefinedAnyfield
{
    /**
     * @Inline
     * @Type("string")
     */
    protected ?string $value;

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): UserDefinedAnyfield
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $value = null)
    {
        $this->value = $value;
    }
}
