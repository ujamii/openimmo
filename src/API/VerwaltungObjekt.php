<?php

namespace Ujamii\OpenImmo\API;

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
    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $objektadresseFreigeben = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $verfuegbarAb = null;

    /**
     * @Type("DateTime<'Y-m-d'>")
     * @var ?\DateTime
     */
    protected ?\DateTime $abdatum = null;

    /**
     * @Type("DateTime<'Y-m-d'>")
     * @var ?\DateTime
     */
    protected ?\DateTime $bisdatum = null;

    /**
     * @Type("Ujamii\OpenImmo\API\MinMietdauer")
     * @var ?\Ujamii\OpenImmo\API\MinMietdauer
     */
    protected ?MinMietdauer $minMietdauer = null;

    /**
     * @Type("Ujamii\OpenImmo\API\MaxMietdauer")
     * @var ?\Ujamii\OpenImmo\API\MaxMietdauer
     */
    protected ?MaxMietdauer $maxMietdauer = null;

    /**
     * @Type("DateTime<'Y-m-d'>")
     * @var ?\DateTime
     */
    protected ?\DateTime $versteigerungstermin = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $wbsSozialwohnung = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $vermietet = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $gruppennummer = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $zugang = null;

    /**
     * @Type("float")
     * @var ?float
     */
    protected ?float $laufzeit = null;

    /**
     * @Type("int")
     * @var ?int
     * Minimum value (inclusive): 1
     */
    protected ?int $maxPersonen = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $nichtraucher = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $haustiere = null;

    /**
     * @Type("Ujamii\OpenImmo\API\Geschlecht")
     * @var ?\Ujamii\OpenImmo\API\Geschlecht
     */
    protected ?Geschlecht $geschlecht = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $denkmalgeschuetzt = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $alsFerien = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $gewerblicheNutzung = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $branchen = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $hochhaus = null;

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

    public function getUserDefinedSimplefield(): ?array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(?array $userDefinedSimplefield): VerwaltungObjekt
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    public function getUserDefinedAnyfield(): ?array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(?array $userDefinedAnyfield): VerwaltungObjekt
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    public function getUserDefinedExtend(): ?array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(?array $userDefinedExtend): VerwaltungObjekt
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
