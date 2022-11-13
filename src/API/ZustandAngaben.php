<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ZustandAngaben
 *
 * @XmlRoot("zustand_angaben")
 */
class ZustandAngaben
{
    /** @Type("string") */
    public ?string $baujahr = null;

    /** @Type("string") */
    public ?string $letztemodernisierung = null;

    /** @Type("Ujamii\OpenImmo\API\Zustand") */
    public ?Zustand $zustand = null;

    /** @Type("Ujamii\OpenImmo\API\Alter") */
    public ?Alter $alter = null;

    /** @Type("Ujamii\OpenImmo\API\BebaubarNach") */
    public ?BebaubarNach $bebaubarNach = null;

    /** @Type("Ujamii\OpenImmo\API\Erschliessung") */
    public ?Erschliessung $erschliessung = null;

    /** @Type("Ujamii\OpenImmo\API\ErschliessungUmfang") */
    public ?ErschliessungUmfang $erschliessungUmfang = null;

    /** @Type("string") */
    public ?string $bauzone = null;

    /** @Type("string") */
    public ?string $altlasten = null;

    /**
     * @XmlList(inline = true, entry = "energiepass")
     * @Type("array<Ujamii\OpenImmo\API\Energiepass>")
     * @SkipWhenEmpty
     */
    public array $energiepass = [];

    /** @Type("Ujamii\OpenImmo\API\Verkaufstatus") */
    public ?Verkaufstatus $verkaufstatus = null;

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>")
     * @SkipWhenEmpty
     */
    public array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>")
     * @SkipWhenEmpty
     */
    public array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>")
     * @SkipWhenEmpty
     */
    public array $userDefinedExtend = [];

    public function getBaujahr(): ?string
    {
        return $this->baujahr;
    }

    public function setBaujahr(?string $baujahr): ZustandAngaben
    {
        $this->baujahr = $baujahr;
        return $this;
    }

    public function getLetztemodernisierung(): ?string
    {
        return $this->letztemodernisierung;
    }

    public function setLetztemodernisierung(?string $letztemodernisierung): ZustandAngaben
    {
        $this->letztemodernisierung = $letztemodernisierung;
        return $this;
    }

    public function getZustand(): ?Zustand
    {
        return $this->zustand;
    }

    public function setZustand(?Zustand $zustand): ZustandAngaben
    {
        $this->zustand = $zustand;
        return $this;
    }

    public function getAlter(): ?Alter
    {
        return $this->alter;
    }

    public function setAlter(?Alter $alter): ZustandAngaben
    {
        $this->alter = $alter;
        return $this;
    }

    public function getBebaubarNach(): ?BebaubarNach
    {
        return $this->bebaubarNach;
    }

    public function setBebaubarNach(?BebaubarNach $bebaubarNach): ZustandAngaben
    {
        $this->bebaubarNach = $bebaubarNach;
        return $this;
    }

    public function getErschliessung(): ?Erschliessung
    {
        return $this->erschliessung;
    }

    public function setErschliessung(?Erschliessung $erschliessung): ZustandAngaben
    {
        $this->erschliessung = $erschliessung;
        return $this;
    }

    public function getErschliessungUmfang(): ?ErschliessungUmfang
    {
        return $this->erschliessungUmfang;
    }

    public function setErschliessungUmfang(?ErschliessungUmfang $erschliessungUmfang): ZustandAngaben
    {
        $this->erschliessungUmfang = $erschliessungUmfang;
        return $this;
    }

    public function getBauzone(): ?string
    {
        return $this->bauzone;
    }

    public function setBauzone(?string $bauzone): ZustandAngaben
    {
        $this->bauzone = $bauzone;
        return $this;
    }

    public function getAltlasten(): ?string
    {
        return $this->altlasten;
    }

    public function setAltlasten(?string $altlasten): ZustandAngaben
    {
        $this->altlasten = $altlasten;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getEnergiepass(): array
    {
        return $this->energiepass ?? [];
    }

    public function setEnergiepass(array $energiepass): ZustandAngaben
    {
        $this->energiepass = $energiepass;
        return $this;
    }

    public function getVerkaufstatus(): ?Verkaufstatus
    {
        return $this->verkaufstatus;
    }

    public function setVerkaufstatus(?Verkaufstatus $verkaufstatus): ZustandAngaben
    {
        $this->verkaufstatus = $verkaufstatus;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): ZustandAngaben
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield ?? [];
    }

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): ZustandAngaben
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend ?? [];
    }

    public function setUserDefinedExtend(array $userDefinedExtend): ZustandAngaben
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
