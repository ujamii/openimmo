<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Objekt
 *
 * @XmlRoot("objekt") 
 */
class Objekt {

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $anbieterId;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $anzahlZimmer;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $bezeichnung;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $etage;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $exposeUrl;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $flaeche;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $gebot;

	/**
	 * @XmlList(inline = true, entry = "interessent") 
	 * @Type("array<Ujamii\OpenImmo\API\Interessent>") 
	 * @SkipWhenEmpty 
	 * @var Interessent[]
	 */
	protected $interessent = [];

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $land;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $oobjId;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $ort;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $portalObjId;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $portalUniqueId;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $preis;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $stadtbezirk;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $strasse;

	/**
	 * @XmlList(inline = true, entry = "user_defined_extend") 
	 * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>") 
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @XmlList(inline = true, entry = "vermarktungsart") 
	 * @Type("array<string>") 
	 * @var string[]
	 */
	protected $vermarktungsart;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $wae;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $whgNr;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $zusatzRefnr;

	/**
	 * @return string
	 */
	public function getAnbieterId(): ?string {
		return $this->anbieterId;
	}

	/**
	 * @return string
	 */
	public function getAnzahlZimmer(): ?string {
		return $this->anzahlZimmer;
	}

	/**
	 * @return string
	 */
	public function getBezeichnung(): ?string {
		return $this->bezeichnung;
	}

	/**
	 * @return string
	 */
	public function getEtage(): ?string {
		return $this->etage;
	}

	/**
	 * @return string
	 */
	public function getExposeUrl(): ?string {
		return $this->exposeUrl;
	}

	/**
	 * @return string
	 */
	public function getFlaeche(): ?string {
		return $this->flaeche;
	}

	/**
	 * @return string
	 */
	public function getGebot(): ?string {
		return $this->gebot;
	}

	/**
	 * Returns array of Interessent
	 *
	 * @return array
	 */
	public function getInteressent(): array {
		return $this->interessent ?? [];
	}

	/**
	 * @return string
	 */
	public function getLand(): ?string {
		return $this->land;
	}

	/**
	 * @return string
	 */
	public function getOobjId(): ?string {
		return $this->oobjId;
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
	public function getPortalObjId(): ?string {
		return $this->portalObjId;
	}

	/**
	 * @return string
	 */
	public function getPortalUniqueId(): ?string {
		return $this->portalUniqueId;
	}

	/**
	 * @return string
	 */
	public function getPreis(): ?string {
		return $this->preis;
	}

	/**
	 * @return string
	 */
	public function getStadtbezirk(): ?string {
		return $this->stadtbezirk;
	}

	/**
	 * @return string
	 */
	public function getStrasse(): ?string {
		return $this->strasse;
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
	 * Returns array of string
	 *
	 * @return array
	 */
	public function getVermarktungsart(): array {
		return $this->vermarktungsart ?? [];
	}

	/**
	 * @return string
	 */
	public function getWae(): ?string {
		return $this->wae;
	}

	/**
	 * @return string
	 */
	public function getWhgNr(): ?string {
		return $this->whgNr;
	}

	/**
	 * @return string
	 */
	public function getZusatzRefnr(): ?string {
		return $this->zusatzRefnr;
	}

	/**
	 * @param string $anbieterId Setter for anbieterId
	 * @return Objekt
	 */
	public function setAnbieterId(?string $anbieterId) {
		$this->anbieterId = $anbieterId;
		return $this;
	}

	/**
	 * @param string $anzahlZimmer Setter for anzahlZimmer
	 * @return Objekt
	 */
	public function setAnzahlZimmer(?string $anzahlZimmer) {
		$this->anzahlZimmer = $anzahlZimmer;
		return $this;
	}

	/**
	 * @param string $bezeichnung Setter for bezeichnung
	 * @return Objekt
	 */
	public function setBezeichnung(?string $bezeichnung) {
		$this->bezeichnung = $bezeichnung;
		return $this;
	}

	/**
	 * @param string $etage Setter for etage
	 * @return Objekt
	 */
	public function setEtage(?string $etage) {
		$this->etage = $etage;
		return $this;
	}

	/**
	 * @param string $exposeUrl Setter for exposeUrl
	 * @return Objekt
	 */
	public function setExposeUrl(?string $exposeUrl) {
		$this->exposeUrl = $exposeUrl;
		return $this;
	}

	/**
	 * @param string $flaeche Setter for flaeche
	 * @return Objekt
	 */
	public function setFlaeche(?string $flaeche) {
		$this->flaeche = $flaeche;
		return $this;
	}

	/**
	 * @param string $gebot Setter for gebot
	 * @return Objekt
	 */
	public function setGebot(?string $gebot) {
		$this->gebot = $gebot;
		return $this;
	}

	/**
	 * @param array $interessent Setter for interessent
	 * @return Objekt
	 */
	public function setInteressent(array $interessent) {
		$this->interessent = $interessent;
		return $this;
	}

	/**
	 * @param string $land Setter for land
	 * @return Objekt
	 */
	public function setLand(?string $land) {
		$this->land = $land;
		return $this;
	}

	/**
	 * @param string $oobjId Setter for oobjId
	 * @return Objekt
	 */
	public function setOobjId(?string $oobjId) {
		$this->oobjId = $oobjId;
		return $this;
	}

	/**
	 * @param string $ort Setter for ort
	 * @return Objekt
	 */
	public function setOrt(?string $ort) {
		$this->ort = $ort;
		return $this;
	}

	/**
	 * @param string $portalObjId Setter for portalObjId
	 * @return Objekt
	 */
	public function setPortalObjId(?string $portalObjId) {
		$this->portalObjId = $portalObjId;
		return $this;
	}

	/**
	 * @param string $portalUniqueId Setter for portalUniqueId
	 * @return Objekt
	 */
	public function setPortalUniqueId(?string $portalUniqueId) {
		$this->portalUniqueId = $portalUniqueId;
		return $this;
	}

	/**
	 * @param string $preis Setter for preis
	 * @return Objekt
	 */
	public function setPreis(?string $preis) {
		$this->preis = $preis;
		return $this;
	}

	/**
	 * @param string $stadtbezirk Setter for stadtbezirk
	 * @return Objekt
	 */
	public function setStadtbezirk(?string $stadtbezirk) {
		$this->stadtbezirk = $stadtbezirk;
		return $this;
	}

	/**
	 * @param string $strasse Setter for strasse
	 * @return Objekt
	 */
	public function setStrasse(?string $strasse) {
		$this->strasse = $strasse;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Objekt
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $vermarktungsart Setter for vermarktungsart
	 * @return Objekt
	 */
	public function setVermarktungsart(array $vermarktungsart) {
		$this->vermarktungsart = $vermarktungsart;
		return $this;
	}

	/**
	 * @param string $wae Setter for wae
	 * @return Objekt
	 */
	public function setWae(?string $wae) {
		$this->wae = $wae;
		return $this;
	}

	/**
	 * @param string $whgNr Setter for whgNr
	 * @return Objekt
	 */
	public function setWhgNr(?string $whgNr) {
		$this->whgNr = $whgNr;
		return $this;
	}

	/**
	 * @param string $zusatzRefnr Setter for zusatzRefnr
	 * @return Objekt
	 */
	public function setZusatzRefnr(?string $zusatzRefnr) {
		$this->zusatzRefnr = $zusatzRefnr;
		return $this;
	}
}
