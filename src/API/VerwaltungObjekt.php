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
     * @Type("DateTime<'Y-m-d'>")
     * @var \DateTime
     */
    protected $abdatum;

    /**
     * @Type("bool")
     * @var bool
     */
    protected $alsFerien;

    /**
     * @Type("DateTime<'Y-m-d'>")
     * @var \DateTime
     */
    protected $bisdatum;

    /**
     * @Type("string")
     * @var string
     */
    protected $branchen;

    /**
     * @Type("bool")
     * @var bool
     */
    protected $denkmalgeschuetzt;

    /**
     * @Type("Ujamii\OpenImmo\API\Geschlecht")
     * @var Geschlecht
     */
    protected $geschlecht;

    /**
     * @Type("bool")
     * @var bool
     */
    protected $gewerblicheNutzung;

    /**
     * @Type("string")
     * @var string
     */
    protected $gruppennummer;

    /**
     * @Type("bool")
     * @var bool
     */
    protected $haustiere;

    /**
     * @Type("bool")
     * @var bool
     */
    protected $hochhaus;

    /**
     * @Type("float")
     * @var float
     */
    protected $laufzeit;

    /**
     * @Type("Ujamii\OpenImmo\API\MaxMietdauer")
     * @var MaxMietdauer
     */
    protected $maxMietdauer;

    /**
     * @Type("int")
     * @var int Minimum value (inclusive): 1
     */
    protected $maxPersonen;

    /**
     * @Type("Ujamii\OpenImmo\API\MinMietdauer")
     * @var MinMietdauer
     */
    protected $minMietdauer;

    /**
     * @Type("bool")
     * @var bool
     */
    protected $nichtraucher;

    /**
     * @Type("bool")
     * @var bool
     */
    protected $objektadresseFreigeben;

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>")
     * @var UserDefinedAnyfield[]
     */
    protected $userDefinedAnyfield;

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>")
     * @var UserDefinedExtend[]
     */
    protected $userDefinedExtend;

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>")
     * @var UserDefinedSimplefield[]
     */
    protected $userDefinedSimplefield;

    /**
     * @Type("string")
     * @var string
     */
    protected $verfuegbarAb;

    /**
     * @Type("bool")
     * @var bool
     */
    protected $vermietet;

    /**
     * @Type("DateTime<'Y-m-d'>")
     * @var \DateTime
     */
    protected $versteigerungstermin;

    /**
     * @Type("bool")
     * @var bool
     */
    protected $wbsSozialwohnung;

    /**
     * @Type("string")
     * @var string
     */
    protected $zugang;

    /**
     * @return \DateTime
     */
    public function getAbdatum(): ?\DateTime
    {
        return $this->abdatum;
    }

    /**
     * @return bool
     */
    public function getAlsFerien(): ?bool
    {
        return $this->alsFerien;
    }

    /**
     * @return \DateTime
     */
    public function getBisdatum(): ?\DateTime
    {
        return $this->bisdatum;
    }

    /**
     * @return string
     */
    public function getBranchen(): ?string
    {
        return $this->branchen;
    }

    /**
     * @return bool
     */
    public function getDenkmalgeschuetzt(): ?bool
    {
        return $this->denkmalgeschuetzt;
    }

    /**
     * @return Geschlecht
     */
    public function getGeschlecht(): ?Geschlecht
    {
        return $this->geschlecht;
    }

    /**
     * @return bool
     */
    public function getGewerblicheNutzung(): ?bool
    {
        return $this->gewerblicheNutzung;
    }

    /**
     * @return string
     */
    public function getGruppennummer(): ?string
    {
        return $this->gruppennummer;
    }

    /**
     * @return bool
     */
    public function getHaustiere(): ?bool
    {
        return $this->haustiere;
    }

    /**
     * @return bool
     */
    public function getHochhaus(): ?bool
    {
        return $this->hochhaus;
    }

    /**
     * @return float
     */
    public function getLaufzeit(): ?float
    {
        return $this->laufzeit;
    }

    /**
     * @return MaxMietdauer
     */
    public function getMaxMietdauer(): ?MaxMietdauer
    {
        return $this->maxMietdauer;
    }

    /**
     * @return int
     */
    public function getMaxPersonen(): ?int
    {
        return $this->maxPersonen;
    }

    /**
     * @return MinMietdauer
     */
    public function getMinMietdauer(): ?MinMietdauer
    {
        return $this->minMietdauer;
    }

    /**
     * @return bool
     */
    public function getNichtraucher(): ?bool
    {
        return $this->nichtraucher;
    }

    /**
     * @return bool
     */
    public function getObjektadresseFreigeben(): ?bool
    {
        return $this->objektadresseFreigeben;
    }

    /**
     * Returns array of UserDefinedAnyfield
     *
     * @return array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield ?? [];
    }

    /**
     * Returns array of UserDefinedExtend
     *
     * @return array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend ?? [];
    }

    /**
     * Returns array of UserDefinedSimplefield
     *
     * @return array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    /**
     * @return string
     */
    public function getVerfuegbarAb(): ?string
    {
        return $this->verfuegbarAb;
    }

    /**
     * @return bool
     */
    public function getVermietet(): ?bool
    {
        return $this->vermietet;
    }

    /**
     * @return \DateTime
     */
    public function getVersteigerungstermin(): ?\DateTime
    {
        return $this->versteigerungstermin;
    }

    /**
     * @return bool
     */
    public function getWbsSozialwohnung(): ?bool
    {
        return $this->wbsSozialwohnung;
    }

    /**
     * @return string
     */
    public function getZugang(): ?string
    {
        return $this->zugang;
    }

    /**
     * @param \DateTime $abdatum Setter for abdatum
     * @return VerwaltungObjekt
     */
    public function setAbdatum(?\DateTime $abdatum)
    {
        $this->abdatum = $abdatum;
        return $this;
    }

    /**
     * @param bool $alsFerien Setter for alsFerien
     * @return VerwaltungObjekt
     */
    public function setAlsFerien(?bool $alsFerien)
    {
        $this->alsFerien = $alsFerien;
        return $this;
    }

    /**
     * @param \DateTime $bisdatum Setter for bisdatum
     * @return VerwaltungObjekt
     */
    public function setBisdatum(?\DateTime $bisdatum)
    {
        $this->bisdatum = $bisdatum;
        return $this;
    }

    /**
     * @param string $branchen Setter for branchen
     * @return VerwaltungObjekt
     */
    public function setBranchen(?string $branchen)
    {
        $this->branchen = $branchen;
        return $this;
    }

    /**
     * @param bool $denkmalgeschuetzt Setter for denkmalgeschuetzt
     * @return VerwaltungObjekt
     */
    public function setDenkmalgeschuetzt(?bool $denkmalgeschuetzt)
    {
        $this->denkmalgeschuetzt = $denkmalgeschuetzt;
        return $this;
    }

    /**
     * @param Geschlecht $geschlecht Setter for geschlecht
     * @return VerwaltungObjekt
     */
    public function setGeschlecht(?Geschlecht $geschlecht)
    {
        $this->geschlecht = $geschlecht;
        return $this;
    }

    /**
     * @param bool $gewerblicheNutzung Setter for gewerblicheNutzung
     * @return VerwaltungObjekt
     */
    public function setGewerblicheNutzung(?bool $gewerblicheNutzung)
    {
        $this->gewerblicheNutzung = $gewerblicheNutzung;
        return $this;
    }

    /**
     * @param string $gruppennummer Setter for gruppennummer
     * @return VerwaltungObjekt
     */
    public function setGruppennummer(?string $gruppennummer)
    {
        $this->gruppennummer = $gruppennummer;
        return $this;
    }

    /**
     * @param bool $haustiere Setter for haustiere
     * @return VerwaltungObjekt
     */
    public function setHaustiere(?bool $haustiere)
    {
        $this->haustiere = $haustiere;
        return $this;
    }

    /**
     * @param bool $hochhaus Setter for hochhaus
     * @return VerwaltungObjekt
     */
    public function setHochhaus(?bool $hochhaus)
    {
        $this->hochhaus = $hochhaus;
        return $this;
    }

    /**
     * @param float $laufzeit Setter for laufzeit
     * @return VerwaltungObjekt
     */
    public function setLaufzeit(?float $laufzeit)
    {
        $this->laufzeit = $laufzeit;
        return $this;
    }

    /**
     * @param MaxMietdauer $maxMietdauer Setter for maxMietdauer
     * @return VerwaltungObjekt
     */
    public function setMaxMietdauer(?MaxMietdauer $maxMietdauer)
    {
        $this->maxMietdauer = $maxMietdauer;
        return $this;
    }

    /**
     * @param int $maxPersonen Setter for maxPersonen
     * @return VerwaltungObjekt
     */
    public function setMaxPersonen(?int $maxPersonen)
    {
        $this->maxPersonen = $maxPersonen;
        return $this;
    }

    /**
     * @param MinMietdauer $minMietdauer Setter for minMietdauer
     * @return VerwaltungObjekt
     */
    public function setMinMietdauer(?MinMietdauer $minMietdauer)
    {
        $this->minMietdauer = $minMietdauer;
        return $this;
    }

    /**
     * @param bool $nichtraucher Setter for nichtraucher
     * @return VerwaltungObjekt
     */
    public function setNichtraucher(?bool $nichtraucher)
    {
        $this->nichtraucher = $nichtraucher;
        return $this;
    }

    /**
     * @param bool $objektadresseFreigeben Setter for objektadresseFreigeben
     * @return VerwaltungObjekt
     */
    public function setObjektadresseFreigeben(?bool $objektadresseFreigeben)
    {
        $this->objektadresseFreigeben = $objektadresseFreigeben;
        return $this;
    }

    /**
     * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
     * @return VerwaltungObjekt
     */
    public function setUserDefinedAnyfield(array $userDefinedAnyfield)
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    /**
     * @param array $userDefinedExtend Setter for userDefinedExtend
     * @return VerwaltungObjekt
     */
    public function setUserDefinedExtend(array $userDefinedExtend)
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }

    /**
     * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
     * @return VerwaltungObjekt
     */
    public function setUserDefinedSimplefield(array $userDefinedSimplefield)
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    /**
     * @param string $verfuegbarAb Setter for verfuegbarAb
     * @return VerwaltungObjekt
     */
    public function setVerfuegbarAb(?string $verfuegbarAb)
    {
        $this->verfuegbarAb = $verfuegbarAb;
        return $this;
    }

    /**
     * @param bool $vermietet Setter for vermietet
     * @return VerwaltungObjekt
     */
    public function setVermietet(?bool $vermietet)
    {
        $this->vermietet = $vermietet;
        return $this;
    }

    /**
     * @param \DateTime $versteigerungstermin Setter for versteigerungstermin
     * @return VerwaltungObjekt
     */
    public function setVersteigerungstermin(?\DateTime $versteigerungstermin)
    {
        $this->versteigerungstermin = $versteigerungstermin;
        return $this;
    }

    /**
     * @param bool $wbsSozialwohnung Setter for wbsSozialwohnung
     * @return VerwaltungObjekt
     */
    public function setWbsSozialwohnung(?bool $wbsSozialwohnung)
    {
        $this->wbsSozialwohnung = $wbsSozialwohnung;
        return $this;
    }

    /**
     * @param string $zugang Setter for zugang
     * @return VerwaltungObjekt
     */
    public function setZugang(?string $zugang)
    {
        $this->zugang = $zugang;
        return $this;
    }
}
