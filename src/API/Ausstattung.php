<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Ausstattung {

	/**
	 * @var boolean
	 */
	protected $abstellraum;

	/**
	 * @var AngeschlGastronomie
	 */
	protected $angeschlGastronomie;

	/**
	 * @var Ausbaustufe
	 */
	protected $ausbaustufe;

	/**
	 * @var AusrichtBalkonTerrasse
	 */
	protected $ausrichtBalkonTerrasse;

	/**
	 */
	protected $ausstattKategorie;

	/**
	 * @var Bad
	 */
	protected $bad;

	/**
	 * @var boolean
	 */
	protected $barrierefrei;

	/**
	 * @var Bauweise
	 */
	protected $bauweise;

	/**
	 * @var Befeuerung
	 */
	protected $befeuerung;

	/**
	 * @var boolean
	 */
	protected $bibliothek;

	/**
	 * @var Boden
	 */
	protected $boden;

	/**
	 * @var boolean
	 */
	protected $brauereibindung;

	/**
	 * @var BreitbandZugang
	 */
	protected $breitbandZugang;

	/**
	 * @var boolean
	 */
	protected $dachboden;

	/**
	 * @var Dachform
	 */
	protected $dachform;

	/**
	 * @var boolean
	 */
	protected $dvbt;

	/**
	 * @var boolean
	 */
	protected $dvVerkabelung;

	/**
	 * @var Energietyp
	 */
	protected $energietyp;

	/**
	 * @var boolean
	 */
	protected $fahrradraum;

	/**
	 * @var Fahrstuhl
	 */
	protected $fahrstuhl;

	/**
	 * @var boolean
	 */
	protected $gaestewc;

	/**
	 * @var boolean
	 */
	protected $gartennutzung;

	/**
	 * @var boolean
	 */
	protected $gastterrasse;

	/**
	 * @var decimal
	 */
	protected $hallenhoehe;

	/**
	 * @var boolean
	 */
	protected $hebebuehne;

	/**
	 * @var Heizungsart
	 */
	protected $heizungsart;

	/**
	 * @var boolean
	 */
	protected $kabelkanaele;

	/**
	 * @var boolean
	 */
	protected $kabelSatTv;

	/**
	 * @var boolean
	 */
	protected $kamin;

	/**
	 * @var boolean
	 */
	protected $kantineCafeteria;

	/**
	 * @var boolean
	 */
	protected $klimatisiert;

	/**
	 * @var boolean
	 */
	protected $kran;

	/**
	 * @var Kueche
	 */
	protected $kueche;

	/**
	 * @var Moebliert
	 */
	protected $moebliert;

	/**
	 * @var boolean
	 */
	protected $raeumeVeraenderbar;

	/**
	 * @var boolean
	 */
	protected $rampe;

	/**
	 * @var boolean
	 */
	protected $rolladen;

	/**
	 * @var boolean
	 */
	protected $rollstuhlgerecht;

	/**
	 * @var boolean
	 */
	protected $sauna;

	/**
	 * @var boolean
	 */
	protected $seniorengerecht;

	/**
	 * @var Serviceleistungen[]
	 */
	protected $serviceleistungen;

	/**
	 * @var Sicherheitstechnik
	 */
	protected $sicherheitstechnik;

	/**
	 * @var boolean
	 */
	protected $sporteinrichtungen;

	/**
	 * @var Stellplatzart[]
	 */
	protected $stellplatzart;

	/**
	 * @var string
	 */
	protected $stromanschlusswert;

	/**
	 * @var boolean
	 */
	protected $swimmingpool;

	/**
	 * @var boolean
	 */
	protected $teekueche;

	/**
	 * @var boolean
	 */
	protected $telefonFerienimmobilie;

	/**
	 * @var boolean
	 */
	protected $umtsEmpfang;

	/**
	 * @var Unterkellert
	 */
	protected $unterkellert;

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
	 * @var boolean
	 */
	protected $waschTrockenraum;

	/**
	 * @var boolean
	 */
	protected $wellnessbereich;

	/**
	 * @var boolean
	 */
	protected $wgGeeignet;

	/**
	 * @var boolean
	 */
	protected $wintergarten;

	/**
	 * @return boolean
	 */
	public function getAbstellraum() {
		return $this->abstellraum;
	}

	/**
	 * @return AngeschlGastronomie
	 */
	public function getAngeschlGastronomie() {
		return $this->angeschlGastronomie;
	}

	/**
	 * @return Ausbaustufe
	 */
	public function getAusbaustufe() {
		return $this->ausbaustufe;
	}

	/**
	 * @return AusrichtBalkonTerrasse
	 */
	public function getAusrichtBalkonTerrasse() {
		return $this->ausrichtBalkonTerrasse;
	}

	/**
	 */
	public function getAusstattKategorie() {
		return $this->ausstattKategorie;
	}

	/**
	 * @return Bad
	 */
	public function getBad() {
		return $this->bad;
	}

	/**
	 * @return boolean
	 */
	public function getBarrierefrei() {
		return $this->barrierefrei;
	}

	/**
	 * @return Bauweise
	 */
	public function getBauweise() {
		return $this->bauweise;
	}

	/**
	 * @return Befeuerung
	 */
	public function getBefeuerung() {
		return $this->befeuerung;
	}

	/**
	 * @return boolean
	 */
	public function getBibliothek() {
		return $this->bibliothek;
	}

	/**
	 * @return Boden
	 */
	public function getBoden() {
		return $this->boden;
	}

	/**
	 * @return boolean
	 */
	public function getBrauereibindung() {
		return $this->brauereibindung;
	}

	/**
	 * @return BreitbandZugang
	 */
	public function getBreitbandZugang() {
		return $this->breitbandZugang;
	}

	/**
	 * @return boolean
	 */
	public function getDachboden() {
		return $this->dachboden;
	}

	/**
	 * @return Dachform
	 */
	public function getDachform() {
		return $this->dachform;
	}

	/**
	 * @return boolean
	 */
	public function getDvbt() {
		return $this->dvbt;
	}

	/**
	 * @return boolean
	 */
	public function getDvVerkabelung() {
		return $this->dvVerkabelung;
	}

	/**
	 * @return Energietyp
	 */
	public function getEnergietyp() {
		return $this->energietyp;
	}

	/**
	 * @return boolean
	 */
	public function getFahrradraum() {
		return $this->fahrradraum;
	}

	/**
	 * @return Fahrstuhl
	 */
	public function getFahrstuhl() {
		return $this->fahrstuhl;
	}

	/**
	 * @return boolean
	 */
	public function getGaestewc() {
		return $this->gaestewc;
	}

	/**
	 * @return boolean
	 */
	public function getGartennutzung() {
		return $this->gartennutzung;
	}

	/**
	 * @return boolean
	 */
	public function getGastterrasse() {
		return $this->gastterrasse;
	}

	/**
	 * @return decimal
	 */
	public function getHallenhoehe() {
		return $this->hallenhoehe;
	}

	/**
	 * @return boolean
	 */
	public function getHebebuehne() {
		return $this->hebebuehne;
	}

	/**
	 * @return Heizungsart
	 */
	public function getHeizungsart() {
		return $this->heizungsart;
	}

	/**
	 * @return boolean
	 */
	public function getKabelkanaele() {
		return $this->kabelkanaele;
	}

	/**
	 * @return boolean
	 */
	public function getKabelSatTv() {
		return $this->kabelSatTv;
	}

	/**
	 * @return boolean
	 */
	public function getKamin() {
		return $this->kamin;
	}

	/**
	 * @return boolean
	 */
	public function getKantineCafeteria() {
		return $this->kantineCafeteria;
	}

	/**
	 * @return boolean
	 */
	public function getKlimatisiert() {
		return $this->klimatisiert;
	}

	/**
	 * @return boolean
	 */
	public function getKran() {
		return $this->kran;
	}

	/**
	 * @return Kueche
	 */
	public function getKueche() {
		return $this->kueche;
	}

	/**
	 * @return Moebliert
	 */
	public function getMoebliert() {
		return $this->moebliert;
	}

	/**
	 * @return boolean
	 */
	public function getRaeumeVeraenderbar() {
		return $this->raeumeVeraenderbar;
	}

	/**
	 * @return boolean
	 */
	public function getRampe() {
		return $this->rampe;
	}

	/**
	 * @return boolean
	 */
	public function getRolladen() {
		return $this->rolladen;
	}

	/**
	 * @return boolean
	 */
	public function getRollstuhlgerecht() {
		return $this->rollstuhlgerecht;
	}

	/**
	 * @return boolean
	 */
	public function getSauna() {
		return $this->sauna;
	}

	/**
	 * @return boolean
	 */
	public function getSeniorengerecht() {
		return $this->seniorengerecht;
	}

	/**
	 * @return Serviceleistungen[]
	 */
	public function getServiceleistungen() {
		return $this->serviceleistungen;
	}

	/**
	 * @return Sicherheitstechnik
	 */
	public function getSicherheitstechnik() {
		return $this->sicherheitstechnik;
	}

	/**
	 * @return boolean
	 */
	public function getSporteinrichtungen() {
		return $this->sporteinrichtungen;
	}

	/**
	 * @return Stellplatzart[]
	 */
	public function getStellplatzart() {
		return $this->stellplatzart;
	}

	/**
	 * @return string
	 */
	public function getStromanschlusswert() {
		return $this->stromanschlusswert;
	}

	/**
	 * @return boolean
	 */
	public function getSwimmingpool() {
		return $this->swimmingpool;
	}

	/**
	 * @return boolean
	 */
	public function getTeekueche() {
		return $this->teekueche;
	}

	/**
	 * @return boolean
	 */
	public function getTelefonFerienimmobilie() {
		return $this->telefonFerienimmobilie;
	}

	/**
	 * @return boolean
	 */
	public function getUmtsEmpfang() {
		return $this->umtsEmpfang;
	}

	/**
	 * @return Unterkellert
	 */
	public function getUnterkellert() {
		return $this->unterkellert;
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
	 * @return boolean
	 */
	public function getWaschTrockenraum() {
		return $this->waschTrockenraum;
	}

	/**
	 * @return boolean
	 */
	public function getWellnessbereich() {
		return $this->wellnessbereich;
	}

	/**
	 * @return boolean
	 */
	public function getWgGeeignet() {
		return $this->wgGeeignet;
	}

	/**
	 * @return boolean
	 */
	public function getWintergarten() {
		return $this->wintergarten;
	}

	/**
	 * @param boolean $abstellraum Setter for abstellraum
	 * @return Ausstattung
	 */
	public function setAbstellraum($abstellraum) {
		$this->abstellraum = $abstellraum;
		return $this;
	}

	/**
	 * @param AngeschlGastronomie $angeschlGastronomie Setter for angeschlGastronomie
	 * @return Ausstattung
	 */
	public function setAngeschlGastronomie(AngeschlGastronomie $angeschlGastronomie) {
		$this->angeschlGastronomie = $angeschlGastronomie;
		return $this;
	}

	/**
	 * @param Ausbaustufe $ausbaustufe Setter for ausbaustufe
	 * @return Ausstattung
	 */
	public function setAusbaustufe(Ausbaustufe $ausbaustufe) {
		$this->ausbaustufe = $ausbaustufe;
		return $this;
	}

	/**
	 * @param AusrichtBalkonTerrasse $ausrichtBalkonTerrasse Setter for ausrichtBalkonTerrasse
	 * @return Ausstattung
	 */
	public function setAusrichtBalkonTerrasse(AusrichtBalkonTerrasse $ausrichtBalkonTerrasse) {
		$this->ausrichtBalkonTerrasse = $ausrichtBalkonTerrasse;
		return $this;
	}

	/**
	 * @param $ausstattKategorie Setter for ausstattKategorie
	 * @return Ausstattung
	 */
	public function setAusstattKategorie($ausstattKategorie) {
		$this->ausstattKategorie = $ausstattKategorie;
		return $this;
	}

	/**
	 * @param Bad $bad Setter for bad
	 * @return Ausstattung
	 */
	public function setBad(Bad $bad) {
		$this->bad = $bad;
		return $this;
	}

	/**
	 * @param boolean $barrierefrei Setter for barrierefrei
	 * @return Ausstattung
	 */
	public function setBarrierefrei($barrierefrei) {
		$this->barrierefrei = $barrierefrei;
		return $this;
	}

	/**
	 * @param Bauweise $bauweise Setter for bauweise
	 * @return Ausstattung
	 */
	public function setBauweise(Bauweise $bauweise) {
		$this->bauweise = $bauweise;
		return $this;
	}

	/**
	 * @param Befeuerung $befeuerung Setter for befeuerung
	 * @return Ausstattung
	 */
	public function setBefeuerung(Befeuerung $befeuerung) {
		$this->befeuerung = $befeuerung;
		return $this;
	}

	/**
	 * @param boolean $bibliothek Setter for bibliothek
	 * @return Ausstattung
	 */
	public function setBibliothek($bibliothek) {
		$this->bibliothek = $bibliothek;
		return $this;
	}

	/**
	 * @param Boden $boden Setter for boden
	 * @return Ausstattung
	 */
	public function setBoden(Boden $boden) {
		$this->boden = $boden;
		return $this;
	}

	/**
	 * @param boolean $brauereibindung Setter for brauereibindung
	 * @return Ausstattung
	 */
	public function setBrauereibindung($brauereibindung) {
		$this->brauereibindung = $brauereibindung;
		return $this;
	}

	/**
	 * @param BreitbandZugang $breitbandZugang Setter for breitbandZugang
	 * @return Ausstattung
	 */
	public function setBreitbandZugang(BreitbandZugang $breitbandZugang) {
		$this->breitbandZugang = $breitbandZugang;
		return $this;
	}

	/**
	 * @param boolean $dachboden Setter for dachboden
	 * @return Ausstattung
	 */
	public function setDachboden($dachboden) {
		$this->dachboden = $dachboden;
		return $this;
	}

	/**
	 * @param Dachform $dachform Setter for dachform
	 * @return Ausstattung
	 */
	public function setDachform(Dachform $dachform) {
		$this->dachform = $dachform;
		return $this;
	}

	/**
	 * @param boolean $dvbt Setter for dvbt
	 * @return Ausstattung
	 */
	public function setDvbt($dvbt) {
		$this->dvbt = $dvbt;
		return $this;
	}

	/**
	 * @param boolean $dvVerkabelung Setter for dvVerkabelung
	 * @return Ausstattung
	 */
	public function setDvVerkabelung($dvVerkabelung) {
		$this->dvVerkabelung = $dvVerkabelung;
		return $this;
	}

	/**
	 * @param Energietyp $energietyp Setter for energietyp
	 * @return Ausstattung
	 */
	public function setEnergietyp(Energietyp $energietyp) {
		$this->energietyp = $energietyp;
		return $this;
	}

	/**
	 * @param boolean $fahrradraum Setter for fahrradraum
	 * @return Ausstattung
	 */
	public function setFahrradraum($fahrradraum) {
		$this->fahrradraum = $fahrradraum;
		return $this;
	}

	/**
	 * @param Fahrstuhl $fahrstuhl Setter for fahrstuhl
	 * @return Ausstattung
	 */
	public function setFahrstuhl(Fahrstuhl $fahrstuhl) {
		$this->fahrstuhl = $fahrstuhl;
		return $this;
	}

	/**
	 * @param boolean $gaestewc Setter for gaestewc
	 * @return Ausstattung
	 */
	public function setGaestewc($gaestewc) {
		$this->gaestewc = $gaestewc;
		return $this;
	}

	/**
	 * @param boolean $gartennutzung Setter for gartennutzung
	 * @return Ausstattung
	 */
	public function setGartennutzung($gartennutzung) {
		$this->gartennutzung = $gartennutzung;
		return $this;
	}

	/**
	 * @param boolean $gastterrasse Setter for gastterrasse
	 * @return Ausstattung
	 */
	public function setGastterrasse($gastterrasse) {
		$this->gastterrasse = $gastterrasse;
		return $this;
	}

	/**
	 * @param decimal $hallenhoehe Setter for hallenhoehe
	 * @return Ausstattung
	 */
	public function setHallenhoehe(decimal $hallenhoehe) {
		$this->hallenhoehe = $hallenhoehe;
		return $this;
	}

	/**
	 * @param boolean $hebebuehne Setter for hebebuehne
	 * @return Ausstattung
	 */
	public function setHebebuehne($hebebuehne) {
		$this->hebebuehne = $hebebuehne;
		return $this;
	}

	/**
	 * @param Heizungsart $heizungsart Setter for heizungsart
	 * @return Ausstattung
	 */
	public function setHeizungsart(Heizungsart $heizungsart) {
		$this->heizungsart = $heizungsart;
		return $this;
	}

	/**
	 * @param boolean $kabelkanaele Setter for kabelkanaele
	 * @return Ausstattung
	 */
	public function setKabelkanaele($kabelkanaele) {
		$this->kabelkanaele = $kabelkanaele;
		return $this;
	}

	/**
	 * @param boolean $kabelSatTv Setter for kabelSatTv
	 * @return Ausstattung
	 */
	public function setKabelSatTv($kabelSatTv) {
		$this->kabelSatTv = $kabelSatTv;
		return $this;
	}

	/**
	 * @param boolean $kamin Setter for kamin
	 * @return Ausstattung
	 */
	public function setKamin($kamin) {
		$this->kamin = $kamin;
		return $this;
	}

	/**
	 * @param boolean $kantineCafeteria Setter for kantineCafeteria
	 * @return Ausstattung
	 */
	public function setKantineCafeteria($kantineCafeteria) {
		$this->kantineCafeteria = $kantineCafeteria;
		return $this;
	}

	/**
	 * @param boolean $klimatisiert Setter for klimatisiert
	 * @return Ausstattung
	 */
	public function setKlimatisiert($klimatisiert) {
		$this->klimatisiert = $klimatisiert;
		return $this;
	}

	/**
	 * @param boolean $kran Setter for kran
	 * @return Ausstattung
	 */
	public function setKran($kran) {
		$this->kran = $kran;
		return $this;
	}

	/**
	 * @param Kueche $kueche Setter for kueche
	 * @return Ausstattung
	 */
	public function setKueche(Kueche $kueche) {
		$this->kueche = $kueche;
		return $this;
	}

	/**
	 * @param Moebliert $moebliert Setter for moebliert
	 * @return Ausstattung
	 */
	public function setMoebliert(Moebliert $moebliert) {
		$this->moebliert = $moebliert;
		return $this;
	}

	/**
	 * @param boolean $raeumeVeraenderbar Setter for raeumeVeraenderbar
	 * @return Ausstattung
	 */
	public function setRaeumeVeraenderbar($raeumeVeraenderbar) {
		$this->raeumeVeraenderbar = $raeumeVeraenderbar;
		return $this;
	}

	/**
	 * @param boolean $rampe Setter for rampe
	 * @return Ausstattung
	 */
	public function setRampe($rampe) {
		$this->rampe = $rampe;
		return $this;
	}

	/**
	 * @param boolean $rolladen Setter for rolladen
	 * @return Ausstattung
	 */
	public function setRolladen($rolladen) {
		$this->rolladen = $rolladen;
		return $this;
	}

	/**
	 * @param boolean $rollstuhlgerecht Setter for rollstuhlgerecht
	 * @return Ausstattung
	 */
	public function setRollstuhlgerecht($rollstuhlgerecht) {
		$this->rollstuhlgerecht = $rollstuhlgerecht;
		return $this;
	}

	/**
	 * @param boolean $sauna Setter for sauna
	 * @return Ausstattung
	 */
	public function setSauna($sauna) {
		$this->sauna = $sauna;
		return $this;
	}

	/**
	 * @param boolean $seniorengerecht Setter for seniorengerecht
	 * @return Ausstattung
	 */
	public function setSeniorengerecht($seniorengerecht) {
		$this->seniorengerecht = $seniorengerecht;
		return $this;
	}

	/**
	 * @param array $serviceleistungen Setter for serviceleistungen
	 * @return Ausstattung
	 */
	public function setServiceleistungen(array $serviceleistungen) {
		$this->serviceleistungen = $serviceleistungen;
		return $this;
	}

	/**
	 * @param Sicherheitstechnik $sicherheitstechnik Setter for sicherheitstechnik
	 * @return Ausstattung
	 */
	public function setSicherheitstechnik(Sicherheitstechnik $sicherheitstechnik) {
		$this->sicherheitstechnik = $sicherheitstechnik;
		return $this;
	}

	/**
	 * @param boolean $sporteinrichtungen Setter for sporteinrichtungen
	 * @return Ausstattung
	 */
	public function setSporteinrichtungen($sporteinrichtungen) {
		$this->sporteinrichtungen = $sporteinrichtungen;
		return $this;
	}

	/**
	 * @param array $stellplatzart Setter for stellplatzart
	 * @return Ausstattung
	 */
	public function setStellplatzart(array $stellplatzart) {
		$this->stellplatzart = $stellplatzart;
		return $this;
	}

	/**
	 * @param string $stromanschlusswert Setter for stromanschlusswert
	 * @return Ausstattung
	 */
	public function setStromanschlusswert($stromanschlusswert) {
		$this->stromanschlusswert = $stromanschlusswert;
		return $this;
	}

	/**
	 * @param boolean $swimmingpool Setter for swimmingpool
	 * @return Ausstattung
	 */
	public function setSwimmingpool($swimmingpool) {
		$this->swimmingpool = $swimmingpool;
		return $this;
	}

	/**
	 * @param boolean $teekueche Setter for teekueche
	 * @return Ausstattung
	 */
	public function setTeekueche($teekueche) {
		$this->teekueche = $teekueche;
		return $this;
	}

	/**
	 * @param boolean $telefonFerienimmobilie Setter for telefonFerienimmobilie
	 * @return Ausstattung
	 */
	public function setTelefonFerienimmobilie($telefonFerienimmobilie) {
		$this->telefonFerienimmobilie = $telefonFerienimmobilie;
		return $this;
	}

	/**
	 * @param boolean $umtsEmpfang Setter for umtsEmpfang
	 * @return Ausstattung
	 */
	public function setUmtsEmpfang($umtsEmpfang) {
		$this->umtsEmpfang = $umtsEmpfang;
		return $this;
	}

	/**
	 * @param Unterkellert $unterkellert Setter for unterkellert
	 * @return Ausstattung
	 */
	public function setUnterkellert(Unterkellert $unterkellert) {
		$this->unterkellert = $unterkellert;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Ausstattung
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Ausstattung
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Ausstattung
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param boolean $waschTrockenraum Setter for waschTrockenraum
	 * @return Ausstattung
	 */
	public function setWaschTrockenraum($waschTrockenraum) {
		$this->waschTrockenraum = $waschTrockenraum;
		return $this;
	}

	/**
	 * @param boolean $wellnessbereich Setter for wellnessbereich
	 * @return Ausstattung
	 */
	public function setWellnessbereich($wellnessbereich) {
		$this->wellnessbereich = $wellnessbereich;
		return $this;
	}

	/**
	 * @param boolean $wgGeeignet Setter for wgGeeignet
	 * @return Ausstattung
	 */
	public function setWgGeeignet($wgGeeignet) {
		$this->wgGeeignet = $wgGeeignet;
		return $this;
	}

	/**
	 * @param boolean $wintergarten Setter for wintergarten
	 * @return Ausstattung
	 */
	public function setWintergarten($wintergarten) {
		$this->wintergarten = $wintergarten;
		return $this;
	}
}
