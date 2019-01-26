<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Preise
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("preise") 
 */
class Preise {

	/**
	 * @var decimal
	 */
	protected $abstand;

	/**
	 * @var AussenCourtage
	 */
	protected $aussenCourtage;

	/**
	 * @var Betriebskostennetto
	 */
	protected $betriebskostennetto;

	/**
	 * @var string
	 */
	protected $courtageHinweis;

	/**
	 * @var decimal
	 */
	protected $erbpacht;

	/**
	 * @var decimal
	 */
	protected $erschliessungskosten;

	/**
	 * @var Evbnetto
	 */
	protected $evbnetto;

	/**
	 * @var string
	 */
	protected $freitextPreis;

	/**
	 * @var decimal
	 */
	protected $gesamtbelastungbrutto;

	/**
	 * @var Gesamtbelastungnetto
	 */
	protected $gesamtbelastungnetto;

	/**
	 * @var Gesamtkostenprom2von
	 */
	protected $gesamtkostenprom2von;

	/**
	 * @var decimal
	 */
	protected $gesamtmietebrutto;

	/**
	 * @var Gesamtmietenetto
	 */
	protected $gesamtmietenetto;

	/**
	 * @var decimal
	 */
	protected $geschaeftsguthaben;

	/**
	 * @var Hauptmietzinsnetto
	 */
	protected $hauptmietzinsnetto;

	/**
	 * @var decimal
	 */
	protected $hausgeld;

	/**
	 * @var decimal
	 */
	protected $heizkosten;

	/**
	 * @var boolean
	 */
	protected $heizkostenEnthalten;

	/**
	 * @var Heizkostennetto
	 */
	protected $heizkostennetto;

	/**
	 * @var InnenCourtage
	 */
	protected $innenCourtage;

	/**
	 * @var decimal
	 */
	protected $kaltmiete;

	/**
	 * @var Kaufpreis
	 */
	protected $kaufpreis;

	/**
	 * @var decimal
	 */
	protected $kaufpreisbrutto;

	/**
	 * @var Kaufpreisnetto
	 */
	protected $kaufpreisnetto;

	/**
	 * @var decimal
	 */
	protected $kaufpreisProQm;

	/**
	 * @var decimal
	 */
	protected $kaution;

	/**
	 * @var string
	 */
	protected $kautionText;

	/**
	 * @var MieteinnahmenIst
	 */
	protected $mieteinnahmenIst;

	/**
	 * @var MieteinnahmenSoll
	 */
	protected $mieteinnahmenSoll;

	/**
	 * @var decimal
	 */
	protected $mietpreisProQm;

	/**
	 * @var decimal
	 */
	protected $mietzuschlaege;

	/**
	 * @var decimal
	 */
	protected $monatlichekostenbrutto;

	/**
	 * @var Monatlichekostennetto
	 */
	protected $monatlichekostennetto;

	/**
	 */
	protected $mwstGesamt;

	/**
	 */
	protected $mwstSatz;

	/**
	 * @var decimal
	 */
	protected $nebenkosten;

	/**
	 * @var Nebenkostenprom2von
	 */
	protected $nebenkostenprom2von;

	/**
	 * @var decimal
	 */
	protected $nettokaltmiete;

	/**
	 * @var Nettomieteprom2von
	 */
	protected $nettomieteprom2von;

	/**
	 * @var decimal
	 */
	protected $nettorendite;

	/**
	 * @var decimal
	 */
	protected $nettorenditeIst;

	/**
	 * @var decimal
	 */
	protected $nettorenditeSoll;

	/**
	 * @var decimal
	 */
	protected $pacht;

	/**
	 * @var decimal
	 */
	protected $pauschalmiete;

	/**
	 * @var PreisZeiteinheit
	 */
	protected $preisZeiteinheit;

	/**
	 * @var date
	 */
	protected $preisZeitraumBis;

	/**
	 * @var date
	 */
	protected $preisZeitraumVon;

	/**
	 * @var decimal
	 */
	protected $provisionbrutto;

	/**
	 * @var Provisionnetto
	 */
	protected $provisionnetto;

	/**
	 * @var boolean
	 */
	protected $provisionspflichtig;

	/**
	 * @var ProvisionTeilen
	 */
	protected $provisionTeilen;

	/**
	 * @var decimal
	 */
	protected $richtpreis;

	/**
	 * @var decimal
	 */
	protected $richtpreisprom2;

	/**
	 * @var Ruecklagenetto
	 */
	protected $ruecklagenetto;

	/**
	 * @var Sonstigekostennetto
	 */
	protected $sonstigekostennetto;

	/**
	 * @var Sonstigemietenetto
	 */
	protected $sonstigemietenetto;

	/**
	 * @var StpCarport
	 */
	protected $stpCarport;

	/**
	 * @var StpDuplex
	 */
	protected $stpDuplex;

	/**
	 * @var StpFreiplatz
	 */
	protected $stpFreiplatz;

	/**
	 * @var StpGarage
	 */
	protected $stpGarage;

	/**
	 * @var StpParkhaus
	 */
	protected $stpParkhaus;

	/**
	 * @var StpSonstige[]
	 */
	protected $stpSonstige;

	/**
	 * @var StpTiefgarage
	 */
	protected $stpTiefgarage;

	/**
	 * @var Summemietenetto
	 */
	protected $summemietenetto;

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
	 * @var Waehrung
	 */
	protected $waehrung;

	/**
	 * @var decimal
	 */
	protected $warmmiete;

	/**
	 * @var string
	 */
	protected $xFache;

	/**
	 * @var boolean
	 */
	protected $zzgMehrwertsteuer;

	/**
	 * @return decimal
	 */
	public function getAbstand(): decimal {
		return $this->abstand;
	}

	/**
	 * @return AussenCourtage
	 */
	public function getAussenCourtage(): AussenCourtage {
		return $this->aussenCourtage;
	}

	/**
	 * @return Betriebskostennetto
	 */
	public function getBetriebskostennetto(): Betriebskostennetto {
		return $this->betriebskostennetto;
	}

	/**
	 * @return string
	 */
	public function getCourtageHinweis(): string {
		return $this->courtageHinweis;
	}

	/**
	 * @return decimal
	 */
	public function getErbpacht(): decimal {
		return $this->erbpacht;
	}

	/**
	 * @return decimal
	 */
	public function getErschliessungskosten(): decimal {
		return $this->erschliessungskosten;
	}

	/**
	 * @return Evbnetto
	 */
	public function getEvbnetto(): Evbnetto {
		return $this->evbnetto;
	}

	/**
	 * @return string
	 */
	public function getFreitextPreis(): string {
		return $this->freitextPreis;
	}

	/**
	 * @return decimal
	 */
	public function getGesamtbelastungbrutto(): decimal {
		return $this->gesamtbelastungbrutto;
	}

	/**
	 * @return Gesamtbelastungnetto
	 */
	public function getGesamtbelastungnetto(): Gesamtbelastungnetto {
		return $this->gesamtbelastungnetto;
	}

	/**
	 * @return Gesamtkostenprom2von
	 */
	public function getGesamtkostenprom2von(): Gesamtkostenprom2von {
		return $this->gesamtkostenprom2von;
	}

	/**
	 * @return decimal
	 */
	public function getGesamtmietebrutto(): decimal {
		return $this->gesamtmietebrutto;
	}

	/**
	 * @return Gesamtmietenetto
	 */
	public function getGesamtmietenetto(): Gesamtmietenetto {
		return $this->gesamtmietenetto;
	}

	/**
	 * @return decimal
	 */
	public function getGeschaeftsguthaben(): decimal {
		return $this->geschaeftsguthaben;
	}

	/**
	 * @return Hauptmietzinsnetto
	 */
	public function getHauptmietzinsnetto(): Hauptmietzinsnetto {
		return $this->hauptmietzinsnetto;
	}

	/**
	 * @return decimal
	 */
	public function getHausgeld(): decimal {
		return $this->hausgeld;
	}

	/**
	 * @return decimal
	 */
	public function getHeizkosten(): decimal {
		return $this->heizkosten;
	}

	/**
	 * @return boolean
	 */
	public function getHeizkostenEnthalten(): bool {
		return $this->heizkostenEnthalten;
	}

	/**
	 * @return Heizkostennetto
	 */
	public function getHeizkostennetto(): Heizkostennetto {
		return $this->heizkostennetto;
	}

	/**
	 * @return InnenCourtage
	 */
	public function getInnenCourtage(): InnenCourtage {
		return $this->innenCourtage;
	}

	/**
	 * @return decimal
	 */
	public function getKaltmiete(): decimal {
		return $this->kaltmiete;
	}

	/**
	 * @return Kaufpreis
	 */
	public function getKaufpreis(): Kaufpreis {
		return $this->kaufpreis;
	}

	/**
	 * @return decimal
	 */
	public function getKaufpreisbrutto(): decimal {
		return $this->kaufpreisbrutto;
	}

	/**
	 * @return Kaufpreisnetto
	 */
	public function getKaufpreisnetto(): Kaufpreisnetto {
		return $this->kaufpreisnetto;
	}

	/**
	 * @return decimal
	 */
	public function getKaufpreisProQm(): decimal {
		return $this->kaufpreisProQm;
	}

	/**
	 * @return decimal
	 */
	public function getKaution(): decimal {
		return $this->kaution;
	}

	/**
	 * @return string
	 */
	public function getKautionText(): string {
		return $this->kautionText;
	}

	/**
	 * @return MieteinnahmenIst
	 */
	public function getMieteinnahmenIst(): MieteinnahmenIst {
		return $this->mieteinnahmenIst;
	}

	/**
	 * @return MieteinnahmenSoll
	 */
	public function getMieteinnahmenSoll(): MieteinnahmenSoll {
		return $this->mieteinnahmenSoll;
	}

	/**
	 * @return decimal
	 */
	public function getMietpreisProQm(): decimal {
		return $this->mietpreisProQm;
	}

	/**
	 * @return decimal
	 */
	public function getMietzuschlaege(): decimal {
		return $this->mietzuschlaege;
	}

	/**
	 * @return decimal
	 */
	public function getMonatlichekostenbrutto(): decimal {
		return $this->monatlichekostenbrutto;
	}

	/**
	 * @return Monatlichekostennetto
	 */
	public function getMonatlichekostennetto(): Monatlichekostennetto {
		return $this->monatlichekostennetto;
	}

	/**
	 */
	public function getMwstGesamt() {
		return $this->mwstGesamt;
	}

	/**
	 */
	public function getMwstSatz() {
		return $this->mwstSatz;
	}

	/**
	 * @return decimal
	 */
	public function getNebenkosten(): decimal {
		return $this->nebenkosten;
	}

	/**
	 * @return Nebenkostenprom2von
	 */
	public function getNebenkostenprom2von(): Nebenkostenprom2von {
		return $this->nebenkostenprom2von;
	}

	/**
	 * @return decimal
	 */
	public function getNettokaltmiete(): decimal {
		return $this->nettokaltmiete;
	}

	/**
	 * @return Nettomieteprom2von
	 */
	public function getNettomieteprom2von(): Nettomieteprom2von {
		return $this->nettomieteprom2von;
	}

	/**
	 * @return decimal
	 */
	public function getNettorendite(): decimal {
		return $this->nettorendite;
	}

	/**
	 * @return decimal
	 */
	public function getNettorenditeIst(): decimal {
		return $this->nettorenditeIst;
	}

	/**
	 * @return decimal
	 */
	public function getNettorenditeSoll(): decimal {
		return $this->nettorenditeSoll;
	}

	/**
	 * @return decimal
	 */
	public function getPacht(): decimal {
		return $this->pacht;
	}

	/**
	 * @return decimal
	 */
	public function getPauschalmiete(): decimal {
		return $this->pauschalmiete;
	}

	/**
	 * @return PreisZeiteinheit
	 */
	public function getPreisZeiteinheit(): PreisZeiteinheit {
		return $this->preisZeiteinheit;
	}

	/**
	 * @return date
	 */
	public function getPreisZeitraumBis(): date {
		return $this->preisZeitraumBis;
	}

	/**
	 * @return date
	 */
	public function getPreisZeitraumVon(): date {
		return $this->preisZeitraumVon;
	}

	/**
	 * @return decimal
	 */
	public function getProvisionbrutto(): decimal {
		return $this->provisionbrutto;
	}

	/**
	 * @return Provisionnetto
	 */
	public function getProvisionnetto(): Provisionnetto {
		return $this->provisionnetto;
	}

	/**
	 * @return boolean
	 */
	public function getProvisionspflichtig(): bool {
		return $this->provisionspflichtig;
	}

	/**
	 * @return ProvisionTeilen
	 */
	public function getProvisionTeilen(): ProvisionTeilen {
		return $this->provisionTeilen;
	}

	/**
	 * @return decimal
	 */
	public function getRichtpreis(): decimal {
		return $this->richtpreis;
	}

	/**
	 * @return decimal
	 */
	public function getRichtpreisprom2(): decimal {
		return $this->richtpreisprom2;
	}

	/**
	 * @return Ruecklagenetto
	 */
	public function getRuecklagenetto(): Ruecklagenetto {
		return $this->ruecklagenetto;
	}

	/**
	 * @return Sonstigekostennetto
	 */
	public function getSonstigekostennetto(): Sonstigekostennetto {
		return $this->sonstigekostennetto;
	}

	/**
	 * @return Sonstigemietenetto
	 */
	public function getSonstigemietenetto(): Sonstigemietenetto {
		return $this->sonstigemietenetto;
	}

	/**
	 * @return StpCarport
	 */
	public function getStpCarport(): StpCarport {
		return $this->stpCarport;
	}

	/**
	 * @return StpDuplex
	 */
	public function getStpDuplex(): StpDuplex {
		return $this->stpDuplex;
	}

	/**
	 * @return StpFreiplatz
	 */
	public function getStpFreiplatz(): StpFreiplatz {
		return $this->stpFreiplatz;
	}

	/**
	 * @return StpGarage
	 */
	public function getStpGarage(): StpGarage {
		return $this->stpGarage;
	}

	/**
	 * @return StpParkhaus
	 */
	public function getStpParkhaus(): StpParkhaus {
		return $this->stpParkhaus;
	}

	/**
	 * Returns array of StpSonstige[]
	 *
	 * @return array
	 */
	public function getStpSonstige(): array {
		return $this->stpSonstige;
	}

	/**
	 * @return StpTiefgarage
	 */
	public function getStpTiefgarage(): StpTiefgarage {
		return $this->stpTiefgarage;
	}

	/**
	 * @return Summemietenetto
	 */
	public function getSummemietenetto(): Summemietenetto {
		return $this->summemietenetto;
	}

	/**
	 * Returns array of UserDefinedAnyfield[]
	 *
	 * @return array
	 */
	public function getUserDefinedAnyfield(): array {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend[]
	 *
	 * @return array
	 */
	public function getUserDefinedExtend(): array {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield[]
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield(): array {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @return Waehrung
	 */
	public function getWaehrung(): Waehrung {
		return $this->waehrung;
	}

	/**
	 * @return decimal
	 */
	public function getWarmmiete(): decimal {
		return $this->warmmiete;
	}

	/**
	 * @return string
	 */
	public function getXFache(): string {
		return $this->xFache;
	}

	/**
	 * @return boolean
	 */
	public function getZzgMehrwertsteuer(): bool {
		return $this->zzgMehrwertsteuer;
	}

	/**
	 * @param decimal $abstand Setter for abstand
	 * @return Preise
	 */
	public function setAbstand(decimal $abstand) {
		$this->abstand = $abstand;
		return $this;
	}

	/**
	 * @param AussenCourtage $aussenCourtage Setter for aussenCourtage
	 * @return Preise
	 */
	public function setAussenCourtage(AussenCourtage $aussenCourtage) {
		$this->aussenCourtage = $aussenCourtage;
		return $this;
	}

	/**
	 * @param Betriebskostennetto $betriebskostennetto Setter for betriebskostennetto
	 * @return Preise
	 */
	public function setBetriebskostennetto(Betriebskostennetto $betriebskostennetto) {
		$this->betriebskostennetto = $betriebskostennetto;
		return $this;
	}

	/**
	 * @param string $courtageHinweis Setter for courtageHinweis
	 * @return Preise
	 */
	public function setCourtageHinweis(string $courtageHinweis) {
		$this->courtageHinweis = $courtageHinweis;
		return $this;
	}

	/**
	 * @param decimal $erbpacht Setter for erbpacht
	 * @return Preise
	 */
	public function setErbpacht(decimal $erbpacht) {
		$this->erbpacht = $erbpacht;
		return $this;
	}

	/**
	 * @param decimal $erschliessungskosten Setter for erschliessungskosten
	 * @return Preise
	 */
	public function setErschliessungskosten(decimal $erschliessungskosten) {
		$this->erschliessungskosten = $erschliessungskosten;
		return $this;
	}

	/**
	 * @param Evbnetto $evbnetto Setter for evbnetto
	 * @return Preise
	 */
	public function setEvbnetto(Evbnetto $evbnetto) {
		$this->evbnetto = $evbnetto;
		return $this;
	}

	/**
	 * @param string $freitextPreis Setter for freitextPreis
	 * @return Preise
	 */
	public function setFreitextPreis(string $freitextPreis) {
		$this->freitextPreis = $freitextPreis;
		return $this;
	}

	/**
	 * @param decimal $gesamtbelastungbrutto Setter for gesamtbelastungbrutto
	 * @return Preise
	 */
	public function setGesamtbelastungbrutto(decimal $gesamtbelastungbrutto) {
		$this->gesamtbelastungbrutto = $gesamtbelastungbrutto;
		return $this;
	}

	/**
	 * @param Gesamtbelastungnetto $gesamtbelastungnetto Setter for gesamtbelastungnetto
	 * @return Preise
	 */
	public function setGesamtbelastungnetto(Gesamtbelastungnetto $gesamtbelastungnetto) {
		$this->gesamtbelastungnetto = $gesamtbelastungnetto;
		return $this;
	}

	/**
	 * @param Gesamtkostenprom2von $gesamtkostenprom2von Setter for gesamtkostenprom2von
	 * @return Preise
	 */
	public function setGesamtkostenprom2von(Gesamtkostenprom2von $gesamtkostenprom2von) {
		$this->gesamtkostenprom2von = $gesamtkostenprom2von;
		return $this;
	}

	/**
	 * @param decimal $gesamtmietebrutto Setter for gesamtmietebrutto
	 * @return Preise
	 */
	public function setGesamtmietebrutto(decimal $gesamtmietebrutto) {
		$this->gesamtmietebrutto = $gesamtmietebrutto;
		return $this;
	}

	/**
	 * @param Gesamtmietenetto $gesamtmietenetto Setter for gesamtmietenetto
	 * @return Preise
	 */
	public function setGesamtmietenetto(Gesamtmietenetto $gesamtmietenetto) {
		$this->gesamtmietenetto = $gesamtmietenetto;
		return $this;
	}

	/**
	 * @param decimal $geschaeftsguthaben Setter for geschaeftsguthaben
	 * @return Preise
	 */
	public function setGeschaeftsguthaben(decimal $geschaeftsguthaben) {
		$this->geschaeftsguthaben = $geschaeftsguthaben;
		return $this;
	}

	/**
	 * @param Hauptmietzinsnetto $hauptmietzinsnetto Setter for hauptmietzinsnetto
	 * @return Preise
	 */
	public function setHauptmietzinsnetto(Hauptmietzinsnetto $hauptmietzinsnetto) {
		$this->hauptmietzinsnetto = $hauptmietzinsnetto;
		return $this;
	}

	/**
	 * @param decimal $hausgeld Setter for hausgeld
	 * @return Preise
	 */
	public function setHausgeld(decimal $hausgeld) {
		$this->hausgeld = $hausgeld;
		return $this;
	}

	/**
	 * @param decimal $heizkosten Setter for heizkosten
	 * @return Preise
	 */
	public function setHeizkosten(decimal $heizkosten) {
		$this->heizkosten = $heizkosten;
		return $this;
	}

	/**
	 * @param boolean $heizkostenEnthalten Setter for heizkostenEnthalten
	 * @return Preise
	 */
	public function setHeizkostenEnthalten(bool $heizkostenEnthalten) {
		$this->heizkostenEnthalten = $heizkostenEnthalten;
		return $this;
	}

	/**
	 * @param Heizkostennetto $heizkostennetto Setter for heizkostennetto
	 * @return Preise
	 */
	public function setHeizkostennetto(Heizkostennetto $heizkostennetto) {
		$this->heizkostennetto = $heizkostennetto;
		return $this;
	}

	/**
	 * @param InnenCourtage $innenCourtage Setter for innenCourtage
	 * @return Preise
	 */
	public function setInnenCourtage(InnenCourtage $innenCourtage) {
		$this->innenCourtage = $innenCourtage;
		return $this;
	}

	/**
	 * @param decimal $kaltmiete Setter for kaltmiete
	 * @return Preise
	 */
	public function setKaltmiete(decimal $kaltmiete) {
		$this->kaltmiete = $kaltmiete;
		return $this;
	}

	/**
	 * @param Kaufpreis $kaufpreis Setter for kaufpreis
	 * @return Preise
	 */
	public function setKaufpreis(Kaufpreis $kaufpreis) {
		$this->kaufpreis = $kaufpreis;
		return $this;
	}

	/**
	 * @param decimal $kaufpreisbrutto Setter for kaufpreisbrutto
	 * @return Preise
	 */
	public function setKaufpreisbrutto(decimal $kaufpreisbrutto) {
		$this->kaufpreisbrutto = $kaufpreisbrutto;
		return $this;
	}

	/**
	 * @param Kaufpreisnetto $kaufpreisnetto Setter for kaufpreisnetto
	 * @return Preise
	 */
	public function setKaufpreisnetto(Kaufpreisnetto $kaufpreisnetto) {
		$this->kaufpreisnetto = $kaufpreisnetto;
		return $this;
	}

	/**
	 * @param decimal $kaufpreisProQm Setter for kaufpreisProQm
	 * @return Preise
	 */
	public function setKaufpreisProQm(decimal $kaufpreisProQm) {
		$this->kaufpreisProQm = $kaufpreisProQm;
		return $this;
	}

	/**
	 * @param decimal $kaution Setter for kaution
	 * @return Preise
	 */
	public function setKaution(decimal $kaution) {
		$this->kaution = $kaution;
		return $this;
	}

	/**
	 * @param string $kautionText Setter for kautionText
	 * @return Preise
	 */
	public function setKautionText(string $kautionText) {
		$this->kautionText = $kautionText;
		return $this;
	}

	/**
	 * @param MieteinnahmenIst $mieteinnahmenIst Setter for mieteinnahmenIst
	 * @return Preise
	 */
	public function setMieteinnahmenIst(MieteinnahmenIst $mieteinnahmenIst) {
		$this->mieteinnahmenIst = $mieteinnahmenIst;
		return $this;
	}

	/**
	 * @param MieteinnahmenSoll $mieteinnahmenSoll Setter for mieteinnahmenSoll
	 * @return Preise
	 */
	public function setMieteinnahmenSoll(MieteinnahmenSoll $mieteinnahmenSoll) {
		$this->mieteinnahmenSoll = $mieteinnahmenSoll;
		return $this;
	}

	/**
	 * @param decimal $mietpreisProQm Setter for mietpreisProQm
	 * @return Preise
	 */
	public function setMietpreisProQm(decimal $mietpreisProQm) {
		$this->mietpreisProQm = $mietpreisProQm;
		return $this;
	}

	/**
	 * @param decimal $mietzuschlaege Setter for mietzuschlaege
	 * @return Preise
	 */
	public function setMietzuschlaege(decimal $mietzuschlaege) {
		$this->mietzuschlaege = $mietzuschlaege;
		return $this;
	}

	/**
	 * @param decimal $monatlichekostenbrutto Setter for monatlichekostenbrutto
	 * @return Preise
	 */
	public function setMonatlichekostenbrutto(decimal $monatlichekostenbrutto) {
		$this->monatlichekostenbrutto = $monatlichekostenbrutto;
		return $this;
	}

	/**
	 * @param Monatlichekostennetto $monatlichekostennetto Setter for monatlichekostennetto
	 * @return Preise
	 */
	public function setMonatlichekostennetto(Monatlichekostennetto $monatlichekostennetto) {
		$this->monatlichekostennetto = $monatlichekostennetto;
		return $this;
	}

	/**
	 * @param $mwstGesamt Setter for mwstGesamt
	 * @return Preise
	 */
	public function setMwstGesamt($mwstGesamt) {
		$this->mwstGesamt = $mwstGesamt;
		return $this;
	}

	/**
	 * @param $mwstSatz Setter for mwstSatz
	 * @return Preise
	 */
	public function setMwstSatz($mwstSatz) {
		$this->mwstSatz = $mwstSatz;
		return $this;
	}

	/**
	 * @param decimal $nebenkosten Setter for nebenkosten
	 * @return Preise
	 */
	public function setNebenkosten(decimal $nebenkosten) {
		$this->nebenkosten = $nebenkosten;
		return $this;
	}

	/**
	 * @param Nebenkostenprom2von $nebenkostenprom2von Setter for nebenkostenprom2von
	 * @return Preise
	 */
	public function setNebenkostenprom2von(Nebenkostenprom2von $nebenkostenprom2von) {
		$this->nebenkostenprom2von = $nebenkostenprom2von;
		return $this;
	}

	/**
	 * @param decimal $nettokaltmiete Setter for nettokaltmiete
	 * @return Preise
	 */
	public function setNettokaltmiete(decimal $nettokaltmiete) {
		$this->nettokaltmiete = $nettokaltmiete;
		return $this;
	}

	/**
	 * @param Nettomieteprom2von $nettomieteprom2von Setter for nettomieteprom2von
	 * @return Preise
	 */
	public function setNettomieteprom2von(Nettomieteprom2von $nettomieteprom2von) {
		$this->nettomieteprom2von = $nettomieteprom2von;
		return $this;
	}

	/**
	 * @param decimal $nettorendite Setter for nettorendite
	 * @return Preise
	 */
	public function setNettorendite(decimal $nettorendite) {
		$this->nettorendite = $nettorendite;
		return $this;
	}

	/**
	 * @param decimal $nettorenditeIst Setter for nettorenditeIst
	 * @return Preise
	 */
	public function setNettorenditeIst(decimal $nettorenditeIst) {
		$this->nettorenditeIst = $nettorenditeIst;
		return $this;
	}

	/**
	 * @param decimal $nettorenditeSoll Setter for nettorenditeSoll
	 * @return Preise
	 */
	public function setNettorenditeSoll(decimal $nettorenditeSoll) {
		$this->nettorenditeSoll = $nettorenditeSoll;
		return $this;
	}

	/**
	 * @param decimal $pacht Setter for pacht
	 * @return Preise
	 */
	public function setPacht(decimal $pacht) {
		$this->pacht = $pacht;
		return $this;
	}

	/**
	 * @param decimal $pauschalmiete Setter for pauschalmiete
	 * @return Preise
	 */
	public function setPauschalmiete(decimal $pauschalmiete) {
		$this->pauschalmiete = $pauschalmiete;
		return $this;
	}

	/**
	 * @param PreisZeiteinheit $preisZeiteinheit Setter for preisZeiteinheit
	 * @return Preise
	 */
	public function setPreisZeiteinheit(PreisZeiteinheit $preisZeiteinheit) {
		$this->preisZeiteinheit = $preisZeiteinheit;
		return $this;
	}

	/**
	 * @param date $preisZeitraumBis Setter for preisZeitraumBis
	 * @return Preise
	 */
	public function setPreisZeitraumBis(date $preisZeitraumBis) {
		$this->preisZeitraumBis = $preisZeitraumBis;
		return $this;
	}

	/**
	 * @param date $preisZeitraumVon Setter for preisZeitraumVon
	 * @return Preise
	 */
	public function setPreisZeitraumVon(date $preisZeitraumVon) {
		$this->preisZeitraumVon = $preisZeitraumVon;
		return $this;
	}

	/**
	 * @param decimal $provisionbrutto Setter for provisionbrutto
	 * @return Preise
	 */
	public function setProvisionbrutto(decimal $provisionbrutto) {
		$this->provisionbrutto = $provisionbrutto;
		return $this;
	}

	/**
	 * @param Provisionnetto $provisionnetto Setter for provisionnetto
	 * @return Preise
	 */
	public function setProvisionnetto(Provisionnetto $provisionnetto) {
		$this->provisionnetto = $provisionnetto;
		return $this;
	}

	/**
	 * @param boolean $provisionspflichtig Setter for provisionspflichtig
	 * @return Preise
	 */
	public function setProvisionspflichtig(bool $provisionspflichtig) {
		$this->provisionspflichtig = $provisionspflichtig;
		return $this;
	}

	/**
	 * @param ProvisionTeilen $provisionTeilen Setter for provisionTeilen
	 * @return Preise
	 */
	public function setProvisionTeilen(ProvisionTeilen $provisionTeilen) {
		$this->provisionTeilen = $provisionTeilen;
		return $this;
	}

	/**
	 * @param decimal $richtpreis Setter for richtpreis
	 * @return Preise
	 */
	public function setRichtpreis(decimal $richtpreis) {
		$this->richtpreis = $richtpreis;
		return $this;
	}

	/**
	 * @param decimal $richtpreisprom2 Setter for richtpreisprom2
	 * @return Preise
	 */
	public function setRichtpreisprom2(decimal $richtpreisprom2) {
		$this->richtpreisprom2 = $richtpreisprom2;
		return $this;
	}

	/**
	 * @param Ruecklagenetto $ruecklagenetto Setter for ruecklagenetto
	 * @return Preise
	 */
	public function setRuecklagenetto(Ruecklagenetto $ruecklagenetto) {
		$this->ruecklagenetto = $ruecklagenetto;
		return $this;
	}

	/**
	 * @param Sonstigekostennetto $sonstigekostennetto Setter for sonstigekostennetto
	 * @return Preise
	 */
	public function setSonstigekostennetto(Sonstigekostennetto $sonstigekostennetto) {
		$this->sonstigekostennetto = $sonstigekostennetto;
		return $this;
	}

	/**
	 * @param Sonstigemietenetto $sonstigemietenetto Setter for sonstigemietenetto
	 * @return Preise
	 */
	public function setSonstigemietenetto(Sonstigemietenetto $sonstigemietenetto) {
		$this->sonstigemietenetto = $sonstigemietenetto;
		return $this;
	}

	/**
	 * @param StpCarport $stpCarport Setter for stpCarport
	 * @return Preise
	 */
	public function setStpCarport(StpCarport $stpCarport) {
		$this->stpCarport = $stpCarport;
		return $this;
	}

	/**
	 * @param StpDuplex $stpDuplex Setter for stpDuplex
	 * @return Preise
	 */
	public function setStpDuplex(StpDuplex $stpDuplex) {
		$this->stpDuplex = $stpDuplex;
		return $this;
	}

	/**
	 * @param StpFreiplatz $stpFreiplatz Setter for stpFreiplatz
	 * @return Preise
	 */
	public function setStpFreiplatz(StpFreiplatz $stpFreiplatz) {
		$this->stpFreiplatz = $stpFreiplatz;
		return $this;
	}

	/**
	 * @param StpGarage $stpGarage Setter for stpGarage
	 * @return Preise
	 */
	public function setStpGarage(StpGarage $stpGarage) {
		$this->stpGarage = $stpGarage;
		return $this;
	}

	/**
	 * @param StpParkhaus $stpParkhaus Setter for stpParkhaus
	 * @return Preise
	 */
	public function setStpParkhaus(StpParkhaus $stpParkhaus) {
		$this->stpParkhaus = $stpParkhaus;
		return $this;
	}

	/**
	 * @param array $stpSonstige Setter for stpSonstige
	 * @return Preise
	 */
	public function setStpSonstige(array $stpSonstige) {
		$this->stpSonstige = $stpSonstige;
		return $this;
	}

	/**
	 * @param StpTiefgarage $stpTiefgarage Setter for stpTiefgarage
	 * @return Preise
	 */
	public function setStpTiefgarage(StpTiefgarage $stpTiefgarage) {
		$this->stpTiefgarage = $stpTiefgarage;
		return $this;
	}

	/**
	 * @param Summemietenetto $summemietenetto Setter for summemietenetto
	 * @return Preise
	 */
	public function setSummemietenetto(Summemietenetto $summemietenetto) {
		$this->summemietenetto = $summemietenetto;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Preise
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Preise
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Preise
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param Waehrung $waehrung Setter for waehrung
	 * @return Preise
	 */
	public function setWaehrung(Waehrung $waehrung) {
		$this->waehrung = $waehrung;
		return $this;
	}

	/**
	 * @param decimal $warmmiete Setter for warmmiete
	 * @return Preise
	 */
	public function setWarmmiete(decimal $warmmiete) {
		$this->warmmiete = $warmmiete;
		return $this;
	}

	/**
	 * @param string $xFache Setter for xFache
	 * @return Preise
	 */
	public function setXFache(string $xFache) {
		$this->xFache = $xFache;
		return $this;
	}

	/**
	 * @param boolean $zzgMehrwertsteuer Setter for zzgMehrwertsteuer
	 * @return Preise
	 */
	public function setZzgMehrwertsteuer(bool $zzgMehrwertsteuer) {
		$this->zzgMehrwertsteuer = $zzgMehrwertsteuer;
		return $this;
	}
}
