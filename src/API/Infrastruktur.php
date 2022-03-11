<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Infrastruktur
 *
 * @XmlRoot("infrastruktur")
 */
class Infrastruktur
{
    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $zulieferung = null;

    /**
     * @Type("Ujamii\OpenImmo\API\Ausblick")
     * @var ?\Ujamii\OpenImmo\API\Ausblick
     */
    protected ?Ausblick $ausblick = null;

    /**
     * @XmlList(inline = true, entry = "distanzen")
     * @Type("array<Ujamii\OpenImmo\API\Distanzen>")
     * @var ?\Ujamii\OpenImmo\API\Distanzen[]
     */
    protected ?array $distanzen = [];

    /**
     * @XmlList(inline = true, entry = "distanzen_sport")
     * @Type("array<Ujamii\OpenImmo\API\DistanzenSport>")
     * @var ?\Ujamii\OpenImmo\API\DistanzenSport[]
     */
    protected ?array $distanzenSport = [];

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

    public function getZulieferung(): ?bool
    {
        return $this->zulieferung;
    }

    public function setZulieferung(?bool $zulieferung): Infrastruktur
    {
        $this->zulieferung = $zulieferung;
        return $this;
    }

    public function getAusblick(): ?Ausblick
    {
        return $this->ausblick;
    }

    public function setAusblick(?Ausblick $ausblick): Infrastruktur
    {
        $this->ausblick = $ausblick;
        return $this;
    }

    public function getDistanzen(): ?array
    {
        return $this->distanzen;
    }

    public function setDistanzen(?array $distanzen): Infrastruktur
    {
        $this->distanzen = $distanzen;
        return $this;
    }

    public function getDistanzenSport(): ?array
    {
        return $this->distanzenSport;
    }

    public function setDistanzenSport(?array $distanzenSport): Infrastruktur
    {
        $this->distanzenSport = $distanzenSport;
        return $this;
    }

    public function getUserDefinedSimplefield(): ?array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(?array $userDefinedSimplefield): Infrastruktur
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    public function getUserDefinedAnyfield(): ?array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(?array $userDefinedAnyfield): Infrastruktur
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    public function getUserDefinedExtend(): ?array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(?array $userDefinedExtend): Infrastruktur
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
