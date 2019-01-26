<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Anbieter {

	/**
	 * @var string
	 */
	protected $anbieternr;

	/**
	 * @var Anhang
	 */
	protected $anhang;

	/**
	 * @var string
	 */
	protected $firma;

	/**
	 * @var Immobilie[]
	 */
	protected $immobilie;

	/**
	 * @var string
	 */
	protected $impressum;

	/**
	 * @var ImpressumStrukt
	 */
	protected $impressumStrukt;

	/**
	 * @var string
	 */
	protected $lizenzkennung;

	/**
	 * @var string
	 */
	protected $openimmoAnid;

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
	 * @return string
	 */
	public function getAnbieternr() {
		return $this->anbieternr;
	}

	/**
	 * @return Anhang
	 */
	public function getAnhang() {
		return $this->anhang;
	}

	/**
	 * @return string
	 */
	public function getFirma() {
		return $this->firma;
	}

	/**
	 * @return Immobilie[]
	 */
	public function getImmobilie() {
		return $this->immobilie;
	}

	/**
	 * @return string
	 */
	public function getImpressum() {
		return $this->impressum;
	}

	/**
	 * @return ImpressumStrukt
	 */
	public function getImpressumStrukt() {
		return $this->impressumStrukt;
	}

	/**
	 * @return string
	 */
	public function getLizenzkennung() {
		return $this->lizenzkennung;
	}

	/**
	 * @return string
	 */
	public function getOpenimmoAnid() {
		return $this->openimmoAnid;
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
	 * @param string $anbieternr Setter for anbieternr
	 * @return Anbieter
	 */
	public function setAnbieternr($anbieternr) {
		$this->anbieternr = $anbieternr;
		return $this;
	}

	/**
	 * @param Anhang $anhang Setter for anhang
	 * @return Anbieter
	 */
	public function setAnhang(Anhang $anhang) {
		$this->anhang = $anhang;
		return $this;
	}

	/**
	 * @param string $firma Setter for firma
	 * @return Anbieter
	 */
	public function setFirma($firma) {
		$this->firma = $firma;
		return $this;
	}

	/**
	 * @param array $immobilie Setter for immobilie
	 * @return Anbieter
	 */
	public function setImmobilie(array $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param string $impressum Setter for impressum
	 * @return Anbieter
	 */
	public function setImpressum($impressum) {
		$this->impressum = $impressum;
		return $this;
	}

	/**
	 * @param ImpressumStrukt $impressumStrukt Setter for impressumStrukt
	 * @return Anbieter
	 */
	public function setImpressumStrukt(ImpressumStrukt $impressumStrukt) {
		$this->impressumStrukt = $impressumStrukt;
		return $this;
	}

	/**
	 * @param string $lizenzkennung Setter for lizenzkennung
	 * @return Anbieter
	 */
	public function setLizenzkennung($lizenzkennung) {
		$this->lizenzkennung = $lizenzkennung;
		return $this;
	}

	/**
	 * @param string $openimmoAnid Setter for openimmoAnid
	 * @return Anbieter
	 */
	public function setOpenimmoAnid($openimmoAnid) {
		$this->openimmoAnid = $openimmoAnid;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Anbieter
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Anbieter
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Anbieter
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
