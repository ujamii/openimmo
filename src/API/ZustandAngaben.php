<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class ZustandAngaben {

	/**
	 * @var Alter
	 */
	protected $alter;

	/**
	 * @var string
	 */
	protected $altlasten;

	/**
	 * @var string
	 */
	protected $baujahr;

	/**
	 * @var string
	 */
	protected $bauzone;

	/**
	 * @var BebaubarNach
	 */
	protected $bebaubarNach;

	/**
	 * @var Energiepass[]
	 */
	protected $energiepass;

	/**
	 * @var Erschliessung
	 */
	protected $erschliessung;

	/**
	 * @var ErschliessungUmfang
	 */
	protected $erschliessungUmfang;

	/**
	 * @var string
	 */
	protected $letztemodernisierung;

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
	 * @var Verkaufstatus
	 */
	protected $verkaufstatus;

	/**
	 * @var Zustand
	 */
	protected $zustand;

	/**
	 * @return Alter
	 */
	public function getAlter() {
		return $this->alter;
	}

	/**
	 * @return string
	 */
	public function getAltlasten() {
		return $this->altlasten;
	}

	/**
	 * @return string
	 */
	public function getBaujahr() {
		return $this->baujahr;
	}

	/**
	 * @return string
	 */
	public function getBauzone() {
		return $this->bauzone;
	}

	/**
	 * @return BebaubarNach
	 */
	public function getBebaubarNach() {
		return $this->bebaubarNach;
	}

	/**
	 * @return Energiepass[]
	 */
	public function getEnergiepass() {
		return $this->energiepass;
	}

	/**
	 * @return Erschliessung
	 */
	public function getErschliessung() {
		return $this->erschliessung;
	}

	/**
	 * @return ErschliessungUmfang
	 */
	public function getErschliessungUmfang() {
		return $this->erschliessungUmfang;
	}

	/**
	 * @return string
	 */
	public function getLetztemodernisierung() {
		return $this->letztemodernisierung;
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
	 * @return Verkaufstatus
	 */
	public function getVerkaufstatus() {
		return $this->verkaufstatus;
	}

	/**
	 * @return Zustand
	 */
	public function getZustand() {
		return $this->zustand;
	}

	/**
	 * @param Alter $alter Setter for alter
	 * @return ZustandAngaben
	 */
	public function setAlter(Alter $alter) {
		$this->alter = $alter;
		return $this;
	}

	/**
	 * @param string $altlasten Setter for altlasten
	 * @return ZustandAngaben
	 */
	public function setAltlasten($altlasten) {
		$this->altlasten = $altlasten;
		return $this;
	}

	/**
	 * @param string $baujahr Setter for baujahr
	 * @return ZustandAngaben
	 */
	public function setBaujahr($baujahr) {
		$this->baujahr = $baujahr;
		return $this;
	}

	/**
	 * @param string $bauzone Setter for bauzone
	 * @return ZustandAngaben
	 */
	public function setBauzone($bauzone) {
		$this->bauzone = $bauzone;
		return $this;
	}

	/**
	 * @param BebaubarNach $bebaubarNach Setter for bebaubarNach
	 * @return ZustandAngaben
	 */
	public function setBebaubarNach(BebaubarNach $bebaubarNach) {
		$this->bebaubarNach = $bebaubarNach;
		return $this;
	}

	/**
	 * @param array $energiepass Setter for energiepass
	 * @return ZustandAngaben
	 */
	public function setEnergiepass(array $energiepass) {
		$this->energiepass = $energiepass;
		return $this;
	}

	/**
	 * @param Erschliessung $erschliessung Setter for erschliessung
	 * @return ZustandAngaben
	 */
	public function setErschliessung(Erschliessung $erschliessung) {
		$this->erschliessung = $erschliessung;
		return $this;
	}

	/**
	 * @param ErschliessungUmfang $erschliessungUmfang Setter for erschliessungUmfang
	 * @return ZustandAngaben
	 */
	public function setErschliessungUmfang(ErschliessungUmfang $erschliessungUmfang) {
		$this->erschliessungUmfang = $erschliessungUmfang;
		return $this;
	}

	/**
	 * @param string $letztemodernisierung Setter for letztemodernisierung
	 * @return ZustandAngaben
	 */
	public function setLetztemodernisierung($letztemodernisierung) {
		$this->letztemodernisierung = $letztemodernisierung;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return ZustandAngaben
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return ZustandAngaben
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return ZustandAngaben
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param Verkaufstatus $verkaufstatus Setter for verkaufstatus
	 * @return ZustandAngaben
	 */
	public function setVerkaufstatus(Verkaufstatus $verkaufstatus) {
		$this->verkaufstatus = $verkaufstatus;
		return $this;
	}

	/**
	 * @param Zustand $zustand Setter for zustand
	 * @return ZustandAngaben
	 */
	public function setZustand(Zustand $zustand) {
		$this->zustand = $zustand;
		return $this;
	}
}
