<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Immobilie {

	/**
	 * @var Anhaenge
	 */
	protected $anhaenge;

	/**
	 * @var Ausstattung
	 */
	protected $ausstattung;

	/**
	 * @var Bewertung
	 */
	protected $bewertung;

	/**
	 * @var Bieterverfahren
	 */
	protected $bieterverfahren;

	/**
	 * @var Flaechen
	 */
	protected $flaechen;

	/**
	 * @var Freitexte
	 */
	protected $freitexte;

	/**
	 * @var Geo
	 */
	protected $geo;

	/**
	 * @var Infrastruktur
	 */
	protected $infrastruktur;

	/**
	 * @var Kontaktperson
	 */
	protected $kontaktperson;

	/**
	 * @var Objektkategorie
	 */
	protected $objektkategorie;

	/**
	 * @var Preise
	 */
	protected $preise;

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
	 * @var Versteigerung
	 */
	protected $versteigerung;

	/**
	 * @var VerwaltungObjekt
	 */
	protected $verwaltungObjekt;

	/**
	 * @var VerwaltungTechn
	 */
	protected $verwaltungTechn;

	/**
	 * @var WeitereAdresse[]
	 */
	protected $weitereAdresse;

	/**
	 * @var ZustandAngaben
	 */
	protected $zustandAngaben;

	/**
	 * @return Anhaenge
	 */
	public function getAnhaenge() {
		return $this->anhaenge;
	}

	/**
	 * @return Ausstattung
	 */
	public function getAusstattung() {
		return $this->ausstattung;
	}

	/**
	 * @return Bewertung
	 */
	public function getBewertung() {
		return $this->bewertung;
	}

	/**
	 * @return Bieterverfahren
	 */
	public function getBieterverfahren() {
		return $this->bieterverfahren;
	}

	/**
	 * @return Flaechen
	 */
	public function getFlaechen() {
		return $this->flaechen;
	}

	/**
	 * @return Freitexte
	 */
	public function getFreitexte() {
		return $this->freitexte;
	}

	/**
	 * @return Geo
	 */
	public function getGeo() {
		return $this->geo;
	}

	/**
	 * @return Infrastruktur
	 */
	public function getInfrastruktur() {
		return $this->infrastruktur;
	}

	/**
	 * @return Kontaktperson
	 */
	public function getKontaktperson() {
		return $this->kontaktperson;
	}

	/**
	 * @return Objektkategorie
	 */
	public function getObjektkategorie() {
		return $this->objektkategorie;
	}

	/**
	 * @return Preise
	 */
	public function getPreise() {
		return $this->preise;
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
	 * @return Versteigerung
	 */
	public function getVersteigerung() {
		return $this->versteigerung;
	}

	/**
	 * @return VerwaltungObjekt
	 */
	public function getVerwaltungObjekt() {
		return $this->verwaltungObjekt;
	}

	/**
	 * @return VerwaltungTechn
	 */
	public function getVerwaltungTechn() {
		return $this->verwaltungTechn;
	}

	/**
	 * @return WeitereAdresse[]
	 */
	public function getWeitereAdresse() {
		return $this->weitereAdresse;
	}

	/**
	 * @return ZustandAngaben
	 */
	public function getZustandAngaben() {
		return $this->zustandAngaben;
	}

	/**
	 * @param Anhaenge $anhaenge Setter for anhaenge
	 * @return Immobilie
	 */
	public function setAnhaenge(Anhaenge $anhaenge) {
		$this->anhaenge = $anhaenge;
		return $this;
	}

	/**
	 * @param Ausstattung $ausstattung Setter for ausstattung
	 * @return Immobilie
	 */
	public function setAusstattung(Ausstattung $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param Bewertung $bewertung Setter for bewertung
	 * @return Immobilie
	 */
	public function setBewertung(Bewertung $bewertung) {
		$this->bewertung = $bewertung;
		return $this;
	}

	/**
	 * @param Bieterverfahren $bieterverfahren Setter for bieterverfahren
	 * @return Immobilie
	 */
	public function setBieterverfahren(Bieterverfahren $bieterverfahren) {
		$this->bieterverfahren = $bieterverfahren;
		return $this;
	}

	/**
	 * @param Flaechen $flaechen Setter for flaechen
	 * @return Immobilie
	 */
	public function setFlaechen(Flaechen $flaechen) {
		$this->flaechen = $flaechen;
		return $this;
	}

	/**
	 * @param Freitexte $freitexte Setter for freitexte
	 * @return Immobilie
	 */
	public function setFreitexte(Freitexte $freitexte) {
		$this->freitexte = $freitexte;
		return $this;
	}

	/**
	 * @param Geo $geo Setter for geo
	 * @return Immobilie
	 */
	public function setGeo(Geo $geo) {
		$this->geo = $geo;
		return $this;
	}

	/**
	 * @param Infrastruktur $infrastruktur Setter for infrastruktur
	 * @return Immobilie
	 */
	public function setInfrastruktur(Infrastruktur $infrastruktur) {
		$this->infrastruktur = $infrastruktur;
		return $this;
	}

	/**
	 * @param Kontaktperson $kontaktperson Setter for kontaktperson
	 * @return Immobilie
	 */
	public function setKontaktperson(Kontaktperson $kontaktperson) {
		$this->kontaktperson = $kontaktperson;
		return $this;
	}

	/**
	 * @param Objektkategorie $objektkategorie Setter for objektkategorie
	 * @return Immobilie
	 */
	public function setObjektkategorie(Objektkategorie $objektkategorie) {
		$this->objektkategorie = $objektkategorie;
		return $this;
	}

	/**
	 * @param Preise $preise Setter for preise
	 * @return Immobilie
	 */
	public function setPreise(Preise $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Immobilie
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Immobilie
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Immobilie
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param Versteigerung $versteigerung Setter for versteigerung
	 * @return Immobilie
	 */
	public function setVersteigerung(Versteigerung $versteigerung) {
		$this->versteigerung = $versteigerung;
		return $this;
	}

	/**
	 * @param VerwaltungObjekt $verwaltungObjekt Setter for verwaltungObjekt
	 * @return Immobilie
	 */
	public function setVerwaltungObjekt(VerwaltungObjekt $verwaltungObjekt) {
		$this->verwaltungObjekt = $verwaltungObjekt;
		return $this;
	}

	/**
	 * @param VerwaltungTechn $verwaltungTechn Setter for verwaltungTechn
	 * @return Immobilie
	 */
	public function setVerwaltungTechn(VerwaltungTechn $verwaltungTechn) {
		$this->verwaltungTechn = $verwaltungTechn;
		return $this;
	}

	/**
	 * @param array $weitereAdresse Setter for weitereAdresse
	 * @return Immobilie
	 */
	public function setWeitereAdresse(array $weitereAdresse) {
		$this->weitereAdresse = $weitereAdresse;
		return $this;
	}

	/**
	 * @param ZustandAngaben $zustandAngaben Setter for zustandAngaben
	 * @return Immobilie
	 */
	public function setZustandAngaben(ZustandAngaben $zustandAngaben) {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}
}
