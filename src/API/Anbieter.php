<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anbieter
 * Anbieterangaben
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("anbieter") 
 */
class Anbieter {

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $anbieternr;

	/**
	 * @Type("Ujamii\OpenImmo\API\Anhang") 
	 * @var Anhang
	 */
	protected $anhang;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $firma;

	/**
	 * @XmlList(inline = true, entry = "immobilie") 
	 * @Type("array<Ujamii\OpenImmo\API\Immobilie>") 
	 * @var Immobilie[]
	 */
	protected $immobilie;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $impressum;

	/**
	 * @Type("Ujamii\OpenImmo\API\ImpressumStrukt") 
	 * @var ImpressumStrukt
	 */
	protected $impressumStrukt;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $lizenzkennung;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $openimmoAnid;

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
	 * @return string
	 */
	public function getAnbieternr(): string {
		return $this->anbieternr;
	}

	/**
	 * @return Anhang
	 */
	public function getAnhang(): Anhang {
		return $this->anhang;
	}

	/**
	 * @return string
	 */
	public function getFirma(): string {
		return $this->firma;
	}

	/**
	 * Returns array of Immobilie
	 *
	 * @return array
	 */
	public function getImmobilie(): array {
		return $this->immobilie;
	}

	/**
	 * @return string
	 */
	public function getImpressum(): string {
		return $this->impressum;
	}

	/**
	 * @return ImpressumStrukt
	 */
	public function getImpressumStrukt(): ImpressumStrukt {
		return $this->impressumStrukt;
	}

	/**
	 * @return string
	 */
	public function getLizenzkennung(): string {
		return $this->lizenzkennung;
	}

	/**
	 * @return string
	 */
	public function getOpenimmoAnid(): string {
		return $this->openimmoAnid;
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
	 * @param string $anbieternr Setter for anbieternr
	 * @return Anbieter
	 */
	public function setAnbieternr(string $anbieternr) {
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
	public function setFirma(string $firma) {
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
	public function setImpressum(string $impressum) {
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
	public function setLizenzkennung(string $lizenzkennung) {
		$this->lizenzkennung = $lizenzkennung;
		return $this;
	}

	/**
	 * @param string $openimmoAnid Setter for openimmoAnid
	 * @return Anbieter
	 */
	public function setOpenimmoAnid(string $openimmoAnid) {
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
