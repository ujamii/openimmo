<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Objektkategorie
 *
 * @XmlRoot("objektkategorie")
 */
class Objektkategorie
{
    /**
     * @Type("Ujamii\OpenImmo\API\Nutzungsart")
     * @var ?\Ujamii\OpenImmo\API\Nutzungsart
     */
    protected ?Nutzungsart $nutzungsart = null;

    /**
     * @Type("Ujamii\OpenImmo\API\Vermarktungsart")
     * @var ?\Ujamii\OpenImmo\API\Vermarktungsart
     */
    protected ?Vermarktungsart $vermarktungsart = null;

    /**
     * @Type("Ujamii\OpenImmo\API\Objektart")
     * @var ?\Ujamii\OpenImmo\API\Objektart
     */
    protected ?Objektart $objektart = null;

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

    public function getNutzungsart(): ?Nutzungsart
    {
        return $this->nutzungsart;
    }

    public function setNutzungsart(?Nutzungsart $nutzungsart): Objektkategorie
    {
        $this->nutzungsart = $nutzungsart;
        return $this;
    }

    public function getVermarktungsart(): ?Vermarktungsart
    {
        return $this->vermarktungsart;
    }

    public function setVermarktungsart(?Vermarktungsart $vermarktungsart): Objektkategorie
    {
        $this->vermarktungsart = $vermarktungsart;
        return $this;
    }

    public function getObjektart(): ?Objektart
    {
        return $this->objektart;
    }

    public function setObjektart(?Objektart $objektart): Objektkategorie
    {
        $this->objektart = $objektart;
        return $this;
    }

    public function getUserDefinedSimplefield(): ?array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(?array $userDefinedSimplefield): Objektkategorie
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    public function getUserDefinedAnyfield(): ?array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(?array $userDefinedAnyfield): Objektkategorie
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    public function getUserDefinedExtend(): ?array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(?array $userDefinedExtend): Objektkategorie
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }

    public function __construct(
        \Ujamii\OpenImmo\API\Nutzungsart $nutzungsart = null,
        \Ujamii\OpenImmo\API\Vermarktungsart $vermarktungsart = null,
        \Ujamii\OpenImmo\API\Objektart $objektart = null,
        array $userDefinedSimplefield = null,
        array $userDefinedAnyfield = null,
        array $userDefinedExtend = null
    ) {
        $this->nutzungsart = $nutzungsart;
        $this->vermarktungsart = $vermarktungsart;
        $this->objektart = $objektart;
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        $this->userDefinedExtend = $userDefinedExtend;
    }
}
