<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedSimplefield
 * Benutzerdefinierte Angaben
 * @XmlRoot("user_defined_simplefield")
 */
class UserDefinedSimplefield
{
    /**
     * @Type("string")
     * @XmlAttribute
     * required
     */
    protected ?string $feldname = null;

    /**
     * @Inline
     * @Type("string")
     */
    protected ?string $value = null;

    public function getFeldname(): string
    {
        return $this->feldname;
    }

    public function setFeldname(string $feldname): UserDefinedSimplefield
    {
        $this->feldname = $feldname;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): UserDefinedSimplefield
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?string $feldname = null, ?string $value = null)
    {
        $this->feldname = $feldname;
        $this->value = $value;
    }
}
