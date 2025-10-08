<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
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
    /** @Type("bool") */
    protected ?bool $zulieferung = null;

    /** @Type("Ujamii\OpenImmo\API\Ausblick") */
    protected ?Ausblick $ausblick = null;

    /**
     * @XmlList(inline = true, entry = "distanzen")
     * @Type("array<Ujamii\OpenImmo\API\Distanzen>")
     * @SkipWhenEmpty
     */
    protected array $distanzen = [];

    /**
     * @XmlList(inline = true, entry = "distanzen_sport")
     * @Type("array<Ujamii\OpenImmo\API\DistanzenSport>")
     * @SkipWhenEmpty
     */
    protected array $distanzenSport = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>")
     * @SkipWhenEmpty
     */
    protected array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>")
     * @SkipWhenEmpty
     */
    protected array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>")
     * @SkipWhenEmpty
     */
    protected array $userDefinedExtend = [];

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

    /**
     * Returns array of array
     */
    public function getDistanzen(): array
    {
        return $this->distanzen;
    }

    public function setDistanzen(array $distanzen): Infrastruktur
    {
        $this->distanzen = $distanzen;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getDistanzenSport(): array
    {
        return $this->distanzenSport;
    }

    public function setDistanzenSport(array $distanzenSport): Infrastruktur
    {
        $this->distanzenSport = $distanzenSport;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Infrastruktur
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Infrastruktur
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Infrastruktur
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
