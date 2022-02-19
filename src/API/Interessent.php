<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Interessent
 *
 * @XmlRoot("interessent") 
 */
class Interessent {

	/**
	 */
	const BEVORZUGT_BRIEF = 'BRIEF';

	/**
	 */
	const BEVORZUGT_EMAIL = 'EMAIL';

	/**
	 */
	const BEVORZUGT_FAX = 'FAX';

	/**
	 */
	const BEVORZUGT_MOBIL = 'MOBIL';

	/**
	 */
	const BEVORZUGT_TEL = 'TEL';

	/**
	 */
	const WUNSCH_ANRUF = 'ANRUF';

	/**
	 */
	const WUNSCH_BESICHTIGUNG = 'BESICHTIGUNG';

	/**
	 */
	const WUNSCH_DETAIL = 'DETAIL';

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $anfrage;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $anrede;

	/**
	 * @XmlList(inline = true, entry = "bevorzugt") 
	 * @Type("array<string>") 
	 * @see BEVORZUGT_* constants
	 * @var string[]
	 */
	protected $bevorzugt;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $email;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $fax;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $firma;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $intId;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $mobil;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $nachname;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $ort;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $plz;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $postfach;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $strasse;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $tel;

	/**
	 * @XmlList(inline = true, entry = "user_defined_extend") 
	 * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>") 
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $vorname;

	/**
	 * @XmlList(inline = true, entry = "wunsch") 
	 * @Type("array<string>") 
	 * @see WUNSCH_* constants
	 * @var string[]
	 */
	protected $wunsch;

	/**
	 * @return string
	 */
	public function getAnfrage(): ?string {
		return $this->anfrage;
	}

	/**
	 * @return string
	 */
	public function getAnrede(): ?string {
		return $this->anrede;
	}

	/**
	 * Returns array of string
	 *
	 * @return array
	 */
	public function getBevorzugt(): array {
		return $this->bevorzugt ?? [];
	}

	/**
	 * @return string
	 */
	public function getEmail(): ?string {
		return $this->email;
	}

	/**
	 * @return string
	 */
	public function getFax(): ?string {
		return $this->fax;
	}

	/**
	 * @return string
	 */
	public function getFirma(): ?string {
		return $this->firma;
	}

	/**
	 * @return string
	 */
	public function getIntId(): ?string {
		return $this->intId;
	}

	/**
	 * @return string
	 */
	public function getMobil(): ?string {
		return $this->mobil;
	}

	/**
	 * @return string
	 */
	public function getNachname(): ?string {
		return $this->nachname;
	}

	/**
	 * @return string
	 */
	public function getOrt(): ?string {
		return $this->ort;
	}

	/**
	 * @return string
	 */
	public function getPlz(): ?string {
		return $this->plz;
	}

	/**
	 * @return string
	 */
	public function getPostfach(): ?string {
		return $this->postfach;
	}

	/**
	 * @return string
	 */
	public function getStrasse(): ?string {
		return $this->strasse;
	}

	/**
	 * @return string
	 */
	public function getTel(): ?string {
		return $this->tel;
	}

	/**
	 * Returns array of UserDefinedExtend
	 *
	 * @return array
	 */
	public function getUserDefinedExtend(): array {
		return $this->userDefinedExtend ?? [];
	}

	/**
	 * @return string
	 */
	public function getVorname(): ?string {
		return $this->vorname;
	}

	/**
	 * Returns array of string
	 *
	 * @return array
	 */
	public function getWunsch(): array {
		return $this->wunsch ?? [];
	}

	/**
	 * @param string $anfrage Setter for anfrage
	 * @return Interessent
	 */
	public function setAnfrage(?string $anfrage) {
		$this->anfrage = $anfrage;
		return $this;
	}

	/**
	 * @param string $anrede Setter for anrede
	 * @return Interessent
	 */
	public function setAnrede(?string $anrede) {
		$this->anrede = $anrede;
		return $this;
	}

	/**
	 * @param array $bevorzugt Setter for bevorzugt
	 * @return Interessent
	 */
	public function setBevorzugt(array $bevorzugt) {
		$this->bevorzugt = $bevorzugt;
		return $this;
	}

	/**
	 * @param string $email Setter for email
	 * @return Interessent
	 */
	public function setEmail(?string $email) {
		$this->email = $email;
		return $this;
	}

	/**
	 * @param string $fax Setter for fax
	 * @return Interessent
	 */
	public function setFax(?string $fax) {
		$this->fax = $fax;
		return $this;
	}

	/**
	 * @param string $firma Setter for firma
	 * @return Interessent
	 */
	public function setFirma(?string $firma) {
		$this->firma = $firma;
		return $this;
	}

	/**
	 * @param string $intId Setter for intId
	 * @return Interessent
	 */
	public function setIntId(?string $intId) {
		$this->intId = $intId;
		return $this;
	}

	/**
	 * @param string $mobil Setter for mobil
	 * @return Interessent
	 */
	public function setMobil(?string $mobil) {
		$this->mobil = $mobil;
		return $this;
	}

	/**
	 * @param string $nachname Setter for nachname
	 * @return Interessent
	 */
	public function setNachname(?string $nachname) {
		$this->nachname = $nachname;
		return $this;
	}

	/**
	 * @param string $ort Setter for ort
	 * @return Interessent
	 */
	public function setOrt(?string $ort) {
		$this->ort = $ort;
		return $this;
	}

	/**
	 * @param string $plz Setter for plz
	 * @return Interessent
	 */
	public function setPlz(?string $plz) {
		$this->plz = $plz;
		return $this;
	}

	/**
	 * @param string $postfach Setter for postfach
	 * @return Interessent
	 */
	public function setPostfach(?string $postfach) {
		$this->postfach = $postfach;
		return $this;
	}

	/**
	 * @param string $strasse Setter for strasse
	 * @return Interessent
	 */
	public function setStrasse(?string $strasse) {
		$this->strasse = $strasse;
		return $this;
	}

	/**
	 * @param string $tel Setter for tel
	 * @return Interessent
	 */
	public function setTel(?string $tel) {
		$this->tel = $tel;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Interessent
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param string $vorname Setter for vorname
	 * @return Interessent
	 */
	public function setVorname(?string $vorname) {
		$this->vorname = $vorname;
		return $this;
	}

	/**
	 * @param array $wunsch Setter for wunsch
	 * @return Interessent
	 */
	public function setWunsch(array $wunsch) {
		$this->wunsch = $wunsch;
		return $this;
	}
}
