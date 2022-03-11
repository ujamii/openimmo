<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anhaenge
 *
 * @XmlRoot("anhaenge")
 */
class Anhaenge
{
    /**
     * @XmlList(inline = true, entry = "anhang")
     * @Type("array<Ujamii\OpenImmo\API\Anhang>")
     * @var ?\Ujamii\OpenImmo\API\Anhang[]
     */
    protected ?array $anhang = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>")
     * @var ?\Ujamii\OpenImmo\API\UserDefinedSimplefield[]
     */
    protected ?array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>")
     * @var ?\Ujamii\OpenImmo\API\UserDefinedAnyfield[]
     */
    protected ?array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>")
     * @var ?\Ujamii\OpenImmo\API\UserDefinedExtend[]
     */
    protected ?array $userDefinedExtend = [];

    public function getAnhang(): ?array
    {
        return $this->anhang;
    }

    public function setAnhang(?array $anhang): Anhaenge
    {
        $this->anhang = $anhang;
        return $this;
    }

    public function getUserDefinedSimplefield(): ?array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(?array $userDefinedSimplefield): Anhaenge
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    public function getUserDefinedAnyfield(): ?array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(?array $userDefinedAnyfield): Anhaenge
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    public function getUserDefinedExtend(): ?array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(?array $userDefinedExtend): Anhaenge
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }

    public function __construct(
        array $anhang = null,
        array $userDefinedSimplefield = null,
        array $userDefinedAnyfield = null,
        array $userDefinedExtend = null
    ) {
        $this->anhang = $anhang;
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        $this->userDefinedExtend = $userDefinedExtend;
    }
}
