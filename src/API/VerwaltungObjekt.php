<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class VerwaltungObjekt
 *
 * @XmlRoot("verwaltung_objekt")
 */
class VerwaltungObjekt
{
    /** @Type("bool") */
    public ?bool $objektadresseFreigeben = null;

    /** @Type("string") */
    public ?string $verfuegbarAb = null;

    /** @Type("DateTime<'Y-m-d'>") */
    public ?\DateTime $abdatum = null;

    /** @Type("DateTime<'Y-m-d'>") */
    public ?\DateTime $bisdatum = null;

    /** @Type("Ujamii\OpenImmo\API\MinMietdauer") */
    public ?MinMietdauer $minMietdauer = null;

    /** @Type("Ujamii\OpenImmo\API\MaxMietdauer") */
    public ?MaxMietdauer $maxMietdauer = null;

    /** @Type("DateTime<'Y-m-d'>") */
    public ?\DateTime $versteigerungstermin = null;

    /** @Type("bool") */
    public ?bool $wbsSozialwohnung = null;

    /** @Type("bool") */
    public ?bool $vermietet = null;

    /** @Type("string") */
    public ?string $gruppennummer = null;

    /** @Type("string") */
    public ?string $zugang = null;

    /** @Type("float") */
    public ?float $laufzeit = null;

    /**
     * @Type("int")
     * Minimum value (inclusive): 1
     */
    public ?int $maxPersonen = null;

    /** @Type("bool") */
    public ?bool $nichtraucher = null;

    /** @Type("bool") */
    public ?bool $haustiere = null;

    /** @Type("Ujamii\OpenImmo\API\Geschlecht") */
    public ?Geschlecht $geschlecht = null;

    /** @Type("bool") */
    public ?bool $denkmalgeschuetzt = null;

    /** @Type("bool") */
    public ?bool $alsFerien = null;

    /** @Type("bool") */
    public ?bool $gewerblicheNutzung = null;

    /** @Type("string") */
    public ?string $branchen = null;

    /** @Type("bool") */
    public ?bool $hochhaus = null;

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

    public function getObjektadresseFreigeben(): ?bool
    {
        return $this->objektadresseFreigeben;
    }

    public function setObjektadresseFreigeben(?bool $objektadresseFreigeben): VerwaltungObjekt
    {
        $this->objektadresseFreigeben = $objektadresseFreigeben;
        return $this;
    }

    public function getVerfuegbarAb(): ?string
    {
        return $this->verfuegbarAb;
    }

    public function setVerfuegbarAb(?string $verfuegbarAb): VerwaltungObjekt
    {
        $this->verfuegbarAb = $verfuegbarAb;
        return $this;
    }

    public function getAbdatum(): ?\DateTime
    {
        return $this->abdatum;
    }

    public function setAbdatum(?\DateTime $abdatum): VerwaltungObjekt
    {
        $this->abdatum = $abdatum;
        return $this;
    }

    public function getBisdatum(): ?\DateTime
    {
        return $this->bisdatum;
    }

    public function setBisdatum(?\DateTime $bisdatum): VerwaltungObjekt
    {
        $this->bisdatum = $bisdatum;
        return $this;
    }

    public function getMinMietdauer(): ?MinMietdauer
    {
        return $this->minMietdauer;
    }

    public function setMinMietdauer(?MinMietdauer $minMietdauer): VerwaltungObjekt
    {
        $this->minMietdauer = $minMietdauer;
        return $this;
    }

    public function getMaxMietdauer(): ?MaxMietdauer
    {
        return $this->maxMietdauer;
    }

    public function setMaxMietdauer(?MaxMietdauer $maxMietdauer): VerwaltungObjekt
    {
        $this->maxMietdauer = $maxMietdauer;
        return $this;
    }

    public function getVersteigerungstermin(): ?\DateTime
    {
        return $this->versteigerungstermin;
    }

    public function setVersteigerungstermin(?\DateTime $versteigerungstermin): VerwaltungObjekt
    {
        $this->versteigerungstermin = $versteigerungstermin;
        return $this;
    }

    public function getWbsSozialwohnung(): ?bool
    {
        return $this->wbsSozialwohnung;
    }

    public function setWbsSozialwohnung(?bool $wbsSozialwohnung): VerwaltungObjekt
    {
        $this->wbsSozialwohnung = $wbsSozialwohnung;
        return $this;
    }

    public function getVermietet(): ?bool
    {
        return $this->vermietet;
    }

    public function setVermietet(?bool $vermietet): VerwaltungObjekt
    {
        $this->vermietet = $vermietet;
        return $this;
    }

    public function getGruppennummer(): ?string
    {
        return $this->gruppennummer;
    }

    public function setGruppennummer(?string $gruppennummer): VerwaltungObjekt
    {
        $this->gruppennummer = $gruppennummer;
        return $this;
    }

    public function getZugang(): ?string
    {
        return $this->zugang;
    }

    public function setZugang(?string $zugang): VerwaltungObjekt
    {
        $this->zugang = $zugang;
        return $this;
    }

    public function getLaufzeit(): ?float
    {
        return $this->laufzeit;
    }

    public function setLaufzeit(?float $laufzeit): VerwaltungObjekt
    {
        $this->laufzeit = $laufzeit;
        return $this;
    }

    public function getMaxPersonen(): ?int
    {
        return $this->maxPersonen;
    }

    public function setMaxPersonen(?int $maxPersonen): VerwaltungObjekt
    {
        $this->maxPersonen = $maxPersonen;
        return $this;
    }

    public function getNichtraucher(): ?bool
    {
        return $this->nichtraucher;
    }

    public function setNichtraucher(?bool $nichtraucher): VerwaltungObjekt
    {
        $this->nichtraucher = $nichtraucher;
        return $this;
    }

    public function getHaustiere(): ?bool
    {
        return $this->haustiere;
    }

    public function setHaustiere(?bool $haustiere): VerwaltungObjekt
    {
        $this->haustiere = $haustiere;
        return $this;
    }

    public function getGeschlecht(): ?Geschlecht
    {
        return $this->geschlecht;
    }

    public function setGeschlecht(?Geschlecht $geschlecht): VerwaltungObjekt
    {
        $this->geschlecht = $geschlecht;
        return $this;
    }

    public function getDenkmalgeschuetzt(): ?bool
    {
        return $this->denkmalgeschuetzt;
    }

    public function setDenkmalgeschuetzt(?bool $denkmalgeschuetzt): VerwaltungObjekt
    {
        $this->denkmalgeschuetzt = $denkmalgeschuetzt;
        return $this;
    }

    public function getAlsFerien(): ?bool
    {
        return $this->alsFerien;
    }

    public function setAlsFerien(?bool $alsFerien): VerwaltungObjekt
    {
        $this->alsFerien = $alsFerien;
        return $this;
    }

    public function getGewerblicheNutzung(): ?bool
    {
        return $this->gewerblicheNutzung;
    }

    public function setGewerblicheNutzung(?bool $gewerblicheNutzung): VerwaltungObjekt
    {
        $this->gewerblicheNutzung = $gewerblicheNutzung;
        return $this;
    }

    public function getBranchen(): ?string
    {
        return $this->branchen;
    }

    public function setBranchen(?string $branchen): VerwaltungObjekt
    {
        $this->branchen = $branchen;
        return $this;
    }

    public function getHochhaus(): ?bool
    {
        return $this->hochhaus;
    }

    public function setHochhaus(?bool $hochhaus): VerwaltungObjekt
    {
        $this->hochhaus = $hochhaus;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): VerwaltungObjekt
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): VerwaltungObjekt
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

    public function setUserDefinedExtend(array $userDefinedExtend): VerwaltungObjekt
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
