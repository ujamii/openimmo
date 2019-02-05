<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kontaktperson
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("kontaktperson") 
 */
class Kontaktperson {

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $adressfreigabe;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $anrede;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $anredeBrief;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $emailDirekt;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $emailFeedback;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $emailPrivat;

	/**
	 * @XmlList(inline = true, entry = "email_sonstige") 
	 * @Type("array<Ujamii\OpenImmo\API\EmailSonstige>") 
	 * @var EmailSonstige[]
	 */
	protected $emailSonstige;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $emailZentrale;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $firma;

	/**
	 * @Type("Ujamii\OpenImmo\API\Foto") 
	 * @var Foto
	 */
	protected $foto;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $freitextfeld;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $hausnummer;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $immobilientreuhaenderid;

	/**
	 * @Type("Ujamii\OpenImmo\API\Land") 
	 * @var Land
	 */
	protected $land;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $name;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $ort;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $personennummer;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $plz;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $position;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $postfach;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $postfOrt;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $postfPlz;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $referenzId;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $strasse;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telDurchw;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telFax;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telHandy;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telPrivat;

	/**
	 * @XmlList(inline = true, entry = "tel_sonstige") 
	 * @Type("array<Ujamii\OpenImmo\API\TelSonstige>") 
	 * @var TelSonstige[]
	 */
	protected $telSonstige;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telZentrale;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $titel;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $url;

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
	protected $vorname;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $zusatzfeld;

	/**
	 * @return boolean
	 */
	public function getAdressfreigabe(): bool {
		return $this->adressfreigabe;
	}

	/**
	 * @return string
	 */
	public function getAnrede(): string {
		return $this->anrede;
	}

	/**
	 * @return string
	 */
	public function getAnredeBrief(): string {
		return $this->anredeBrief;
	}

	/**
	 * @return string
	 */
	public function getEmailDirekt(): string {
		return $this->emailDirekt;
	}

	/**
	 * @return string
	 */
	public function getEmailFeedback(): string {
		return $this->emailFeedback;
	}

	/**
	 * @return string
	 */
	public function getEmailPrivat(): string {
		return $this->emailPrivat;
	}

	/**
	 * Returns array of EmailSonstige
	 *
	 * @return array
	 */
	public function getEmailSonstige(): array {
		return $this->emailSonstige;
	}

	/**
	 * @return string
	 */
	public function getEmailZentrale(): string {
		return $this->emailZentrale;
	}

	/**
	 * @return string
	 */
	public function getFirma(): string {
		return $this->firma;
	}

	/**
	 * @return Foto
	 */
	public function getFoto(): Foto {
		return $this->foto;
	}

	/**
	 * @return string
	 */
	public function getFreitextfeld(): string {
		return $this->freitextfeld;
	}

	/**
	 * @return string
	 */
	public function getHausnummer(): string {
		return $this->hausnummer;
	}

	/**
	 * @return string
	 */
	public function getImmobilientreuhaenderid(): string {
		return $this->immobilientreuhaenderid;
	}

	/**
	 * @return Land
	 */
	public function getLand(): Land {
		return $this->land;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getOrt(): string {
		return $this->ort;
	}

	/**
	 * @return string
	 */
	public function getPersonennummer(): string {
		return $this->personennummer;
	}

	/**
	 * @return string
	 */
	public function getPlz(): string {
		return $this->plz;
	}

	/**
	 * @return string
	 */
	public function getPosition(): string {
		return $this->position;
	}

	/**
	 * @return string
	 */
	public function getPostfach(): string {
		return $this->postfach;
	}

	/**
	 * @return string
	 */
	public function getPostfOrt(): string {
		return $this->postfOrt;
	}

	/**
	 * @return string
	 */
	public function getPostfPlz(): string {
		return $this->postfPlz;
	}

	/**
	 * @return string
	 */
	public function getReferenzId(): string {
		return $this->referenzId;
	}

	/**
	 * @return string
	 */
	public function getStrasse(): string {
		return $this->strasse;
	}

	/**
	 * @return string
	 */
	public function getTelDurchw(): string {
		return $this->telDurchw;
	}

	/**
	 * @return string
	 */
	public function getTelFax(): string {
		return $this->telFax;
	}

	/**
	 * @return string
	 */
	public function getTelHandy(): string {
		return $this->telHandy;
	}

	/**
	 * @return string
	 */
	public function getTelPrivat(): string {
		return $this->telPrivat;
	}

	/**
	 * Returns array of TelSonstige
	 *
	 * @return array
	 */
	public function getTelSonstige(): array {
		return $this->telSonstige;
	}

	/**
	 * @return string
	 */
	public function getTelZentrale(): string {
		return $this->telZentrale;
	}

	/**
	 * @return string
	 */
	public function getTitel(): string {
		return $this->titel;
	}

	/**
	 * @return string
	 */
	public function getUrl(): string {
		return $this->url;
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
	 * @return string
	 */
	public function getVorname(): string {
		return $this->vorname;
	}

	/**
	 * @return string
	 */
	public function getZusatzfeld(): string {
		return $this->zusatzfeld;
	}

	/**
	 * @param boolean $adressfreigabe Setter for adressfreigabe
	 * @return Kontaktperson
	 */
	public function setAdressfreigabe(bool $adressfreigabe) {
		$this->adressfreigabe = $adressfreigabe;
		return $this;
	}

	/**
	 * @param string $anrede Setter for anrede
	 * @return Kontaktperson
	 */
	public function setAnrede(string $anrede) {
		$this->anrede = $anrede;
		return $this;
	}

	/**
	 * @param string $anredeBrief Setter for anredeBrief
	 * @return Kontaktperson
	 */
	public function setAnredeBrief(string $anredeBrief) {
		$this->anredeBrief = $anredeBrief;
		return $this;
	}

	/**
	 * @param string $emailDirekt Setter for emailDirekt
	 * @return Kontaktperson
	 */
	public function setEmailDirekt(string $emailDirekt) {
		$this->emailDirekt = $emailDirekt;
		return $this;
	}

	/**
	 * @param string $emailFeedback Setter for emailFeedback
	 * @return Kontaktperson
	 */
	public function setEmailFeedback(string $emailFeedback) {
		$this->emailFeedback = $emailFeedback;
		return $this;
	}

	/**
	 * @param string $emailPrivat Setter for emailPrivat
	 * @return Kontaktperson
	 */
	public function setEmailPrivat(string $emailPrivat) {
		$this->emailPrivat = $emailPrivat;
		return $this;
	}

	/**
	 * @param array $emailSonstige Setter for emailSonstige
	 * @return Kontaktperson
	 */
	public function setEmailSonstige(array $emailSonstige) {
		$this->emailSonstige = $emailSonstige;
		return $this;
	}

	/**
	 * @param string $emailZentrale Setter for emailZentrale
	 * @return Kontaktperson
	 */
	public function setEmailZentrale(string $emailZentrale) {
		$this->emailZentrale = $emailZentrale;
		return $this;
	}

	/**
	 * @param string $firma Setter for firma
	 * @return Kontaktperson
	 */
	public function setFirma(string $firma) {
		$this->firma = $firma;
		return $this;
	}

	/**
	 * @param Foto $foto Setter for foto
	 * @return Kontaktperson
	 */
	public function setFoto(Foto $foto) {
		$this->foto = $foto;
		return $this;
	}

	/**
	 * @param string $freitextfeld Setter for freitextfeld
	 * @return Kontaktperson
	 */
	public function setFreitextfeld(string $freitextfeld) {
		$this->freitextfeld = $freitextfeld;
		return $this;
	}

	/**
	 * @param string $hausnummer Setter for hausnummer
	 * @return Kontaktperson
	 */
	public function setHausnummer(string $hausnummer) {
		$this->hausnummer = $hausnummer;
		return $this;
	}

	/**
	 * @param string $immobilientreuhaenderid Setter for immobilientreuhaenderid
	 * @return Kontaktperson
	 */
	public function setImmobilientreuhaenderid(string $immobilientreuhaenderid) {
		$this->immobilientreuhaenderid = $immobilientreuhaenderid;
		return $this;
	}

	/**
	 * @param Land $land Setter for land
	 * @return Kontaktperson
	 */
	public function setLand(Land $land) {
		$this->land = $land;
		return $this;
	}

	/**
	 * @param string $name Setter for name
	 * @return Kontaktperson
	 */
	public function setName(string $name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * @param string $ort Setter for ort
	 * @return Kontaktperson
	 */
	public function setOrt(string $ort) {
		$this->ort = $ort;
		return $this;
	}

	/**
	 * @param string $personennummer Setter for personennummer
	 * @return Kontaktperson
	 */
	public function setPersonennummer(string $personennummer) {
		$this->personennummer = $personennummer;
		return $this;
	}

	/**
	 * @param string $plz Setter for plz
	 * @return Kontaktperson
	 */
	public function setPlz(string $plz) {
		$this->plz = $plz;
		return $this;
	}

	/**
	 * @param string $position Setter for position
	 * @return Kontaktperson
	 */
	public function setPosition(string $position) {
		$this->position = $position;
		return $this;
	}

	/**
	 * @param string $postfach Setter for postfach
	 * @return Kontaktperson
	 */
	public function setPostfach(string $postfach) {
		$this->postfach = $postfach;
		return $this;
	}

	/**
	 * @param string $postfOrt Setter for postfOrt
	 * @return Kontaktperson
	 */
	public function setPostfOrt(string $postfOrt) {
		$this->postfOrt = $postfOrt;
		return $this;
	}

	/**
	 * @param string $postfPlz Setter for postfPlz
	 * @return Kontaktperson
	 */
	public function setPostfPlz(string $postfPlz) {
		$this->postfPlz = $postfPlz;
		return $this;
	}

	/**
	 * @param string $referenzId Setter for referenzId
	 * @return Kontaktperson
	 */
	public function setReferenzId(string $referenzId) {
		$this->referenzId = $referenzId;
		return $this;
	}

	/**
	 * @param string $strasse Setter for strasse
	 * @return Kontaktperson
	 */
	public function setStrasse(string $strasse) {
		$this->strasse = $strasse;
		return $this;
	}

	/**
	 * @param string $telDurchw Setter for telDurchw
	 * @return Kontaktperson
	 */
	public function setTelDurchw(string $telDurchw) {
		$this->telDurchw = $telDurchw;
		return $this;
	}

	/**
	 * @param string $telFax Setter for telFax
	 * @return Kontaktperson
	 */
	public function setTelFax(string $telFax) {
		$this->telFax = $telFax;
		return $this;
	}

	/**
	 * @param string $telHandy Setter for telHandy
	 * @return Kontaktperson
	 */
	public function setTelHandy(string $telHandy) {
		$this->telHandy = $telHandy;
		return $this;
	}

	/**
	 * @param string $telPrivat Setter for telPrivat
	 * @return Kontaktperson
	 */
	public function setTelPrivat(string $telPrivat) {
		$this->telPrivat = $telPrivat;
		return $this;
	}

	/**
	 * @param array $telSonstige Setter for telSonstige
	 * @return Kontaktperson
	 */
	public function setTelSonstige(array $telSonstige) {
		$this->telSonstige = $telSonstige;
		return $this;
	}

	/**
	 * @param string $telZentrale Setter for telZentrale
	 * @return Kontaktperson
	 */
	public function setTelZentrale(string $telZentrale) {
		$this->telZentrale = $telZentrale;
		return $this;
	}

	/**
	 * @param string $titel Setter for titel
	 * @return Kontaktperson
	 */
	public function setTitel(string $titel) {
		$this->titel = $titel;
		return $this;
	}

	/**
	 * @param string $url Setter for url
	 * @return Kontaktperson
	 */
	public function setUrl(string $url) {
		$this->url = $url;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Kontaktperson
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Kontaktperson
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Kontaktperson
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param string $vorname Setter for vorname
	 * @return Kontaktperson
	 */
	public function setVorname(string $vorname) {
		$this->vorname = $vorname;
		return $this;
	}

	/**
	 * @param string $zusatzfeld Setter for zusatzfeld
	 * @return Kontaktperson
	 */
	public function setZusatzfeld(string $zusatzfeld) {
		$this->zusatzfeld = $zusatzfeld;
		return $this;
	}
}
