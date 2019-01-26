<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class VerwaltungObjekt
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("verwaltung_objekt") 
 */
class VerwaltungObjekt {

	/**
	 * @var date
	 */
	protected $abdatum;

	/**
	 * @var boolean
	 */
	protected $alsFerien;

	/**
	 * @var date
	 */
	protected $bisdatum;

	/**
	 * @var string
	 */
	protected $branchen;

	/**
	 * @var boolean
	 */
	protected $denkmalgeschuetzt;

	/**
	 * @var Geschlecht
	 */
	protected $geschlecht;

	/**
	 * @var boolean
	 */
	protected $gewerblicheNutzung;

	/**
	 * @var string
	 */
	protected $gruppennummer;

	/**
	 * @var boolean
	 */
	protected $haustiere;

	/**
	 * @var boolean
	 */
	protected $hochhaus;

	/**
	 * @var decimal
	 */
	protected $laufzeit;

	/**
	 * @var MaxMietdauer
	 */
	protected $maxMietdauer;

	/**
	 * @var positiveInteger
	 */
	protected $maxPersonen;

	/**
	 * @var MinMietdauer
	 */
	protected $minMietdauer;

	/**
	 * @var boolean
	 */
	protected $nichtraucher;

	/**
	 * @var boolean
	 */
	protected $objektadresseFreigeben;

	/**
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @var UserDefinedSimplefield[]
	 */
	protected $userDefinedSimplefield;

	/**
	 * @var string
	 */
	protected $verfuegbarAb;

	/**
	 * @var boolean
	 */
	protected $vermietet;

	/**
	 * @var date
	 */
	protected $versteigerungstermin;

	/**
	 * @var boolean
	 */
	protected $wbsSozialwohnung;

	/**
	 * @var string
	 */
	protected $zugang;

	/**
	 * @return date
	 */
	public function getAbdatum(): date {
		return $this->abdatum;
	}

	/**
	 * @return boolean
	 */
	public function getAlsFerien(): bool {
		return $this->alsFerien;
	}

	/**
	 * @return date
	 */
	public function getBisdatum(): date {
		return $this->bisdatum;
	}

	/**
	 * @return string
	 */
	public function getBranchen(): string {
		return $this->branchen;
	}

	/**
	 * @return boolean
	 */
	public function getDenkmalgeschuetzt(): bool {
		return $this->denkmalgeschuetzt;
	}

	/**
	 * @return Geschlecht
	 */
	public function getGeschlecht(): Geschlecht {
		return $this->geschlecht;
	}

	/**
	 * @return boolean
	 */
	public function getGewerblicheNutzung(): bool {
		return $this->gewerblicheNutzung;
	}

	/**
	 * @return string
	 */
	public function getGruppennummer(): string {
		return $this->gruppennummer;
	}

	/**
	 * @return boolean
	 */
	public function getHaustiere(): bool {
		return $this->haustiere;
	}

	/**
	 * @return boolean
	 */
	public function getHochhaus(): bool {
		return $this->hochhaus;
	}

	/**
	 * @return decimal
	 */
	public function getLaufzeit(): decimal {
		return $this->laufzeit;
	}

	/**
	 * @return MaxMietdauer
	 */
	public function getMaxMietdauer(): MaxMietdauer {
		return $this->maxMietdauer;
	}

	/**
	 * @return positiveInteger
	 */
	public function getMaxPersonen(): positiveInteger {
		return $this->maxPersonen;
	}

	/**
	 * @return MinMietdauer
	 */
	public function getMinMietdauer(): MinMietdauer {
		return $this->minMietdauer;
	}

	/**
	 * @return boolean
	 */
	public function getNichtraucher(): bool {
		return $this->nichtraucher;
	}

	/**
	 * @return boolean
	 */
	public function getObjektadresseFreigeben(): bool {
		return $this->objektadresseFreigeben;
	}

	/**
	 * Returns array of UserDefinedAnyfield[]
	 *
	 * @return array
	 */
	public function getUserDefinedAnyfield(): array {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend[]
	 *
	 * @return array
	 */
	public function getUserDefinedExtend(): array {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield[]
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield(): array {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @return string
	 */
	public function getVerfuegbarAb(): string {
		return $this->verfuegbarAb;
	}

	/**
	 * @return boolean
	 */
	public function getVermietet(): bool {
		return $this->vermietet;
	}

	/**
	 * @return date
	 */
	public function getVersteigerungstermin(): date {
		return $this->versteigerungstermin;
	}

	/**
	 * @return boolean
	 */
	public function getWbsSozialwohnung(): bool {
		return $this->wbsSozialwohnung;
	}

	/**
	 * @return string
	 */
	public function getZugang(): string {
		return $this->zugang;
	}

	/**
	 * @param date $abdatum Setter for abdatum
	 * @return VerwaltungObjekt
	 */
	public function setAbdatum(date $abdatum) {
		$this->abdatum = $abdatum;
		return $this;
	}

	/**
	 * @param boolean $alsFerien Setter for alsFerien
	 * @return VerwaltungObjekt
	 */
	public function setAlsFerien(bool $alsFerien) {
		$this->alsFerien = $alsFerien;
		return $this;
	}

	/**
	 * @param date $bisdatum Setter for bisdatum
	 * @return VerwaltungObjekt
	 */
	public function setBisdatum(date $bisdatum) {
		$this->bisdatum = $bisdatum;
		return $this;
	}

	/**
	 * @param string $branchen Setter for branchen
	 * @return VerwaltungObjekt
	 */
	public function setBranchen(string $branchen) {
		$this->branchen = $branchen;
		return $this;
	}

	/**
	 * @param boolean $denkmalgeschuetzt Setter for denkmalgeschuetzt
	 * @return VerwaltungObjekt
	 */
	public function setDenkmalgeschuetzt(bool $denkmalgeschuetzt) {
		$this->denkmalgeschuetzt = $denkmalgeschuetzt;
		return $this;
	}

	/**
	 * @param Geschlecht $geschlecht Setter for geschlecht
	 * @return VerwaltungObjekt
	 */
	public function setGeschlecht(Geschlecht $geschlecht) {
		$this->geschlecht = $geschlecht;
		return $this;
	}

	/**
	 * @param boolean $gewerblicheNutzung Setter for gewerblicheNutzung
	 * @return VerwaltungObjekt
	 */
	public function setGewerblicheNutzung(bool $gewerblicheNutzung) {
		$this->gewerblicheNutzung = $gewerblicheNutzung;
		return $this;
	}

	/**
	 * @param string $gruppennummer Setter for gruppennummer
	 * @return VerwaltungObjekt
	 */
	public function setGruppennummer(string $gruppennummer) {
		$this->gruppennummer = $gruppennummer;
		return $this;
	}

	/**
	 * @param boolean $haustiere Setter for haustiere
	 * @return VerwaltungObjekt
	 */
	public function setHaustiere(bool $haustiere) {
		$this->haustiere = $haustiere;
		return $this;
	}

	/**
	 * @param boolean $hochhaus Setter for hochhaus
	 * @return VerwaltungObjekt
	 */
	public function setHochhaus(bool $hochhaus) {
		$this->hochhaus = $hochhaus;
		return $this;
	}

	/**
	 * @param decimal $laufzeit Setter for laufzeit
	 * @return VerwaltungObjekt
	 */
	public function setLaufzeit(decimal $laufzeit) {
		$this->laufzeit = $laufzeit;
		return $this;
	}

	/**
	 * @param MaxMietdauer $maxMietdauer Setter for maxMietdauer
	 * @return VerwaltungObjekt
	 */
	public function setMaxMietdauer(MaxMietdauer $maxMietdauer) {
		$this->maxMietdauer = $maxMietdauer;
		return $this;
	}

	/**
	 * @param positiveInteger $maxPersonen Setter for maxPersonen
	 * @return VerwaltungObjekt
	 */
	public function setMaxPersonen(positiveInteger $maxPersonen) {
		$this->maxPersonen = $maxPersonen;
		return $this;
	}

	/**
	 * @param MinMietdauer $minMietdauer Setter for minMietdauer
	 * @return VerwaltungObjekt
	 */
	public function setMinMietdauer(MinMietdauer $minMietdauer) {
		$this->minMietdauer = $minMietdauer;
		return $this;
	}

	/**
	 * @param boolean $nichtraucher Setter for nichtraucher
	 * @return VerwaltungObjekt
	 */
	public function setNichtraucher(bool $nichtraucher) {
		$this->nichtraucher = $nichtraucher;
		return $this;
	}

	/**
	 * @param boolean $objektadresseFreigeben Setter for objektadresseFreigeben
	 * @return VerwaltungObjekt
	 */
	public function setObjektadresseFreigeben(bool $objektadresseFreigeben) {
		$this->objektadresseFreigeben = $objektadresseFreigeben;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return VerwaltungObjekt
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return VerwaltungObjekt
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return VerwaltungObjekt
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param string $verfuegbarAb Setter for verfuegbarAb
	 * @return VerwaltungObjekt
	 */
	public function setVerfuegbarAb(string $verfuegbarAb) {
		$this->verfuegbarAb = $verfuegbarAb;
		return $this;
	}

	/**
	 * @param boolean $vermietet Setter for vermietet
	 * @return VerwaltungObjekt
	 */
	public function setVermietet(bool $vermietet) {
		$this->vermietet = $vermietet;
		return $this;
	}

	/**
	 * @param date $versteigerungstermin Setter for versteigerungstermin
	 * @return VerwaltungObjekt
	 */
	public function setVersteigerungstermin(date $versteigerungstermin) {
		$this->versteigerungstermin = $versteigerungstermin;
		return $this;
	}

	/**
	 * @param boolean $wbsSozialwohnung Setter for wbsSozialwohnung
	 * @return VerwaltungObjekt
	 */
	public function setWbsSozialwohnung(bool $wbsSozialwohnung) {
		$this->wbsSozialwohnung = $wbsSozialwohnung;
		return $this;
	}

	/**
	 * @param string $zugang Setter for zugang
	 * @return VerwaltungObjekt
	 */
	public function setZugang(string $zugang) {
		$this->zugang = $zugang;
		return $this;
	}
}