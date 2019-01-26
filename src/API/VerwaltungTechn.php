<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class VerwaltungTechn {

	/**
	 * @var Aktion
	 */
	protected $aktion;

	/**
	 * @var date
	 */
	protected $aktivBis;

	/**
	 * @var date
	 */
	protected $aktivVon;

	/**
	 * @var string
	 */
	protected $gruppenKennung;

	/**
	 * @var string
	 */
	protected $kennungUrsprung;

	/**
	 * @var Master
	 */
	protected $master;

	/**
	 * @var string
	 */
	protected $objektnrExtern;

	/**
	 * @var string
	 */
	protected $objektnrIntern;

	/**
	 * @var string
	 */
	protected $openimmoObid;

	/**
	 * @var string
	 */
	protected $sprache;

	/**
	 * @var date
	 */
	protected $standVom;

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
	protected $weitergabeGenerell;

	/**
	 * @var string
	 */
	protected $weitergabeNegativ;

	/**
	 * @var string
	 */
	protected $weitergabePositiv;

	/**
	 * @return Aktion
	 */
	public function getAktion() {
		return $this->aktion;
	}

	/**
	 * @return date
	 */
	public function getAktivBis() {
		return $this->aktivBis;
	}

	/**
	 * @return date
	 */
	public function getAktivVon() {
		return $this->aktivVon;
	}

	/**
	 * @return string
	 */
	public function getGruppenKennung() {
		return $this->gruppenKennung;
	}

	/**
	 * @return string
	 */
	public function getKennungUrsprung() {
		return $this->kennungUrsprung;
	}

	/**
	 * @return Master
	 */
	public function getMaster() {
		return $this->master;
	}

	/**
	 * @return string
	 */
	public function getObjektnrExtern() {
		return $this->objektnrExtern;
	}

	/**
	 * @return string
	 */
	public function getObjektnrIntern() {
		return $this->objektnrIntern;
	}

	/**
	 * @return string
	 */
	public function getOpenimmoObid() {
		return $this->openimmoObid;
	}

	/**
	 * @return string
	 */
	public function getSprache() {
		return $this->sprache;
	}

	/**
	 * @return date
	 */
	public function getStandVom() {
		return $this->standVom;
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
	public function getWeitergabeGenerell() {
		return $this->weitergabeGenerell;
	}

	/**
	 * @return string
	 */
	public function getWeitergabeNegativ() {
		return $this->weitergabeNegativ;
	}

	/**
	 * @return string
	 */
	public function getWeitergabePositiv() {
		return $this->weitergabePositiv;
	}

	/**
	 * @param Aktion $aktion Setter for aktion
	 * @return VerwaltungTechn
	 */
	public function setAktion(Aktion $aktion) {
		$this->aktion = $aktion;
		return $this;
	}

	/**
	 * @param date $aktivBis Setter for aktivBis
	 * @return VerwaltungTechn
	 */
	public function setAktivBis(date $aktivBis) {
		$this->aktivBis = $aktivBis;
		return $this;
	}

	/**
	 * @param date $aktivVon Setter for aktivVon
	 * @return VerwaltungTechn
	 */
	public function setAktivVon(date $aktivVon) {
		$this->aktivVon = $aktivVon;
		return $this;
	}

	/**
	 * @param string $gruppenKennung Setter for gruppenKennung
	 * @return VerwaltungTechn
	 */
	public function setGruppenKennung($gruppenKennung) {
		$this->gruppenKennung = $gruppenKennung;
		return $this;
	}

	/**
	 * @param string $kennungUrsprung Setter for kennungUrsprung
	 * @return VerwaltungTechn
	 */
	public function setKennungUrsprung($kennungUrsprung) {
		$this->kennungUrsprung = $kennungUrsprung;
		return $this;
	}

	/**
	 * @param Master $master Setter for master
	 * @return VerwaltungTechn
	 */
	public function setMaster(Master $master) {
		$this->master = $master;
		return $this;
	}

	/**
	 * @param string $objektnrExtern Setter for objektnrExtern
	 * @return VerwaltungTechn
	 */
	public function setObjektnrExtern($objektnrExtern) {
		$this->objektnrExtern = $objektnrExtern;
		return $this;
	}

	/**
	 * @param string $objektnrIntern Setter for objektnrIntern
	 * @return VerwaltungTechn
	 */
	public function setObjektnrIntern($objektnrIntern) {
		$this->objektnrIntern = $objektnrIntern;
		return $this;
	}

	/**
	 * @param string $openimmoObid Setter for openimmoObid
	 * @return VerwaltungTechn
	 */
	public function setOpenimmoObid($openimmoObid) {
		$this->openimmoObid = $openimmoObid;
		return $this;
	}

	/**
	 * @param string $sprache Setter for sprache
	 * @return VerwaltungTechn
	 */
	public function setSprache($sprache) {
		$this->sprache = $sprache;
		return $this;
	}

	/**
	 * @param date $standVom Setter for standVom
	 * @return VerwaltungTechn
	 */
	public function setStandVom(date $standVom) {
		$this->standVom = $standVom;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return VerwaltungTechn
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return VerwaltungTechn
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return VerwaltungTechn
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param boolean $weitergabeGenerell Setter for weitergabeGenerell
	 * @return VerwaltungTechn
	 */
	public function setWeitergabeGenerell($weitergabeGenerell) {
		$this->weitergabeGenerell = $weitergabeGenerell;
		return $this;
	}

	/**
	 * @param string $weitergabeNegativ Setter for weitergabeNegativ
	 * @return VerwaltungTechn
	 */
	public function setWeitergabeNegativ($weitergabeNegativ) {
		$this->weitergabeNegativ = $weitergabeNegativ;
		return $this;
	}

	/**
	 * @param string $weitergabePositiv Setter for weitergabePositiv
	 * @return VerwaltungTechn
	 */
	public function setWeitergabePositiv($weitergabePositiv) {
		$this->weitergabePositiv = $weitergabePositiv;
		return $this;
	}
}
