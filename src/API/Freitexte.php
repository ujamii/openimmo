<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Freitexte
 *
 * @XmlRoot("freitexte")
 */
class Freitexte
{
    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $objekttitel = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $dreizeiler = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $lage = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $ausstattBeschr = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $objektbeschreibung = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $sonstigeAngaben = null;

    /**
     * @Type("Ujamii\OpenImmo\API\ObjektText")
     * @var ?\Ujamii\OpenImmo\API\ObjektText
     */
    protected ?ObjektText $objektText = null;

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

    public function getObjekttitel(): ?string
    {
        return $this->objekttitel;
    }

    public function setObjekttitel(?string $objekttitel): Freitexte
    {
        $this->objekttitel = $objekttitel;
        return $this;
    }

    public function getDreizeiler(): ?string
    {
        return $this->dreizeiler;
    }

    public function setDreizeiler(?string $dreizeiler): Freitexte
    {
        $this->dreizeiler = $dreizeiler;
        return $this;
    }

    public function getLage(): ?string
    {
        return $this->lage;
    }

    public function setLage(?string $lage): Freitexte
    {
        $this->lage = $lage;
        return $this;
    }

    public function getAusstattBeschr(): ?string
    {
        return $this->ausstattBeschr;
    }

    public function setAusstattBeschr(?string $ausstattBeschr): Freitexte
    {
        $this->ausstattBeschr = $ausstattBeschr;
        return $this;
    }

    public function getObjektbeschreibung(): ?string
    {
        return $this->objektbeschreibung;
    }

    public function setObjektbeschreibung(?string $objektbeschreibung): Freitexte
    {
        $this->objektbeschreibung = $objektbeschreibung;
        return $this;
    }

    public function getSonstigeAngaben(): ?string
    {
        return $this->sonstigeAngaben;
    }

    public function setSonstigeAngaben(?string $sonstigeAngaben): Freitexte
    {
        $this->sonstigeAngaben = $sonstigeAngaben;
        return $this;
    }

    public function getObjektText(): ?ObjektText
    {
        return $this->objektText;
    }

    public function setObjektText(?ObjektText $objektText): Freitexte
    {
        $this->objektText = $objektText;
        return $this;
    }

    public function getUserDefinedSimplefield(): ?array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(?array $userDefinedSimplefield): Freitexte
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    public function getUserDefinedAnyfield(): ?array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(?array $userDefinedAnyfield): Freitexte
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    public function getUserDefinedExtend(): ?array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(?array $userDefinedExtend): Freitexte
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
