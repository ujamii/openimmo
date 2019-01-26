<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ZustandAngaben
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("zustand_angaben") 
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
	 * @XmlList(inline = true, entry = "energiepass") 
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
	 * @XmlList(inline = true, entry = "user_defined_anyfield") 
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @XmlList(inline = true, entry = "user_defined_extend") 
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @XmlList(inline = true, entry = "user_defined_simplefield") 
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
	public function getAlter(): Alter {
		return $this->alter;
	}

	/**
	 * @return string
	 */
	public function getAltlasten(): string {
		return $this->altlasten;
	}

	/**
	 * @return string
	 */
	public function getBaujahr(): string {
		return $this->baujahr;
	}

	/**
	 * @return string
	 */
	public function getBauzone(): string {
		return $this->bauzone;
	}

	/**
	 * @return BebaubarNach
	 */
	public function getBebaubarNach(): BebaubarNach {
		return $this->bebaubarNach;
	}

	/**
	 * Returns array of Energiepass
	 *
	 * @return array
	 */
	public function getEnergiepass(): array {
		return $this->energiepass;
	}

	/**
	 * @return Erschliessung
	 */
	public function getErschliessung(): Erschliessung {
		return $this->erschliessung;
	}

	/**
	 * @return ErschliessungUmfang
	 */
	public function getErschliessungUmfang(): ErschliessungUmfang {
		return $this->erschliessungUmfang;
	}

	/**
	 * @return string
	 */
	public function getLetztemodernisierung(): string {
		return $this->letztemodernisierung;
	}

	/**
	 * Returns array of UserDefinedAnyfield
	 *
	 * @return array
	 */
	public function getUserDefinedAnyfield(): array {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend
	 *
	 * @return array
	 */
	public function getUserDefinedExtend(): array {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield(): array {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @return Verkaufstatus
	 */
	public function getVerkaufstatus(): Verkaufstatus {
		return $this->verkaufstatus;
	}

	/**
	 * @return Zustand
	 */
	public function getZustand(): Zustand {
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
	public function setAltlasten(string $altlasten) {
		$this->altlasten = $altlasten;
		return $this;
	}

	/**
	 * @param string $baujahr Setter for baujahr
	 * @return ZustandAngaben
	 */
	public function setBaujahr(string $baujahr) {
		$this->baujahr = $baujahr;
		return $this;
	}

	/**
	 * @param string $bauzone Setter for bauzone
	 * @return ZustandAngaben
	 */
	public function setBauzone(string $bauzone) {
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
	public function setLetztemodernisierung(string $letztemodernisierung) {
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
