<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Geo {

	/**
	 * @var int
	 */
	protected $anzahlEtagen;

	/**
	 * @var string
	 */
	protected $bundesland;

	/**
	 * @var int
	 */
	protected $etage;

	/**
	 * @var string
	 */
	protected $flur;

	/**
	 * @var string
	 */
	protected $flurstueck;

	/**
	 * @var string
	 */
	protected $gemarkung;

	/**
	 * @var string
	 */
	protected $gemeindecode;

	/**
	 * @var Geokoordinaten
	 */
	protected $geokoordinaten;

	/**
	 * @var string
	 */
	protected $hausnummer;

	/**
	 * @var boolean
	 */
	protected $kartenMakro;

	/**
	 * @var boolean
	 */
	protected $kartenMikro;

	/**
	 * @var LageGebiet
	 */
	protected $lageGebiet;

	/**
	 * @var LageImBau
	 */
	protected $lageImBau;

	/**
	 * @var Land
	 */
	protected $land;

	/**
	 * @var boolean
	 */
	protected $luftbildern;

	/**
	 * @var string
	 */
	protected $ort;

	/**
	 * @var string
	 */
	protected $plz;

	/**
	 * @var string
	 */
	protected $regionalerZusatz;

	/**
	 * @var string
	 */
	protected $strasse;

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
	 * @var boolean
	 */
	protected $virtuelletour;

	/**
	 * @var string
	 */
	protected $wohnungsnr;

	/**
	 * @return int
	 */
	public function getAnzahlEtagen() {
		return $this->anzahlEtagen;
	}

	/**
	 * @return string
	 */
	public function getBundesland() {
		return $this->bundesland;
	}

	/**
	 * @return int
	 */
	public function getEtage() {
		return $this->etage;
	}

	/**
	 * @return string
	 */
	public function getFlur() {
		return $this->flur;
	}

	/**
	 * @return string
	 */
	public function getFlurstueck() {
		return $this->flurstueck;
	}

	/**
	 * @return string
	 */
	public function getGemarkung() {
		return $this->gemarkung;
	}

	/**
	 * @return string
	 */
	public function getGemeindecode() {
		return $this->gemeindecode;
	}

	/**
	 * @return Geokoordinaten
	 */
	public function getGeokoordinaten() {
		return $this->geokoordinaten;
	}

	/**
	 * @return string
	 */
	public function getHausnummer() {
		return $this->hausnummer;
	}

	/**
	 * @return boolean
	 */
	public function getKartenMakro() {
		return $this->kartenMakro;
	}

	/**
	 * @return boolean
	 */
	public function getKartenMikro() {
		return $this->kartenMikro;
	}

	/**
	 * @return LageGebiet
	 */
	public function getLageGebiet() {
		return $this->lageGebiet;
	}

	/**
	 * @return LageImBau
	 */
	public function getLageImBau() {
		return $this->lageImBau;
	}

	/**
	 * @return Land
	 */
	public function getLand() {
		return $this->land;
	}

	/**
	 * @return boolean
	 */
	public function getLuftbildern() {
		return $this->luftbildern;
	}

	/**
	 * @return string
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * @return string
	 */
	public function getPlz() {
		return $this->plz;
	}

	/**
	 * @return string
	 */
	public function getRegionalerZusatz() {
		return $this->regionalerZusatz;
	}

	/**
	 * @return string
	 */
	public function getStrasse() {
		return $this->strasse;
	}

	/**
	 * @return UserDefinedAnyfield[]
	 */
	public function getUserDefinedAnyfield() {
		return $this->userDefinedAnyfield;
	}

	/**
	 * @return UserDefinedExtend[]
	 */
	public function getUserDefinedExtend() {
		return $this->userDefinedExtend;
	}

	/**
	 * @return UserDefinedSimplefield[]
	 */
	public function getUserDefinedSimplefield() {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @return boolean
	 */
	public function getVirtuelletour() {
		return $this->virtuelletour;
	}

	/**
	 * @return string
	 */
	public function getWohnungsnr() {
		return $this->wohnungsnr;
	}

	/**
	 * @param int $anzahlEtagen Setter for anzahlEtagen
	 * @return Geo
	 */
	public function setAnzahlEtagen($anzahlEtagen) {
		$this->anzahlEtagen = $anzahlEtagen;
		return $this;
	}

	/**
	 * @param string $bundesland Setter for bundesland
	 * @return Geo
	 */
	public function setBundesland($bundesland) {
		$this->bundesland = $bundesland;
		return $this;
	}

	/**
	 * @param int $etage Setter for etage
	 * @return Geo
	 */
	public function setEtage($etage) {
		$this->etage = $etage;
		return $this;
	}

	/**
	 * @param string $flur Setter for flur
	 * @return Geo
	 */
	public function setFlur($flur) {
		$this->flur = $flur;
		return $this;
	}

	/**
	 * @param string $flurstueck Setter for flurstueck
	 * @return Geo
	 */
	public function setFlurstueck($flurstueck) {
		$this->flurstueck = $flurstueck;
		return $this;
	}

	/**
	 * @param string $gemarkung Setter for gemarkung
	 * @return Geo
	 */
	public function setGemarkung($gemarkung) {
		$this->gemarkung = $gemarkung;
		return $this;
	}

	/**
	 * @param string $gemeindecode Setter for gemeindecode
	 * @return Geo
	 */
	public function setGemeindecode($gemeindecode) {
		$this->gemeindecode = $gemeindecode;
		return $this;
	}

	/**
	 * @param Geokoordinaten $geokoordinaten Setter for geokoordinaten
	 * @return Geo
	 */
	public function setGeokoordinaten(Geokoordinaten $geokoordinaten) {
		$this->geokoordinaten = $geokoordinaten;
		return $this;
	}

	/**
	 * @param string $hausnummer Setter for hausnummer
	 * @return Geo
	 */
	public function setHausnummer($hausnummer) {
		$this->hausnummer = $hausnummer;
		return $this;
	}

	/**
	 * @param boolean $kartenMakro Setter for kartenMakro
	 * @return Geo
	 */
	public function setKartenMakro($kartenMakro) {
		$this->kartenMakro = $kartenMakro;
		return $this;
	}

	/**
	 * @param boolean $kartenMikro Setter for kartenMikro
	 * @return Geo
	 */
	public function setKartenMikro($kartenMikro) {
		$this->kartenMikro = $kartenMikro;
		return $this;
	}

	/**
	 * @param LageGebiet $lageGebiet Setter for lageGebiet
	 * @return Geo
	 */
	public function setLageGebiet(LageGebiet $lageGebiet) {
		$this->lageGebiet = $lageGebiet;
		return $this;
	}

	/**
	 * @param LageImBau $lageImBau Setter for lageImBau
	 * @return Geo
	 */
	public function setLageImBau(LageImBau $lageImBau) {
		$this->lageImBau = $lageImBau;
		return $this;
	}

	/**
	 * @param Land $land Setter for land
	 * @return Geo
	 */
	public function setLand(Land $land) {
		$this->land = $land;
		return $this;
	}

	/**
	 * @param boolean $luftbildern Setter for luftbildern
	 * @return Geo
	 */
	public function setLuftbildern($luftbildern) {
		$this->luftbildern = $luftbildern;
		return $this;
	}

	/**
	 * @param string $ort Setter for ort
	 * @return Geo
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
		return $this;
	}

	/**
	 * @param string $plz Setter for plz
	 * @return Geo
	 */
	public function setPlz($plz) {
		$this->plz = $plz;
		return $this;
	}

	/**
	 * @param string $regionalerZusatz Setter for regionalerZusatz
	 * @return Geo
	 */
	public function setRegionalerZusatz($regionalerZusatz) {
		$this->regionalerZusatz = $regionalerZusatz;
		return $this;
	}

	/**
	 * @param string $strasse Setter for strasse
	 * @return Geo
	 */
	public function setStrasse($strasse) {
		$this->strasse = $strasse;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Geo
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Geo
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Geo
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param boolean $virtuelletour Setter for virtuelletour
	 * @return Geo
	 */
	public function setVirtuelletour($virtuelletour) {
		$this->virtuelletour = $virtuelletour;
		return $this;
	}

	/**
	 * @param string $wohnungsnr Setter for wohnungsnr
	 * @return Geo
	 */
	public function setWohnungsnr($wohnungsnr) {
		$this->wohnungsnr = $wohnungsnr;
		return $this;
	}
}
