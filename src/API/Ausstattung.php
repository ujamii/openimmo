<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausstattung
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("ausstattung") 
 */
class Ausstattung {

	/**
	 */
	const AUSSTATT_KATEGORIE_GEHOBEN = 'GEHOBEN';

	/**
	 */
	const AUSSTATT_KATEGORIE_LUXUS = 'LUXUS';

	/**
	 */
	const AUSSTATT_KATEGORIE_STANDARD = 'STANDARD';

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $abstellraum;

	/**
	 * @Type("Ujamii\OpenImmo\API\AngeschlGastronomie") 
	 * @var AngeschlGastronomie
	 */
	protected $angeschlGastronomie;

	/**
	 * @Type("Ujamii\OpenImmo\API\Ausbaustufe") 
	 * @var Ausbaustufe
	 */
	protected $ausbaustufe;

	/**
	 * @Type("Ujamii\OpenImmo\API\AusrichtBalkonTerrasse") 
	 * @var AusrichtBalkonTerrasse
	 */
	protected $ausrichtBalkonTerrasse;

	/**
	 * @Type("string") 
	 * @see AUSSTATT_KATEGORIE_* constants
	 * @var string
	 */
	protected $ausstattKategorie;

	/**
	 * @Type("Ujamii\OpenImmo\API\Bad") 
	 * @var Bad
	 */
	protected $bad;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $barrierefrei;

	/**
	 * @Type("Ujamii\OpenImmo\API\Bauweise") 
	 * @var Bauweise
	 */
	protected $bauweise;

	/**
	 * @Type("Ujamii\OpenImmo\API\Befeuerung") 
	 * @var Befeuerung
	 */
	protected $befeuerung;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $bibliothek;

	/**
	 * @Type("Ujamii\OpenImmo\API\Boden") 
	 * @var Boden
	 */
	protected $boden;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $brauereibindung;

	/**
	 * @Type("Ujamii\OpenImmo\API\BreitbandZugang") 
	 * @var BreitbandZugang
	 */
	protected $breitbandZugang;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $dachboden;

	/**
	 * @Type("Ujamii\OpenImmo\API\Dachform") 
	 * @var Dachform
	 */
	protected $dachform;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $dvbt;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $dvVerkabelung;

	/**
	 * @Type("Ujamii\OpenImmo\API\Energietyp") 
	 * @var Energietyp
	 */
	protected $energietyp;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $fahrradraum;

	/**
	 * @Type("Ujamii\OpenImmo\API\Fahrstuhl") 
	 * @var Fahrstuhl
	 */
	protected $fahrstuhl;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $gaestewc;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $gartennutzung;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $gastterrasse;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $hallenhoehe;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $hebebuehne;

	/**
	 * @Type("Ujamii\OpenImmo\API\Heizungsart") 
	 * @var Heizungsart
	 */
	protected $heizungsart;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $kabelkanaele;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $kabelSatTv;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $kamin;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $kantineCafeteria;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $klimatisiert;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $kran;

	/**
	 * @Type("Ujamii\OpenImmo\API\Kueche") 
	 * @var Kueche
	 */
	protected $kueche;

	/**
	 * @Type("Ujamii\OpenImmo\API\Moebliert") 
	 * @var Moebliert
	 */
	protected $moebliert;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $raeumeVeraenderbar;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $rampe;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $rolladen;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $rollstuhlgerecht;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $sauna;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $seniorengerecht;

	/**
	 * @XmlList(inline = true, entry = "serviceleistungen") 
	 * @Type("array<Ujamii\OpenImmo\API\Serviceleistungen>") 
	 * @var Serviceleistungen[]
	 */
	protected $serviceleistungen;

	/**
	 * @Type("Ujamii\OpenImmo\API\Sicherheitstechnik") 
	 * @var Sicherheitstechnik
	 */
	protected $sicherheitstechnik;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $sporteinrichtungen;

	/**
	 * @XmlList(inline = true, entry = "stellplatzart") 
	 * @Type("array<Ujamii\OpenImmo\API\Stellplatzart>") 
	 * @var Stellplatzart[]
	 */
	protected $stellplatzart;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $stromanschlusswert;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $swimmingpool;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $teekueche;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $telefonFerienimmobilie;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $umtsEmpfang;

	/**
	 * @Type("Ujamii\OpenImmo\API\Unterkellert") 
	 * @var Unterkellert
	 */
	protected $unterkellert;

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
	protected $waschTrockenraum;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $wellnessbereich;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $wgGeeignet;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $wintergarten;

	/**
	 * @return boolean
	 */
	public function getAbstellraum(): bool {
		return $this->abstellraum;
	}

	/**
	 * @return AngeschlGastronomie
	 */
	public function getAngeschlGastronomie(): AngeschlGastronomie {
		return $this->angeschlGastronomie;
	}

	/**
	 * @return Ausbaustufe
	 */
	public function getAusbaustufe(): Ausbaustufe {
		return $this->ausbaustufe;
	}

	/**
	 * @return AusrichtBalkonTerrasse
	 */
	public function getAusrichtBalkonTerrasse(): AusrichtBalkonTerrasse {
		return $this->ausrichtBalkonTerrasse;
	}

	/**
	 * @return string
	 */
	public function getAusstattKategorie(): string {
		return $this->ausstattKategorie;
	}

	/**
	 * @return Bad
	 */
	public function getBad(): Bad {
		return $this->bad;
	}

	/**
	 * @return boolean
	 */
	public function getBarrierefrei(): bool {
		return $this->barrierefrei;
	}

	/**
	 * @return Bauweise
	 */
	public function getBauweise(): Bauweise {
		return $this->bauweise;
	}

	/**
	 * @return Befeuerung
	 */
	public function getBefeuerung(): Befeuerung {
		return $this->befeuerung;
	}

	/**
	 * @return boolean
	 */
	public function getBibliothek(): bool {
		return $this->bibliothek;
	}

	/**
	 * @return Boden
	 */
	public function getBoden(): Boden {
		return $this->boden;
	}

	/**
	 * @return boolean
	 */
	public function getBrauereibindung(): bool {
		return $this->brauereibindung;
	}

	/**
	 * @return BreitbandZugang
	 */
	public function getBreitbandZugang(): BreitbandZugang {
		return $this->breitbandZugang;
	}

	/**
	 * @return boolean
	 */
	public function getDachboden(): bool {
		return $this->dachboden;
	}

	/**
	 * @return Dachform
	 */
	public function getDachform(): Dachform {
		return $this->dachform;
	}

	/**
	 * @return boolean
	 */
	public function getDvbt(): bool {
		return $this->dvbt;
	}

	/**
	 * @return boolean
	 */
	public function getDvVerkabelung(): bool {
		return $this->dvVerkabelung;
	}

	/**
	 * @return Energietyp
	 */
	public function getEnergietyp(): Energietyp {
		return $this->energietyp;
	}

	/**
	 * @return boolean
	 */
	public function getFahrradraum(): bool {
		return $this->fahrradraum;
	}

	/**
	 * @return Fahrstuhl
	 */
	public function getFahrstuhl(): Fahrstuhl {
		return $this->fahrstuhl;
	}

	/**
	 * @return boolean
	 */
	public function getGaestewc(): bool {
		return $this->gaestewc;
	}

	/**
	 * @return boolean
	 */
	public function getGartennutzung(): bool {
		return $this->gartennutzung;
	}

	/**
	 * @return boolean
	 */
	public function getGastterrasse(): bool {
		return $this->gastterrasse;
	}

	/**
	 * @return float
	 */
	public function getHallenhoehe(): float {
		return $this->hallenhoehe;
	}

	/**
	 * @return boolean
	 */
	public function getHebebuehne(): bool {
		return $this->hebebuehne;
	}

	/**
	 * @return Heizungsart
	 */
	public function getHeizungsart(): Heizungsart {
		return $this->heizungsart;
	}

	/**
	 * @return boolean
	 */
	public function getKabelkanaele(): bool {
		return $this->kabelkanaele;
	}

	/**
	 * @return boolean
	 */
	public function getKabelSatTv(): bool {
		return $this->kabelSatTv;
	}

	/**
	 * @return boolean
	 */
	public function getKamin(): bool {
		return $this->kamin;
	}

	/**
	 * @return boolean
	 */
	public function getKantineCafeteria(): bool {
		return $this->kantineCafeteria;
	}

	/**
	 * @return boolean
	 */
	public function getKlimatisiert(): bool {
		return $this->klimatisiert;
	}

	/**
	 * @return boolean
	 */
	public function getKran(): bool {
		return $this->kran;
	}

	/**
	 * @return Kueche
	 */
	public function getKueche(): Kueche {
		return $this->kueche;
	}

	/**
	 * @return Moebliert
	 */
	public function getMoebliert(): Moebliert {
		return $this->moebliert;
	}

	/**
	 * @return boolean
	 */
	public function getRaeumeVeraenderbar(): bool {
		return $this->raeumeVeraenderbar;
	}

	/**
	 * @return boolean
	 */
	public function getRampe(): bool {
		return $this->rampe;
	}

	/**
	 * @return boolean
	 */
	public function getRolladen(): bool {
		return $this->rolladen;
	}

	/**
	 * @return boolean
	 */
	public function getRollstuhlgerecht(): bool {
		return $this->rollstuhlgerecht;
	}

	/**
	 * @return boolean
	 */
	public function getSauna(): bool {
		return $this->sauna;
	}

	/**
	 * @return boolean
	 */
	public function getSeniorengerecht(): bool {
		return $this->seniorengerecht;
	}

	/**
	 * Returns array of Serviceleistungen
	 *
	 * @return array
	 */
	public function getServiceleistungen(): array {
		return $this->serviceleistungen;
	}

	/**
	 * @return Sicherheitstechnik
	 */
	public function getSicherheitstechnik(): Sicherheitstechnik {
		return $this->sicherheitstechnik;
	}

	/**
	 * @return boolean
	 */
	public function getSporteinrichtungen(): bool {
		return $this->sporteinrichtungen;
	}

	/**
	 * Returns array of Stellplatzart
	 *
	 * @return array
	 */
	public function getStellplatzart(): array {
		return $this->stellplatzart;
	}

	/**
	 * @return string
	 */
	public function getStromanschlusswert(): string {
		return $this->stromanschlusswert;
	}

	/**
	 * @return boolean
	 */
	public function getSwimmingpool(): bool {
		return $this->swimmingpool;
	}

	/**
	 * @return boolean
	 */
	public function getTeekueche(): bool {
		return $this->teekueche;
	}

	/**
	 * @return boolean
	 */
	public function getTelefonFerienimmobilie(): bool {
		return $this->telefonFerienimmobilie;
	}

	/**
	 * @return boolean
	 */
	public function getUmtsEmpfang(): bool {
		return $this->umtsEmpfang;
	}

	/**
	 * @return Unterkellert
	 */
	public function getUnterkellert(): Unterkellert {
		return $this->unterkellert;
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
	public function getWaschTrockenraum(): bool {
		return $this->waschTrockenraum;
	}

	/**
	 * @return boolean
	 */
	public function getWellnessbereich(): bool {
		return $this->wellnessbereich;
	}

	/**
	 * @return boolean
	 */
	public function getWgGeeignet(): bool {
		return $this->wgGeeignet;
	}

	/**
	 * @return boolean
	 */
	public function getWintergarten(): bool {
		return $this->wintergarten;
	}

	/**
	 * @param boolean $abstellraum Setter for abstellraum
	 * @return Ausstattung
	 */
	public function setAbstellraum(bool $abstellraum) {
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
	 * @param string $ausstattKategorie Setter for ausstattKategorie
	 * @return Ausstattung
	 */
	public function setAusstattKategorie(string $ausstattKategorie) {
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
	public function setBarrierefrei(bool $barrierefrei) {
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
	public function setBibliothek(bool $bibliothek) {
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
	public function setBrauereibindung(bool $brauereibindung) {
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
	public function setDachboden(bool $dachboden) {
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
	public function setDvbt(bool $dvbt) {
		$this->dvbt = $dvbt;
		return $this;
	}

	/**
	 * @param boolean $dvVerkabelung Setter for dvVerkabelung
	 * @return Ausstattung
	 */
	public function setDvVerkabelung(bool $dvVerkabelung) {
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
	public function setFahrradraum(bool $fahrradraum) {
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
	public function setGaestewc(bool $gaestewc) {
		$this->gaestewc = $gaestewc;
		return $this;
	}

	/**
	 * @param boolean $gartennutzung Setter for gartennutzung
	 * @return Ausstattung
	 */
	public function setGartennutzung(bool $gartennutzung) {
		$this->gartennutzung = $gartennutzung;
		return $this;
	}

	/**
	 * @param boolean $gastterrasse Setter for gastterrasse
	 * @return Ausstattung
	 */
	public function setGastterrasse(bool $gastterrasse) {
		$this->gastterrasse = $gastterrasse;
		return $this;
	}

	/**
	 * @param float $hallenhoehe Setter for hallenhoehe
	 * @return Ausstattung
	 */
	public function setHallenhoehe(float $hallenhoehe) {
		$this->hallenhoehe = $hallenhoehe;
		return $this;
	}

	/**
	 * @param boolean $hebebuehne Setter for hebebuehne
	 * @return Ausstattung
	 */
	public function setHebebuehne(bool $hebebuehne) {
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
	public function setKabelkanaele(bool $kabelkanaele) {
		$this->kabelkanaele = $kabelkanaele;
		return $this;
	}

	/**
	 * @param boolean $kabelSatTv Setter for kabelSatTv
	 * @return Ausstattung
	 */
	public function setKabelSatTv(bool $kabelSatTv) {
		$this->kabelSatTv = $kabelSatTv;
		return $this;
	}

	/**
	 * @param boolean $kamin Setter for kamin
	 * @return Ausstattung
	 */
	public function setKamin(bool $kamin) {
		$this->kamin = $kamin;
		return $this;
	}

	/**
	 * @param boolean $kantineCafeteria Setter for kantineCafeteria
	 * @return Ausstattung
	 */
	public function setKantineCafeteria(bool $kantineCafeteria) {
		$this->kantineCafeteria = $kantineCafeteria;
		return $this;
	}

	/**
	 * @param boolean $klimatisiert Setter for klimatisiert
	 * @return Ausstattung
	 */
	public function setKlimatisiert(bool $klimatisiert) {
		$this->klimatisiert = $klimatisiert;
		return $this;
	}

	/**
	 * @param boolean $kran Setter for kran
	 * @return Ausstattung
	 */
	public function setKran(bool $kran) {
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
	public function setRaeumeVeraenderbar(bool $raeumeVeraenderbar) {
		$this->raeumeVeraenderbar = $raeumeVeraenderbar;
		return $this;
	}

	/**
	 * @param boolean $rampe Setter for rampe
	 * @return Ausstattung
	 */
	public function setRampe(bool $rampe) {
		$this->rampe = $rampe;
		return $this;
	}

	/**
	 * @param boolean $rolladen Setter for rolladen
	 * @return Ausstattung
	 */
	public function setRolladen(bool $rolladen) {
		$this->rolladen = $rolladen;
		return $this;
	}

	/**
	 * @param boolean $rollstuhlgerecht Setter for rollstuhlgerecht
	 * @return Ausstattung
	 */
	public function setRollstuhlgerecht(bool $rollstuhlgerecht) {
		$this->rollstuhlgerecht = $rollstuhlgerecht;
		return $this;
	}

	/**
	 * @param boolean $sauna Setter for sauna
	 * @return Ausstattung
	 */
	public function setSauna(bool $sauna) {
		$this->sauna = $sauna;
		return $this;
	}

	/**
	 * @param boolean $seniorengerecht Setter for seniorengerecht
	 * @return Ausstattung
	 */
	public function setSeniorengerecht(bool $seniorengerecht) {
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
	public function setSporteinrichtungen(bool $sporteinrichtungen) {
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
	public function setStromanschlusswert(string $stromanschlusswert) {
		$this->stromanschlusswert = $stromanschlusswert;
		return $this;
	}

	/**
	 * @param boolean $swimmingpool Setter for swimmingpool
	 * @return Ausstattung
	 */
	public function setSwimmingpool(bool $swimmingpool) {
		$this->swimmingpool = $swimmingpool;
		return $this;
	}

	/**
	 * @param boolean $teekueche Setter for teekueche
	 * @return Ausstattung
	 */
	public function setTeekueche(bool $teekueche) {
		$this->teekueche = $teekueche;
		return $this;
	}

	/**
	 * @param boolean $telefonFerienimmobilie Setter for telefonFerienimmobilie
	 * @return Ausstattung
	 */
	public function setTelefonFerienimmobilie(bool $telefonFerienimmobilie) {
		$this->telefonFerienimmobilie = $telefonFerienimmobilie;
		return $this;
	}

	/**
	 * @param boolean $umtsEmpfang Setter for umtsEmpfang
	 * @return Ausstattung
	 */
	public function setUmtsEmpfang(bool $umtsEmpfang) {
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
	public function setWaschTrockenraum(bool $waschTrockenraum) {
		$this->waschTrockenraum = $waschTrockenraum;
		return $this;
	}

	/**
	 * @param boolean $wellnessbereich Setter for wellnessbereich
	 * @return Ausstattung
	 */
	public function setWellnessbereich(bool $wellnessbereich) {
		$this->wellnessbereich = $wellnessbereich;
		return $this;
	}

	/**
	 * @param boolean $wgGeeignet Setter for wgGeeignet
	 * @return Ausstattung
	 */
	public function setWgGeeignet(bool $wgGeeignet) {
		$this->wgGeeignet = $wgGeeignet;
		return $this;
	}

	/**
	 * @param boolean $wintergarten Setter for wintergarten
	 * @return Ausstattung
	 */
	public function setWintergarten(bool $wintergarten) {
		$this->wintergarten = $wintergarten;
		return $this;
	}
}
