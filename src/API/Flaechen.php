<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Flaechen {

	/**
	 * @var decimal
	 */
	protected $anzahlBadezimmer;

	/**
	 * @var decimal
	 */
	protected $anzahlBalkone;

	/**
	 * @var decimal
	 */
	protected $anzahlBetten;

	/**
	 * @var decimal
	 */
	protected $anzahlGewerbeeinheiten;

	/**
	 * @var decimal
	 */
	protected $anzahlLogia;

	/**
	 * @var decimal
	 */
	protected $anzahlSchlafzimmer;

	/**
	 * @var decimal
	 */
	protected $anzahlSepWc;

	/**
	 * @var positiveInteger
	 */
	protected $anzahlStellplaetze;

	/**
	 * @var decimal
	 */
	protected $anzahlTagungsraeume;

	/**
	 * @var decimal
	 */
	protected $anzahlTerrassen;

	/**
	 * @var decimal
	 */
	protected $anzahlWohneinheiten;

	/**
	 * @var decimal
	 */
	protected $anzahlWohnSchlafzimmer;

	/**
	 * @var decimal
	 */
	protected $anzahlZimmer;

	/**
	 * @var decimal
	 */
	protected $ausnuetzungsziffer;

	/**
	 * @var decimal
	 */
	protected $balkonTerrasseFlaeche;

	/**
	 * @var decimal
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
	 * @var decimal
	 */
	protected $bueroflaeche;

	/**
	 * @var decimal
	 */
	protected $bueroteilflaeche;

	/**
	 * @var decimal
	 */
	protected $dachbodenflaeche;

	/**
	 * @var boolean
	 */
	protected $einliegerwohnung;

	/**
	 * @var decimal
	 */
	protected $fensterfront;

	/**
	 * @var decimal
	 */
	protected $fensterfrontQm;

	/**
	 * @var decimal
	 */
	protected $flaechebis;

	/**
	 * @var decimal
	 */
	protected $flaechevon;

	/**
	 * @var decimal
	 */
	protected $freiflaeche;

	/**
	 * @var decimal
	 */
	protected $gartenflaeche;

	/**
	 * @var decimal
	 */
	protected $gastroflaeche;

	/**
	 * @var decimal
	 */
	protected $gesamtflaeche;

	/**
	 * @var string
	 */
	protected $gfz;

	/**
	 * @var decimal
	 */
	protected $grundstuecksflaeche;

	/**
	 * @var decimal
	 */
	protected $grundstuecksfront;

	/**
	 * @var string
	 */
	protected $grz;

	/**
	 * @var decimal
	 */
	protected $kellerflaeche;

	/**
	 * @var decimal
	 */
	protected $kubatur;

	/**
	 * @var decimal
	 */
	protected $ladenflaeche;

	/**
	 * @var decimal
	 */
	protected $lagerflaeche;

	/**
	 * @var decimal
	 */
	protected $nutzflaeche;

	/**
	 * @var decimal
	 */
	protected $plaetzeGastraum;

	/**
	 * @var decimal
	 */
	protected $sonstflaeche;

	/**
	 * @var decimal
	 */
	protected $teilbarAb;

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
	 * @var decimal
	 */
	protected $verkaufsflaeche;

	/**
	 * @var decimal
	 */
	protected $vermietbareFlaeche;

	/**
	 * @var decimal
	 */
	protected $verwaltungsflaeche;

	/**
	 * @var decimal
	 */
	protected $wohnflaeche;

	/**
	 * @return decimal
	 */
	public function getAnzahlBadezimmer() {
		return $this->anzahlBadezimmer;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlBalkone() {
		return $this->anzahlBalkone;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlBetten() {
		return $this->anzahlBetten;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlGewerbeeinheiten() {
		return $this->anzahlGewerbeeinheiten;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlLogia() {
		return $this->anzahlLogia;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlSchlafzimmer() {
		return $this->anzahlSchlafzimmer;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlSepWc() {
		return $this->anzahlSepWc;
	}

	/**
	 * @return positiveInteger
	 */
	public function getAnzahlStellplaetze() {
		return $this->anzahlStellplaetze;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlTagungsraeume() {
		return $this->anzahlTagungsraeume;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlTerrassen() {
		return $this->anzahlTerrassen;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlWohneinheiten() {
		return $this->anzahlWohneinheiten;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlWohnSchlafzimmer() {
		return $this->anzahlWohnSchlafzimmer;
	}

	/**
	 * @return decimal
	 */
	public function getAnzahlZimmer() {
		return $this->anzahlZimmer;
	}

	/**
	 * @return decimal
	 */
	public function getAusnuetzungsziffer() {
		return $this->ausnuetzungsziffer;
	}

	/**
	 * @return decimal
	 */
	public function getBalkonTerrasseFlaeche() {
		return $this->balkonTerrasseFlaeche;
	}

	/**
	 * @return decimal
	 */
	public function getBeheizbareFlaeche() {
		return $this->beheizbareFlaeche;
	}

	/**
	 * @return string
	 */
	public function getBgf() {
		return $this->bgf;
	}

	/**
	 * @return string
	 */
	public function getBmz() {
		return $this->bmz;
	}

	/**
	 * @return decimal
	 */
	public function getBueroflaeche() {
		return $this->bueroflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getBueroteilflaeche() {
		return $this->bueroteilflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getDachbodenflaeche() {
		return $this->dachbodenflaeche;
	}

	/**
	 * @return boolean
	 */
	public function getEinliegerwohnung() {
		return $this->einliegerwohnung;
	}

	/**
	 * @return decimal
	 */
	public function getFensterfront() {
		return $this->fensterfront;
	}

	/**
	 * @return decimal
	 */
	public function getFensterfrontQm() {
		return $this->fensterfrontQm;
	}

	/**
	 * @return decimal
	 */
	public function getFlaechebis() {
		return $this->flaechebis;
	}

	/**
	 * @return decimal
	 */
	public function getFlaechevon() {
		return $this->flaechevon;
	}

	/**
	 * @return decimal
	 */
	public function getFreiflaeche() {
		return $this->freiflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getGartenflaeche() {
		return $this->gartenflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getGastroflaeche() {
		return $this->gastroflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getGesamtflaeche() {
		return $this->gesamtflaeche;
	}

	/**
	 * @return string
	 */
	public function getGfz() {
		return $this->gfz;
	}

	/**
	 * @return decimal
	 */
	public function getGrundstuecksflaeche() {
		return $this->grundstuecksflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getGrundstuecksfront() {
		return $this->grundstuecksfront;
	}

	/**
	 * @return string
	 */
	public function getGrz() {
		return $this->grz;
	}

	/**
	 * @return decimal
	 */
	public function getKellerflaeche() {
		return $this->kellerflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getKubatur() {
		return $this->kubatur;
	}

	/**
	 * @return decimal
	 */
	public function getLadenflaeche() {
		return $this->ladenflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getLagerflaeche() {
		return $this->lagerflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getNutzflaeche() {
		return $this->nutzflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getPlaetzeGastraum() {
		return $this->plaetzeGastraum;
	}

	/**
	 * @return decimal
	 */
	public function getSonstflaeche() {
		return $this->sonstflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getTeilbarAb() {
		return $this->teilbarAb;
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
	 * @return decimal
	 */
	public function getVerkaufsflaeche() {
		return $this->verkaufsflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getVermietbareFlaeche() {
		return $this->vermietbareFlaeche;
	}

	/**
	 * @return decimal
	 */
	public function getVerwaltungsflaeche() {
		return $this->verwaltungsflaeche;
	}

	/**
	 * @return decimal
	 */
	public function getWohnflaeche() {
		return $this->wohnflaeche;
	}

	/**
	 * @param decimal $anzahlBadezimmer Setter for anzahlBadezimmer
	 * @return Flaechen
	 */
	public function setAnzahlBadezimmer(decimal $anzahlBadezimmer) {
		$this->anzahlBadezimmer = $anzahlBadezimmer;
		return $this;
	}

	/**
	 * @param decimal $anzahlBalkone Setter for anzahlBalkone
	 * @return Flaechen
	 */
	public function setAnzahlBalkone(decimal $anzahlBalkone) {
		$this->anzahlBalkone = $anzahlBalkone;
		return $this;
	}

	/**
	 * @param decimal $anzahlBetten Setter for anzahlBetten
	 * @return Flaechen
	 */
	public function setAnzahlBetten(decimal $anzahlBetten) {
		$this->anzahlBetten = $anzahlBetten;
		return $this;
	}

	/**
	 * @param decimal $anzahlGewerbeeinheiten Setter for anzahlGewerbeeinheiten
	 * @return Flaechen
	 */
	public function setAnzahlGewerbeeinheiten(decimal $anzahlGewerbeeinheiten) {
		$this->anzahlGewerbeeinheiten = $anzahlGewerbeeinheiten;
		return $this;
	}

	/**
	 * @param decimal $anzahlLogia Setter for anzahlLogia
	 * @return Flaechen
	 */
	public function setAnzahlLogia(decimal $anzahlLogia) {
		$this->anzahlLogia = $anzahlLogia;
		return $this;
	}

	/**
	 * @param decimal $anzahlSchlafzimmer Setter for anzahlSchlafzimmer
	 * @return Flaechen
	 */
	public function setAnzahlSchlafzimmer(decimal $anzahlSchlafzimmer) {
		$this->anzahlSchlafzimmer = $anzahlSchlafzimmer;
		return $this;
	}

	/**
	 * @param decimal $anzahlSepWc Setter for anzahlSepWc
	 * @return Flaechen
	 */
	public function setAnzahlSepWc(decimal $anzahlSepWc) {
		$this->anzahlSepWc = $anzahlSepWc;
		return $this;
	}

	/**
	 * @param positiveInteger $anzahlStellplaetze Setter for anzahlStellplaetze
	 * @return Flaechen
	 */
	public function setAnzahlStellplaetze(positiveInteger $anzahlStellplaetze) {
		$this->anzahlStellplaetze = $anzahlStellplaetze;
		return $this;
	}

	/**
	 * @param decimal $anzahlTagungsraeume Setter for anzahlTagungsraeume
	 * @return Flaechen
	 */
	public function setAnzahlTagungsraeume(decimal $anzahlTagungsraeume) {
		$this->anzahlTagungsraeume = $anzahlTagungsraeume;
		return $this;
	}

	/**
	 * @param decimal $anzahlTerrassen Setter for anzahlTerrassen
	 * @return Flaechen
	 */
	public function setAnzahlTerrassen(decimal $anzahlTerrassen) {
		$this->anzahlTerrassen = $anzahlTerrassen;
		return $this;
	}

	/**
	 * @param decimal $anzahlWohneinheiten Setter for anzahlWohneinheiten
	 * @return Flaechen
	 */
	public function setAnzahlWohneinheiten(decimal $anzahlWohneinheiten) {
		$this->anzahlWohneinheiten = $anzahlWohneinheiten;
		return $this;
	}

	/**
	 * @param decimal $anzahlWohnSchlafzimmer Setter for anzahlWohnSchlafzimmer
	 * @return Flaechen
	 */
	public function setAnzahlWohnSchlafzimmer(decimal $anzahlWohnSchlafzimmer) {
		$this->anzahlWohnSchlafzimmer = $anzahlWohnSchlafzimmer;
		return $this;
	}

	/**
	 * @param decimal $anzahlZimmer Setter for anzahlZimmer
	 * @return Flaechen
	 */
	public function setAnzahlZimmer(decimal $anzahlZimmer) {
		$this->anzahlZimmer = $anzahlZimmer;
		return $this;
	}

	/**
	 * @param decimal $ausnuetzungsziffer Setter for ausnuetzungsziffer
	 * @return Flaechen
	 */
	public function setAusnuetzungsziffer(decimal $ausnuetzungsziffer) {
		$this->ausnuetzungsziffer = $ausnuetzungsziffer;
		return $this;
	}

	/**
	 * @param decimal $balkonTerrasseFlaeche Setter for balkonTerrasseFlaeche
	 * @return Flaechen
	 */
	public function setBalkonTerrasseFlaeche(decimal $balkonTerrasseFlaeche) {
		$this->balkonTerrasseFlaeche = $balkonTerrasseFlaeche;
		return $this;
	}

	/**
	 * @param decimal $beheizbareFlaeche Setter for beheizbareFlaeche
	 * @return Flaechen
	 */
	public function setBeheizbareFlaeche(decimal $beheizbareFlaeche) {
		$this->beheizbareFlaeche = $beheizbareFlaeche;
		return $this;
	}

	/**
	 * @param string $bgf Setter for bgf
	 * @return Flaechen
	 */
	public function setBgf($bgf) {
		$this->bgf = $bgf;
		return $this;
	}

	/**
	 * @param string $bmz Setter for bmz
	 * @return Flaechen
	 */
	public function setBmz($bmz) {
		$this->bmz = $bmz;
		return $this;
	}

	/**
	 * @param decimal $bueroflaeche Setter for bueroflaeche
	 * @return Flaechen
	 */
	public function setBueroflaeche(decimal $bueroflaeche) {
		$this->bueroflaeche = $bueroflaeche;
		return $this;
	}

	/**
	 * @param decimal $bueroteilflaeche Setter for bueroteilflaeche
	 * @return Flaechen
	 */
	public function setBueroteilflaeche(decimal $bueroteilflaeche) {
		$this->bueroteilflaeche = $bueroteilflaeche;
		return $this;
	}

	/**
	 * @param decimal $dachbodenflaeche Setter for dachbodenflaeche
	 * @return Flaechen
	 */
	public function setDachbodenflaeche(decimal $dachbodenflaeche) {
		$this->dachbodenflaeche = $dachbodenflaeche;
		return $this;
	}

	/**
	 * @param boolean $einliegerwohnung Setter for einliegerwohnung
	 * @return Flaechen
	 */
	public function setEinliegerwohnung($einliegerwohnung) {
		$this->einliegerwohnung = $einliegerwohnung;
		return $this;
	}

	/**
	 * @param decimal $fensterfront Setter for fensterfront
	 * @return Flaechen
	 */
	public function setFensterfront(decimal $fensterfront) {
		$this->fensterfront = $fensterfront;
		return $this;
	}

	/**
	 * @param decimal $fensterfrontQm Setter for fensterfrontQm
	 * @return Flaechen
	 */
	public function setFensterfrontQm(decimal $fensterfrontQm) {
		$this->fensterfrontQm = $fensterfrontQm;
		return $this;
	}

	/**
	 * @param decimal $flaechebis Setter for flaechebis
	 * @return Flaechen
	 */
	public function setFlaechebis(decimal $flaechebis) {
		$this->flaechebis = $flaechebis;
		return $this;
	}

	/**
	 * @param decimal $flaechevon Setter for flaechevon
	 * @return Flaechen
	 */
	public function setFlaechevon(decimal $flaechevon) {
		$this->flaechevon = $flaechevon;
		return $this;
	}

	/**
	 * @param decimal $freiflaeche Setter for freiflaeche
	 * @return Flaechen
	 */
	public function setFreiflaeche(decimal $freiflaeche) {
		$this->freiflaeche = $freiflaeche;
		return $this;
	}

	/**
	 * @param decimal $gartenflaeche Setter for gartenflaeche
	 * @return Flaechen
	 */
	public function setGartenflaeche(decimal $gartenflaeche) {
		$this->gartenflaeche = $gartenflaeche;
		return $this;
	}

	/**
	 * @param decimal $gastroflaeche Setter for gastroflaeche
	 * @return Flaechen
	 */
	public function setGastroflaeche(decimal $gastroflaeche) {
		$this->gastroflaeche = $gastroflaeche;
		return $this;
	}

	/**
	 * @param decimal $gesamtflaeche Setter for gesamtflaeche
	 * @return Flaechen
	 */
	public function setGesamtflaeche(decimal $gesamtflaeche) {
		$this->gesamtflaeche = $gesamtflaeche;
		return $this;
	}

	/**
	 * @param string $gfz Setter for gfz
	 * @return Flaechen
	 */
	public function setGfz($gfz) {
		$this->gfz = $gfz;
		return $this;
	}

	/**
	 * @param decimal $grundstuecksflaeche Setter for grundstuecksflaeche
	 * @return Flaechen
	 */
	public function setGrundstuecksflaeche(decimal $grundstuecksflaeche) {
		$this->grundstuecksflaeche = $grundstuecksflaeche;
		return $this;
	}

	/**
	 * @param decimal $grundstuecksfront Setter for grundstuecksfront
	 * @return Flaechen
	 */
	public function setGrundstuecksfront(decimal $grundstuecksfront) {
		$this->grundstuecksfront = $grundstuecksfront;
		return $this;
	}

	/**
	 * @param string $grz Setter for grz
	 * @return Flaechen
	 */
	public function setGrz($grz) {
		$this->grz = $grz;
		return $this;
	}

	/**
	 * @param decimal $kellerflaeche Setter for kellerflaeche
	 * @return Flaechen
	 */
	public function setKellerflaeche(decimal $kellerflaeche) {
		$this->kellerflaeche = $kellerflaeche;
		return $this;
	}

	/**
	 * @param decimal $kubatur Setter for kubatur
	 * @return Flaechen
	 */
	public function setKubatur(decimal $kubatur) {
		$this->kubatur = $kubatur;
		return $this;
	}

	/**
	 * @param decimal $ladenflaeche Setter for ladenflaeche
	 * @return Flaechen
	 */
	public function setLadenflaeche(decimal $ladenflaeche) {
		$this->ladenflaeche = $ladenflaeche;
		return $this;
	}

	/**
	 * @param decimal $lagerflaeche Setter for lagerflaeche
	 * @return Flaechen
	 */
	public function setLagerflaeche(decimal $lagerflaeche) {
		$this->lagerflaeche = $lagerflaeche;
		return $this;
	}

	/**
	 * @param decimal $nutzflaeche Setter for nutzflaeche
	 * @return Flaechen
	 */
	public function setNutzflaeche(decimal $nutzflaeche) {
		$this->nutzflaeche = $nutzflaeche;
		return $this;
	}

	/**
	 * @param decimal $plaetzeGastraum Setter for plaetzeGastraum
	 * @return Flaechen
	 */
	public function setPlaetzeGastraum(decimal $plaetzeGastraum) {
		$this->plaetzeGastraum = $plaetzeGastraum;
		return $this;
	}

	/**
	 * @param decimal $sonstflaeche Setter for sonstflaeche
	 * @return Flaechen
	 */
	public function setSonstflaeche(decimal $sonstflaeche) {
		$this->sonstflaeche = $sonstflaeche;
		return $this;
	}

	/**
	 * @param decimal $teilbarAb Setter for teilbarAb
	 * @return Flaechen
	 */
	public function setTeilbarAb(decimal $teilbarAb) {
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
	 * @param decimal $verkaufsflaeche Setter for verkaufsflaeche
	 * @return Flaechen
	 */
	public function setVerkaufsflaeche(decimal $verkaufsflaeche) {
		$this->verkaufsflaeche = $verkaufsflaeche;
		return $this;
	}

	/**
	 * @param decimal $vermietbareFlaeche Setter for vermietbareFlaeche
	 * @return Flaechen
	 */
	public function setVermietbareFlaeche(decimal $vermietbareFlaeche) {
		$this->vermietbareFlaeche = $vermietbareFlaeche;
		return $this;
	}

	/**
	 * @param decimal $verwaltungsflaeche Setter for verwaltungsflaeche
	 * @return Flaechen
	 */
	public function setVerwaltungsflaeche(decimal $verwaltungsflaeche) {
		$this->verwaltungsflaeche = $verwaltungsflaeche;
		return $this;
	}

	/**
	 * @param decimal $wohnflaeche Setter for wohnflaeche
	 * @return Flaechen
	 */
	public function setWohnflaeche(decimal $wohnflaeche) {
		$this->wohnflaeche = $wohnflaeche;
		return $this;
	}
}
