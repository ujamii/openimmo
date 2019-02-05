<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class VerwaltungTechn
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("verwaltung_techn") 
 */
class VerwaltungTechn {

	/**
	 * @Type("Ujamii\OpenImmo\API\Aktion") 
	 * @var Aktion
	 */
	protected $aktion;

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $aktivBis;

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $aktivVon;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $gruppenKennung;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $kennungUrsprung;

	/**
	 * @Type("Ujamii\OpenImmo\API\Master") 
	 * @var Master
	 */
	protected $master;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $objektnrExtern;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $objektnrIntern;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $openimmoObid;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $sprache;

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $standVom;

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
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $weitergabeGenerell;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $weitergabeNegativ;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $weitergabePositiv;

	/**
	 * @return Aktion
	 */
	public function getAktion(): Aktion {
		return $this->aktion;
	}

	/**
	 * @return \DateTime
	 */
	public function getAktivBis(): \DateTime {
		return $this->aktivBis;
	}

	/**
	 * @return \DateTime
	 */
	public function getAktivVon(): \DateTime {
		return $this->aktivVon;
	}

	/**
	 * @return string
	 */
	public function getGruppenKennung(): string {
		return $this->gruppenKennung;
	}

	/**
	 * @return string
	 */
	public function getKennungUrsprung(): string {
		return $this->kennungUrsprung;
	}

	/**
	 * @return Master
	 */
	public function getMaster(): Master {
		return $this->master;
	}

	/**
	 * @return string
	 */
	public function getObjektnrExtern(): string {
		return $this->objektnrExtern;
	}

	/**
	 * @return string
	 */
	public function getObjektnrIntern(): string {
		return $this->objektnrIntern;
	}

	/**
	 * @return string
	 */
	public function getOpenimmoObid(): string {
		return $this->openimmoObid;
	}

	/**
	 * @return string
	 */
	public function getSprache(): string {
		return $this->sprache;
	}

	/**
	 * @return \DateTime
	 */
	public function getStandVom(): \DateTime {
		return $this->standVom;
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
	 * @return boolean
	 */
	public function getWeitergabeGenerell(): bool {
		return $this->weitergabeGenerell;
	}

	/**
	 * @return string
	 */
	public function getWeitergabeNegativ(): string {
		return $this->weitergabeNegativ;
	}

	/**
	 * @return string
	 */
	public function getWeitergabePositiv(): string {
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
	 * @param \DateTime $aktivBis Setter for aktivBis
	 * @return VerwaltungTechn
	 */
	public function setAktivBis(\DateTime $aktivBis) {
		$this->aktivBis = $aktivBis;
		return $this;
	}

	/**
	 * @param \DateTime $aktivVon Setter for aktivVon
	 * @return VerwaltungTechn
	 */
	public function setAktivVon(\DateTime $aktivVon) {
		$this->aktivVon = $aktivVon;
		return $this;
	}

	/**
	 * @param string $gruppenKennung Setter for gruppenKennung
	 * @return VerwaltungTechn
	 */
	public function setGruppenKennung(string $gruppenKennung) {
		$this->gruppenKennung = $gruppenKennung;
		return $this;
	}

	/**
	 * @param string $kennungUrsprung Setter for kennungUrsprung
	 * @return VerwaltungTechn
	 */
	public function setKennungUrsprung(string $kennungUrsprung) {
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
	public function setObjektnrExtern(string $objektnrExtern) {
		$this->objektnrExtern = $objektnrExtern;
		return $this;
	}

	/**
	 * @param string $objektnrIntern Setter for objektnrIntern
	 * @return VerwaltungTechn
	 */
	public function setObjektnrIntern(string $objektnrIntern) {
		$this->objektnrIntern = $objektnrIntern;
		return $this;
	}

	/**
	 * @param string $openimmoObid Setter for openimmoObid
	 * @return VerwaltungTechn
	 */
	public function setOpenimmoObid(string $openimmoObid) {
		$this->openimmoObid = $openimmoObid;
		return $this;
	}

	/**
	 * @param string $sprache Setter for sprache
	 * @return VerwaltungTechn
	 */
	public function setSprache(string $sprache) {
		$this->sprache = $sprache;
		return $this;
	}

	/**
	 * @param \DateTime $standVom Setter for standVom
	 * @return VerwaltungTechn
	 */
	public function setStandVom(\DateTime $standVom) {
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
	public function setWeitergabeGenerell(bool $weitergabeGenerell) {
		$this->weitergabeGenerell = $weitergabeGenerell;
		return $this;
	}

	/**
	 * @param string $weitergabeNegativ Setter for weitergabeNegativ
	 * @return VerwaltungTechn
	 */
	public function setWeitergabeNegativ(string $weitergabeNegativ) {
		$this->weitergabeNegativ = $weitergabeNegativ;
		return $this;
	}

	/**
	 * @param string $weitergabePositiv Setter for weitergabePositiv
	 * @return VerwaltungTechn
	 */
	public function setWeitergabePositiv(string $weitergabePositiv) {
		$this->weitergabePositiv = $weitergabePositiv;
		return $this;
	}
}
