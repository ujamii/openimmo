<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedSimplefield
 * Benutzerdefinierte Angaben
 *
 * @XmlRoot("user_defined_simplefield")
 */
class UserDefinedSimplefield
{
    /**
     * required
     *
     * @Type("string")
     * @XmlAttribute
     * @var string
     */
    protected $feldname;

    /**
     * @Inline
     * @Type("string")
     * @var string
     */
    protected $value;

    /**
     * @param string $feldname Shortcut setter for feldname
     * @param string $value Shortcut setter for value
     */
    public function __construct(string $feldname = null, string $value = null)
    {
        $this->feldname = $feldname;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getFeldname(): string
    {
        return $this->feldname;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $feldname Setter for feldname
     * @return UserDefinedSimplefield
     */
    public function setFeldname(string $feldname)
    {
        $this->feldname = $feldname;
        return $this;
    }

    /**
     * @param string $value Setter for value
     * @return UserDefinedSimplefield
     */
    public function setValue(?string $value)
    {
        $this->value = $value;
        return $this;
    }
}
