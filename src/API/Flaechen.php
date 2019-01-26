<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Flaechen
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("flaechen") 
 */
class Flaechen {

	/**
	 * @var float
	 */
	protected $anzahlBadezimmer;

	/**
	 * @var float
	 */
	protected $anzahlBalkone;

	/**
	 * @var float
	 */
	protected $anzahlBetten;

	/**
	 * @var float
	 */
	protected $anzahlGewerbeeinheiten;

	/**
	 * @var float
	 */
	protected $anzahlLogia;

	/**
	 * @var float
	 */
	protected $anzahlSchlafzimmer;

	/**
	 * @var float
	 */
	protected $anzahlSepWc;

	/**
	 * @var int
	 */
	protected $anzahlStellplaetze;

	/**
	 * @var float
	 */
	protected $anzahlTagungsraeume;

	/**
	 * @var float
	 */
	protected $anzahlTerrassen;

	/**
	 * @var float
	 */
	protected $anzahlWohneinheiten;

	/**
	 * @var float
	 */
	protected $anzahlWohnSchlafzimmer;

	/**
	 * @var float
	 */
	protected $anzahlZimmer;

	/**
	 * @var float
	 */
	protected $ausnuetzungsziffer;

	/**
	 * @var float
	 */
	protected $balkonTerrasseFlaeche;

	/**
	 * @var float
	 */
	protected $beheizbareFlaeche;

	/**
	 * @var string
	 */
	protected $bgf;

	/**
	 * @var string
	 */
	protected $bmz;

	/**
	 * @var float
	 */
	protected $bueroflaeche;

	/**
	 * @var float
	 */
	protected $bueroteilflaeche;

	/**
	 * @var float
	 */
	protected $dachbodenflaeche;

	/**
	 * @var boolean
	 */
	protected $einliegerwohnung;

	/**
	 * @var float
	 */
	protected $fensterfront;

	/**
	 * @var float
	 */
	protected $fensterfrontQm;

	/**
	 * @var float
	 */
	protected $flaechebis;

	/**
	 * @var float
	 */
	protected $flaechevon;

	/**
	 * @var float
	 */
	protected $freiflaeche;

	/**
	 * @var float
	 */
	protected $gartenflaeche;

	/**
	 * @var float
	 */
	protected $gastroflaeche;

	/**
	 * @var float
	 */
	protected $gesamtflaeche;

	/**
	 * @var string
	 */
	protected $gfz;

	/**
	 * @var float
	 */
	protected $grundstuecksflaeche;

	/**
	 * @var float
	 */
	protected $grundstuecksfront;

	/**
	 * @var string
	 */
	protected $grz;

	/**
	 * @var float
	 */
	protected $kellerflaeche;

	/**
	 * @var float
	 */
	protected $kubatur;

	/**
	 * @var float
	 */
	protected $ladenflaeche;

	/**
	 * @var float
	 */
	protected $lagerflaeche;

	/**
	 * @var float
	 */
	protected $nutzflaeche;

	/**
	 * @var float
	 */
	protected $plaetzeGastraum;

	/**
	 * @var float
	 */
	protected $sonstflaeche;

	/**
	 * @var float
	 */
	protected $teilbarAb;

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
	 * @var float
	 */
	protected $verkaufsflaeche;

	/**
	 * @var float
	 */
	protected $vermietbareFlaeche;

	/**
	 * @var float
	 */
	protected $verwaltungsflaeche;

	/**
	 * @var float
	 */
	protected $wohnflaeche;

	/**
	 * @return float
	 */
	public function getAnzahlBadezimmer(): float {
		return $this->anzahlBadezimmer;
	}

	/**
	 * @return float
	 */
	public function getAnzahlBalkone(): float {
		return $this->anzahlBalkone;
	}

	/**
	 * @return float
	 */
	public function getAnzahlBetten(): float {
		return $this->anzahlBetten;
	}

	/**
	 * @return float
	 */
	public function getAnzahlGewerbeeinheiten(): float {
		return $this->anzahlGewerbeeinheiten;
	}

	/**
	 * @return float
	 */
	public function getAnzahlLogia(): float {
		return $this->anzahlLogia;
	}

	/**
	 * @return float
	 */
	public function getAnzahlSchlafzimmer(): float {
		return $this->anzahlSchlafzimmer;
	}

	/**
	 * @return float
	 */
	public function getAnzahlSepWc(): float {
		return $this->anzahlSepWc;
	}

	/**
	 * @return int
	 */
	public function getAnzahlStellplaetze(): int {
		return $this->anzahlStellplaetze;
	}

	/**
	 * @return float
	 */
	public function getAnzahlTagungsraeume(): float {
		return $this->anzahlTagungsraeume;
	}

	/**
	 * @return float
	 */
	public function getAnzahlTerrassen(): float {
		return $this->anzahlTerrassen;
	}

	/**
	 * @return float
	 */
	public function getAnzahlWohneinheiten(): float {
		return $this->anzahlWohneinheiten;
	}

	/**
	 * @return float
	 */
	public function getAnzahlWohnSchlafzimmer(): float {
		return $this->anzahlWohnSchlafzimmer;
	}

	/**
	 * @return float
	 */
	public function getAnzahlZimmer(): float {
		return $this->anzahlZimmer;
	}

	/**
	 * @return float
	 */
	public function getAusnuetzungsziffer(): float {
		return $this->ausnuetzungsziffer;
	}

	/**
	 * @return float
	 */
	public function getBalkonTerrasseFlaeche(): float {
		return $this->balkonTerrasseFlaeche;
	}

	/**
	 * @return float
	 */
	public function getBeheizbareFlaeche(): float {
		return $this->beheizbareFlaeche;
	}

	/**
	 * @return string
	 */
	public function getBgf(): string {
		return $this->bgf;
	}

	/**
	 * @return string
	 */
	public function getBmz(): string {
		return $this->bmz;
	}

	/**
	 * @return float
	 */
	public function getBueroflaeche(): float {
		return $this->bueroflaeche;
	}

	/**
	 * @return float
	 */
	public function getBueroteilflaeche(): float {
		return $this->bueroteilflaeche;
	}

	/**
	 * @return float
	 */
	public function getDachbodenflaeche(): float {
		return $this->dachbodenflaeche;
	}

	/**
	 * @return boolean
	 */
	public function getEinliegerwohnung(): bool {
		return $this->einliegerwohnung;
	}

	/**
	 * @return float
	 */
	public function getFensterfront(): float {
		return $this->fensterfront;
	}

	/**
	 * @return float
	 */
	public function getFensterfrontQm(): float {
		return $this->fensterfrontQm;
	}

	/**
	 * @return float
	 */
	public function getFlaechebis(): float {
		return $this->flaechebis;
	}

	/**
	 * @return float
	 */
	public function getFlaechevon(): float {
		return $this->flaechevon;
	}

	/**
	 * @return float
	 */
	public function getFreiflaeche(): float {
		return $this->freiflaeche;
	}

	/**
	 * @return float
	 */
	public function getGartenflaeche(): float {
		return $this->gartenflaeche;
	}

	/**
	 * @return float
	 */
	public function getGastroflaeche(): float {
		return $this->gastroflaeche;
	}

	/**
	 * @return float
	 */
	public function getGesamtflaeche(): float {
		return $this->gesamtflaeche;
	}

	/**
	 * @return string
	 */
	public function getGfz(): string {
		return $this->gfz;
	}

	/**
	 * @return float
	 */
	public function getGrundstuecksflaeche(): float {
		return $this->grundstuecksflaeche;
	}

	/**
	 * @return float
	 */
	public function getGrundstuecksfront(): float {
		return $this->grundstuecksfront;
	}

	/**
	 * @return string
	 */
	public function getGrz(): string {
		return $this->grz;
	}

	/**
	 * @return float
	 */
	public function getKellerflaeche(): float {
		return $this->kellerflaeche;
	}

	/**
	 * @return float
	 */
	public function getKubatur(): float {
		return $this->kubatur;
	}

	/**
	 * @return float
	 */
	public function getLadenflaeche(): float {
		return $this->ladenflaeche;
	}

	/**
	 * @return float
	 */
	public function getLagerflaeche(): float {
		return $this->lagerflaeche;
	}

	/**
	 * @return float
	 */
	public function getNutzflaeche(): float {
		return $this->nutzflaeche;
	}

	/**
	 * @return float
	 */
	public function getPlaetzeGastraum(): float {
		return $this->plaetzeGastraum;
	}

	/**
	 * @return float
	 */
	public function getSonstflaeche(): float {
		return $this->sonstflaeche;
	}

	/**
	 * @return float
	 */
	public function getTeilbarAb(): float {
		return $this->teilbarAb;
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
	 * @return float
	 */
	public function getVerkaufsflaeche(): float {
		return $this->verkaufsflaeche;
	}

	/**
	 * @return float
	 */
	public function getVermietbareFlaeche(): float {
		return $this->vermietbareFlaeche;
	}

	/**
	 * @return float
	 */
	public function getVerwaltungsflaeche(): float {
		return $this->verwaltungsflaeche;
	}

	/**
	 * @return float
	 */
	public function getWohnflaeche(): float {
		return $this->wohnflaeche;
	}

	/**
	 * @param float $anzahlBadezimmer Setter for anzahlBadezimmer
	 * @return Flaechen
	 */
	public function setAnzahlBadezimmer(float $anzahlBadezimmer) {
		$this->anzahlBadezimmer = $anzahlBadezimmer;
		return $this;
	}

	/**
	 * @param float $anzahlBalkone Setter for anzahlBalkone
	 * @return Flaechen
	 */
	public function setAnzahlBalkone(float $anzahlBalkone) {
		$this->anzahlBalkone = $anzahlBalkone;
		return $this;
	}

	/**
	 * @param float $anzahlBetten Setter for anzahlBetten
	 * @return Flaechen
	 */
	public function setAnzahlBetten(float $anzahlBetten) {
		$this->anzahlBetten = $anzahlBetten;
		return $this;
	}

	/**
	 * @param float $anzahlGewerbeeinheiten Setter for anzahlGewerbeeinheiten
	 * @return Flaechen
	 */
	public function setAnzahlGewerbeeinheiten(float $anzahlGewerbeeinheiten) {
		$this->anzahlGewerbeeinheiten = $anzahlGewerbeeinheiten;
		return $this;
	}

	/**
	 * @param float $anzahlLogia Setter for anzahlLogia
	 * @return Flaechen
	 */
	public function setAnzahlLogia(float $anzahlLogia) {
		$this->anzahlLogia = $anzahlLogia;
		return $this;
	}

	/**
	 * @param float $anzahlSchlafzimmer Setter for anzahlSchlafzimmer
	 * @return Flaechen
	 */
	public function setAnzahlSchlafzimmer(float $anzahlSchlafzimmer) {
		$this->anzahlSchlafzimmer = $anzahlSchlafzimmer;
		return $this;
	}

	/**
	 * @param float $anzahlSepWc Setter for anzahlSepWc
	 * @return Flaechen
	 */
	public function setAnzahlSepWc(float $anzahlSepWc) {
		$this->anzahlSepWc = $anzahlSepWc;
		return $this;
	}

	/**
	 * @param int $anzahlStellplaetze Setter for anzahlStellplaetze
	 * @return Flaechen
	 */
	public function setAnzahlStellplaetze(int $anzahlStellplaetze) {
		$this->anzahlStellplaetze = $anzahlStellplaetze;
		return $this;
	}

	/**
	 * @param float $anzahlTagungsraeume Setter for anzahlTagungsraeume
	 * @return Flaechen
	 */
	public function setAnzahlTagungsraeume(float $anzahlTagungsraeume) {
		$this->anzahlTagungsraeume = $anzahlTagungsraeume;
		return $this;
	}

	/**
	 * @param float $anzahlTerrassen Setter for anzahlTerrassen
	 * @return Flaechen
	 */
	public function setAnzahlTerrassen(float $anzahlTerrassen) {
		$this->anzahlTerrassen = $anzahlTerrassen;
		return $this;
	}

	/**
	 * @param float $anzahlWohneinheiten Setter for anzahlWohneinheiten
	 * @return Flaechen
	 */
	public function setAnzahlWohneinheiten(float $anzahlWohneinheiten) {
		$this->anzahlWohneinheiten = $anzahlWohneinheiten;
		return $this;
	}

	/**
	 * @param float $anzahlWohnSchlafzimmer Setter for anzahlWohnSchlafzimmer
	 * @return Flaechen
	 */
	public function setAnzahlWohnSchlafzimmer(float $anzahlWohnSchlafzimmer) {
		$this->anzahlWohnSchlafzimmer = $anzahlWohnSchlafzimmer;
		return $this;
	}

	/**
	 * @param float $anzahlZimmer Setter for anzahlZimmer
	 * @return Flaechen
	 */
	public function setAnzahlZimmer(float $anzahlZimmer) {
		$this->anzahlZimmer = $anzahlZimmer;
		return $this;
	}

	/**
	 * @param float $ausnuetzungsziffer Setter for ausnuetzungsziffer
	 * @return Flaechen
	 */
	public function setAusnuetzungsziffer(float $ausnuetzungsziffer) {
		$this->ausnuetzungsziffer = $ausnuetzungsziffer;
		return $this;
	}

	/**
	 * @param float $balkonTerrasseFlaeche Setter for balkonTerrasseFlaeche
	 * @return Flaechen
	 */
	public function setBalkonTerrasseFlaeche(float $balkonTerrasseFlaeche) {
		$this->balkonTerrasseFlaeche = $balkonTerrasseFlaeche;
		return $this;
	}

	/**
	 * @param float $beheizbareFlaeche Setter for beheizbareFlaeche
	 * @return Flaechen
	 */
	public function setBeheizbareFlaeche(float $beheizbareFlaeche) {
		$this->beheizbareFlaeche = $beheizbareFlaeche;
		return $this;
	}

	/**
	 * @param string $bgf Setter for bgf
	 * @return Flaechen
	 */
	public function setBgf(string $bgf) {
		$this->bgf = $bgf;
		return $this;
	}

	/**
	 * @param string $bmz Setter for bmz
	 * @return Flaechen
	 */
	public function setBmz(string $bmz) {
		$this->bmz = $bmz;
		return $this;
	}

	/**
	 * @param float $bueroflaeche Setter for bueroflaeche
	 * @return Flaechen
	 */
	public function setBueroflaeche(float $bueroflaeche) {
		$this->bueroflaeche = $bueroflaeche;
		return $this;
	}

	/**
	 * @param float $bueroteilflaeche Setter for bueroteilflaeche
	 * @return Flaechen
	 */
	public function setBueroteilflaeche(float $bueroteilflaeche) {
		$this->bueroteilflaeche = $bueroteilflaeche;
		return $this;
	}

	/**
	 * @param float $dachbodenflaeche Setter for dachbodenflaeche
	 * @return Flaechen
	 */
	public function setDachbodenflaeche(float $dachbodenflaeche) {
		$this->dachbodenflaeche = $dachbodenflaeche;
		return $this;
	}

	/**
	 * @param boolean $einliegerwohnung Setter for einliegerwohnung
	 * @return Flaechen
	 */
	public function setEinliegerwohnung(bool $einliegerwohnung) {
		$this->einliegerwohnung = $einliegerwohnung;
		return $this;
	}

	/**
	 * @param float $fensterfront Setter for fensterfront
	 * @return Flaechen
	 */
	public function setFensterfront(float $fensterfront) {
		$this->fensterfront = $fensterfront;
		return $this;
	}

	/**
	 * @param float $fensterfrontQm Setter for fensterfrontQm
	 * @return Flaechen
	 */
	public function setFensterfrontQm(float $fensterfrontQm) {
		$this->fensterfrontQm = $fensterfrontQm;
		return $this;
	}

	/**
	 * @param float $flaechebis Setter for flaechebis
	 * @return Flaechen
	 */
	public function setFlaechebis(float $flaechebis) {
		$this->flaechebis = $flaechebis;
		return $this;
	}

	/**
	 * @param float $flaechevon Setter for flaechevon
	 * @return Flaechen
	 */
	public function setFlaechevon(float $flaechevon) {
		$this->flaechevon = $flaechevon;
		return $this;
	}

	/**
	 * @param float $freiflaeche Setter for freiflaeche
	 * @return Flaechen
	 */
	public function setFreiflaeche(float $freiflaeche) {
		$this->freiflaeche = $freiflaeche;
		return $this;
	}

	/**
	 * @param float $gartenflaeche Setter for gartenflaeche
	 * @return Flaechen
	 */
	public function setGartenflaeche(float $gartenflaeche) {
		$this->gartenflaeche = $gartenflaeche;
		return $this;
	}

	/**
	 * @param float $gastroflaeche Setter for gastroflaeche
	 * @return Flaechen
	 */
	public function setGastroflaeche(float $gastroflaeche) {
		$this->gastroflaeche = $gastroflaeche;
		return $this;
	}

	/**
	 * @param float $gesamtflaeche Setter for gesamtflaeche
	 * @return Flaechen
	 */
	public function setGesamtflaeche(float $gesamtflaeche) {
		$this->gesamtflaeche = $gesamtflaeche;
		return $this;
	}

	/**
	 * @param string $gfz Setter for gfz
	 * @return Flaechen
	 */
	public function setGfz(string $gfz) {
		$this->gfz = $gfz;
		return $this;
	}

	/**
	 * @param float $grundstuecksflaeche Setter for grundstuecksflaeche
	 * @return Flaechen
	 */
	public function setGrundstuecksflaeche(float $grundstuecksflaeche) {
		$this->grundstuecksflaeche = $grundstuecksflaeche;
		return $this;
	}

	/**
	 * @param float $grundstuecksfront Setter for grundstuecksfront
	 * @return Flaechen
	 */
	public function setGrundstuecksfront(float $grundstuecksfront) {
		$this->grundstuecksfront = $grundstuecksfront;
		return $this;
	}

	/**
	 * @param string $grz Setter for grz
	 * @return Flaechen
	 */
	public function setGrz(string $grz) {
		$this->grz = $grz;
		return $this;
	}

	/**
	 * @param float $kellerflaeche Setter for kellerflaeche
	 * @return Flaechen
	 */
	public function setKellerflaeche(float $kellerflaeche) {
		$this->kellerflaeche = $kellerflaeche;
		return $this;
	}

	/**
	 * @param float $kubatur Setter for kubatur
	 * @return Flaechen
	 */
	public function setKubatur(float $kubatur) {
		$this->kubatur = $kubatur;
		return $this;
	}

	/**
	 * @param float $ladenflaeche Setter for ladenflaeche
	 * @return Flaechen
	 */
	public function setLadenflaeche(float $ladenflaeche) {
		$this->ladenflaeche = $ladenflaeche;
		return $this;
	}

	/**
	 * @param float $lagerflaeche Setter for lagerflaeche
	 * @return Flaechen
	 */
	public function setLagerflaeche(float $lagerflaeche) {
		$this->lagerflaeche = $lagerflaeche;
		return $this;
	}

	/**
	 * @param float $nutzflaeche Setter for nutzflaeche
	 * @return Flaechen
	 */
	public function setNutzflaeche(float $nutzflaeche) {
		$this->nutzflaeche = $nutzflaeche;
		return $this;
	}

	/**
	 * @param float $plaetzeGastraum Setter for plaetzeGastraum
	 * @return Flaechen
	 */
	public function setPlaetzeGastraum(float $plaetzeGastraum) {
		$this->plaetzeGastraum = $plaetzeGastraum;
		return $this;
	}

	/**
	 * @param float $sonstflaeche Setter for sonstflaeche
	 * @return Flaechen
	 */
	public function setSonstflaeche(float $sonstflaeche) {
		$this->sonstflaeche = $sonstflaeche;
		return $this;
	}

	/**
	 * @param float $teilbarAb Setter for teilbarAb
	 * @return Flaechen
	 */
	public function setTeilbarAb(float $teilbarAb) {
		$this->teilbarAb = $teilbarAb;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Flaechen
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Flaechen
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Flaechen
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param float $verkaufsflaeche Setter for verkaufsflaeche
	 * @return Flaechen
	 */
	public function setVerkaufsflaeche(float $verkaufsflaeche) {
		$this->verkaufsflaeche = $verkaufsflaeche;
		return $this;
	}

	/**
	 * @param float $vermietbareFlaeche Setter for vermietbareFlaeche
	 * @return Flaechen
	 */
	public function setVermietbareFlaeche(float $vermietbareFlaeche) {
		$this->vermietbareFlaeche = $vermietbareFlaeche;
		return $this;
	}

	/**
	 * @param float $verwaltungsflaeche Setter for verwaltungsflaeche
	 * @return Flaechen
	 */
	public function setVerwaltungsflaeche(float $verwaltungsflaeche) {
		$this->verwaltungsflaeche = $verwaltungsflaeche;
		return $this;
	}

	/**
	 * @param float $wohnflaeche Setter for wohnflaeche
	 * @return Flaechen
	 */
	public function setWohnflaeche(float $wohnflaeche) {
		$this->wohnflaeche = $wohnflaeche;
		return $this;
	}
}
