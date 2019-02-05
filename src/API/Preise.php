<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Preise
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("preise") 
 */
class Preise {

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $abstand;

	/**
	 * @Type("Ujamii\OpenImmo\API\AussenCourtage") 
	 * @var AussenCourtage
	 */
	protected $aussenCourtage;

	/**
	 * @Type("Ujamii\OpenImmo\API\Betriebskostennetto") 
	 * @var Betriebskostennetto
	 */
	protected $betriebskostennetto;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $courtageHinweis;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $erbpacht;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $erschliessungskosten;

	/**
	 * @Type("Ujamii\OpenImmo\API\Evbnetto") 
	 * @var Evbnetto
	 */
	protected $evbnetto;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $freitextPreis;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $gesamtbelastungbrutto;

	/**
	 * @Type("Ujamii\OpenImmo\API\Gesamtbelastungnetto") 
	 * @var Gesamtbelastungnetto
	 */
	protected $gesamtbelastungnetto;

	/**
	 * @Type("Ujamii\OpenImmo\API\Gesamtkostenprom2von") 
	 * @var Gesamtkostenprom2von
	 */
	protected $gesamtkostenprom2von;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $gesamtmietebrutto;

	/**
	 * @Type("Ujamii\OpenImmo\API\Gesamtmietenetto") 
	 * @var Gesamtmietenetto
	 */
	protected $gesamtmietenetto;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $geschaeftsguthaben;

	/**
	 * @Type("Ujamii\OpenImmo\API\Hauptmietzinsnetto") 
	 * @var Hauptmietzinsnetto
	 */
	protected $hauptmietzinsnetto;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $hausgeld;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $heizkosten;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $heizkostenEnthalten;

	/**
	 * @Type("Ujamii\OpenImmo\API\Heizkostennetto") 
	 * @var Heizkostennetto
	 */
	protected $heizkostennetto;

	/**
	 * @Type("Ujamii\OpenImmo\API\InnenCourtage") 
	 * @var InnenCourtage
	 */
	protected $innenCourtage;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $kaltmiete;

	/**
	 * @Type("Ujamii\OpenImmo\API\Kaufpreis") 
	 * @var Kaufpreis
	 */
	protected $kaufpreis;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $kaufpreisbrutto;

	/**
	 * @Type("Ujamii\OpenImmo\API\Kaufpreisnetto") 
	 * @var Kaufpreisnetto
	 */
	protected $kaufpreisnetto;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $kaufpreisProQm;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $kaution;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $kautionText;

	/**
	 * @Type("Ujamii\OpenImmo\API\MieteinnahmenIst") 
	 * @var MieteinnahmenIst
	 */
	protected $mieteinnahmenIst;

	/**
	 * @Type("Ujamii\OpenImmo\API\MieteinnahmenSoll") 
	 * @var MieteinnahmenSoll
	 */
	protected $mieteinnahmenSoll;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $mietpreisProQm;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $mietzuschlaege;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $monatlichekostenbrutto;

	/**
	 * @Type("Ujamii\OpenImmo\API\Monatlichekostennetto") 
	 * @var Monatlichekostennetto
	 */
	protected $monatlichekostennetto;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $mwstGesamt;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $mwstSatz;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $nebenkosten;

	/**
	 * @Type("Ujamii\OpenImmo\API\Nebenkostenprom2von") 
	 * @var Nebenkostenprom2von
	 */
	protected $nebenkostenprom2von;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $nettokaltmiete;

	/**
	 * @Type("Ujamii\OpenImmo\API\Nettomieteprom2von") 
	 * @var Nettomieteprom2von
	 */
	protected $nettomieteprom2von;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $nettorendite;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $nettorenditeIst;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $nettorenditeSoll;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $pacht;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $pauschalmiete;

	/**
	 * @Type("Ujamii\OpenImmo\API\PreisZeiteinheit") 
	 * @var PreisZeiteinheit
	 */
	protected $preisZeiteinheit;

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $preisZeitraumBis;

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $preisZeitraumVon;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $provisionbrutto;

	/**
	 * @Type("Ujamii\OpenImmo\API\Provisionnetto") 
	 * @var Provisionnetto
	 */
	protected $provisionnetto;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $provisionspflichtig;

	/**
	 * @Type("Ujamii\OpenImmo\API\ProvisionTeilen") 
	 * @var ProvisionTeilen
	 */
	protected $provisionTeilen;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $richtpreis;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $richtpreisprom2;

	/**
	 * @Type("Ujamii\OpenImmo\API\Ruecklagenetto") 
	 * @var Ruecklagenetto
	 */
	protected $ruecklagenetto;

	/**
	 * @Type("Ujamii\OpenImmo\API\Sonstigekostennetto") 
	 * @var Sonstigekostennetto
	 */
	protected $sonstigekostennetto;

	/**
	 * @Type("Ujamii\OpenImmo\API\Sonstigemietenetto") 
	 * @var Sonstigemietenetto
	 */
	protected $sonstigemietenetto;

	/**
	 * @Type("Ujamii\OpenImmo\API\StpCarport") 
	 * @var StpCarport
	 */
	protected $stpCarport;

	/**
	 * @Type("Ujamii\OpenImmo\API\StpDuplex") 
	 * @var StpDuplex
	 */
	protected $stpDuplex;

	/**
	 * @Type("Ujamii\OpenImmo\API\StpFreiplatz") 
	 * @var StpFreiplatz
	 */
	protected $stpFreiplatz;

	/**
	 * @Type("Ujamii\OpenImmo\API\StpGarage") 
	 * @var StpGarage
	 */
	protected $stpGarage;

	/**
	 * @Type("Ujamii\OpenImmo\API\StpParkhaus") 
	 * @var StpParkhaus
	 */
	protected $stpParkhaus;

	/**
	 * @XmlList(inline = true, entry = "stp_sonstige") 
	 * @Type("array<Ujamii\OpenImmo\API\StpSonstige>") 
	 * @var StpSonstige[]
	 */
	protected $stpSonstige;

	/**
	 * @Type("Ujamii\OpenImmo\API\StpTiefgarage") 
	 * @var StpTiefgarage
	 */
	protected $stpTiefgarage;

	/**
	 * @Type("Ujamii\OpenImmo\API\Summemietenetto") 
	 * @var Summemietenetto
	 */
	protected $summemietenetto;

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
	 * @Type("Ujamii\OpenImmo\API\Waehrung") 
	 * @var Waehrung
	 */
	protected $waehrung;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $warmmiete;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $xFache;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $zzgMehrwertsteuer;

	/**
	 * @return float
	 */
	public function getAbstand(): float {
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
	 * @return float
	 */
	public function getErbpacht(): float {
		return $this->erbpacht;
	}

	/**
	 * @return float
	 */
	public function getErschliessungskosten(): float {
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
	 * @return float
	 */
	public function getGesamtbelastungbrutto(): float {
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
	 * @return float
	 */
	public function getGesamtmietebrutto(): float {
		return $this->gesamtmietebrutto;
	}

	/**
	 * @return Gesamtmietenetto
	 */
	public function getGesamtmietenetto(): Gesamtmietenetto {
		return $this->gesamtmietenetto;
	}

	/**
	 * @return float
	 */
	public function getGeschaeftsguthaben(): float {
		return $this->geschaeftsguthaben;
	}

	/**
	 * @return Hauptmietzinsnetto
	 */
	public function getHauptmietzinsnetto(): Hauptmietzinsnetto {
		return $this->hauptmietzinsnetto;
	}

	/**
	 * @return float
	 */
	public function getHausgeld(): float {
		return $this->hausgeld;
	}

	/**
	 * @return float
	 */
	public function getHeizkosten(): float {
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
	 * @return float
	 */
	public function getKaltmiete(): float {
		return $this->kaltmiete;
	}

	/**
	 * @return Kaufpreis
	 */
	public function getKaufpreis(): Kaufpreis {
		return $this->kaufpreis;
	}

	/**
	 * @return float
	 */
	public function getKaufpreisbrutto(): float {
		return $this->kaufpreisbrutto;
	}

	/**
	 * @return Kaufpreisnetto
	 */
	public function getKaufpreisnetto(): Kaufpreisnetto {
		return $this->kaufpreisnetto;
	}

	/**
	 * @return float
	 */
	public function getKaufpreisProQm(): float {
		return $this->kaufpreisProQm;
	}

	/**
	 * @return float
	 */
	public function getKaution(): float {
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
	 * @return float
	 */
	public function getMietpreisProQm(): float {
		return $this->mietpreisProQm;
	}

	/**
	 * @return float
	 */
	public function getMietzuschlaege(): float {
		return $this->mietzuschlaege;
	}

	/**
	 * @return float
	 */
	public function getMonatlichekostenbrutto(): float {
		return $this->monatlichekostenbrutto;
	}

	/**
	 * @return Monatlichekostennetto
	 */
	public function getMonatlichekostennetto(): Monatlichekostennetto {
		return $this->monatlichekostennetto;
	}

	/**
	 * @return float
	 */
	public function getMwstGesamt(): float {
		return $this->mwstGesamt;
	}

	/**
	 * @return float
	 */
	public function getMwstSatz(): float {
		return $this->mwstSatz;
	}

	/**
	 * @return float
	 */
	public function getNebenkosten(): float {
		return $this->nebenkosten;
	}

	/**
	 * @return Nebenkostenprom2von
	 */
	public function getNebenkostenprom2von(): Nebenkostenprom2von {
		return $this->nebenkostenprom2von;
	}

	/**
	 * @return float
	 */
	public function getNettokaltmiete(): float {
		return $this->nettokaltmiete;
	}

	/**
	 * @return Nettomieteprom2von
	 */
	public function getNettomieteprom2von(): Nettomieteprom2von {
		return $this->nettomieteprom2von;
	}

	/**
	 * @return float
	 */
	public function getNettorendite(): float {
		return $this->nettorendite;
	}

	/**
	 * @return float
	 */
	public function getNettorenditeIst(): float {
		return $this->nettorenditeIst;
	}

	/**
	 * @return float
	 */
	public function getNettorenditeSoll(): float {
		return $this->nettorenditeSoll;
	}

	/**
	 * @return float
	 */
	public function getPacht(): float {
		return $this->pacht;
	}

	/**
	 * @return float
	 */
	public function getPauschalmiete(): float {
		return $this->pauschalmiete;
	}

	/**
	 * @return PreisZeiteinheit
	 */
	public function getPreisZeiteinheit(): PreisZeiteinheit {
		return $this->preisZeiteinheit;
	}

	/**
	 * @return \DateTime
	 */
	public function getPreisZeitraumBis(): \DateTime {
		return $this->preisZeitraumBis;
	}

	/**
	 * @return \DateTime
	 */
	public function getPreisZeitraumVon(): \DateTime {
		return $this->preisZeitraumVon;
	}

	/**
	 * @return float
	 */
	public function getProvisionbrutto(): float {
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
	 * @return float
	 */
	public function getRichtpreis(): float {
		return $this->richtpreis;
	}

	/**
	 * @return float
	 */
	public function getRichtpreisprom2(): float {
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
	 * Returns array of StpSonstige
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
	 * @return Waehrung
	 */
	public function getWaehrung(): Waehrung {
		return $this->waehrung;
	}

	/**
	 * @return float
	 */
	public function getWarmmiete(): float {
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
	 * @param float $abstand Setter for abstand
	 * @return Preise
	 */
	public function setAbstand(float $abstand) {
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
	 * @param float $erbpacht Setter for erbpacht
	 * @return Preise
	 */
	public function setErbpacht(float $erbpacht) {
		$this->erbpacht = $erbpacht;
		return $this;
	}

	/**
	 * @param float $erschliessungskosten Setter for erschliessungskosten
	 * @return Preise
	 */
	public function setErschliessungskosten(float $erschliessungskosten) {
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
	 * @param float $gesamtbelastungbrutto Setter for gesamtbelastungbrutto
	 * @return Preise
	 */
	public function setGesamtbelastungbrutto(float $gesamtbelastungbrutto) {
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
	 * @param float $gesamtmietebrutto Setter for gesamtmietebrutto
	 * @return Preise
	 */
	public function setGesamtmietebrutto(float $gesamtmietebrutto) {
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
	 * @param float $geschaeftsguthaben Setter for geschaeftsguthaben
	 * @return Preise
	 */
	public function setGeschaeftsguthaben(float $geschaeftsguthaben) {
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
	 * @param float $hausgeld Setter for hausgeld
	 * @return Preise
	 */
	public function setHausgeld(float $hausgeld) {
		$this->hausgeld = $hausgeld;
		return $this;
	}

	/**
	 * @param float $heizkosten Setter for heizkosten
	 * @return Preise
	 */
	public function setHeizkosten(float $heizkosten) {
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
	 * @param float $kaltmiete Setter for kaltmiete
	 * @return Preise
	 */
	public function setKaltmiete(float $kaltmiete) {
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
	 * @param float $kaufpreisbrutto Setter for kaufpreisbrutto
	 * @return Preise
	 */
	public function setKaufpreisbrutto(float $kaufpreisbrutto) {
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
	 * @param float $kaufpreisProQm Setter for kaufpreisProQm
	 * @return Preise
	 */
	public function setKaufpreisProQm(float $kaufpreisProQm) {
		$this->kaufpreisProQm = $kaufpreisProQm;
		return $this;
	}

	/**
	 * @param float $kaution Setter for kaution
	 * @return Preise
	 */
	public function setKaution(float $kaution) {
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
	 * @param float $mietpreisProQm Setter for mietpreisProQm
	 * @return Preise
	 */
	public function setMietpreisProQm(float $mietpreisProQm) {
		$this->mietpreisProQm = $mietpreisProQm;
		return $this;
	}

	/**
	 * @param float $mietzuschlaege Setter for mietzuschlaege
	 * @return Preise
	 */
	public function setMietzuschlaege(float $mietzuschlaege) {
		$this->mietzuschlaege = $mietzuschlaege;
		return $this;
	}

	/**
	 * @param float $monatlichekostenbrutto Setter for monatlichekostenbrutto
	 * @return Preise
	 */
	public function setMonatlichekostenbrutto(float $monatlichekostenbrutto) {
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
	 * @param float $mwstGesamt Setter for mwstGesamt
	 * @return Preise
	 */
	public function setMwstGesamt(float $mwstGesamt) {
		$this->mwstGesamt = $mwstGesamt;
		return $this;
	}

	/**
	 * @param float $mwstSatz Setter for mwstSatz
	 * @return Preise
	 */
	public function setMwstSatz(float $mwstSatz) {
		$this->mwstSatz = $mwstSatz;
		return $this;
	}

	/**
	 * @param float $nebenkosten Setter for nebenkosten
	 * @return Preise
	 */
	public function setNebenkosten(float $nebenkosten) {
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
	 * @param float $nettokaltmiete Setter for nettokaltmiete
	 * @return Preise
	 */
	public function setNettokaltmiete(float $nettokaltmiete) {
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
	 * @param float $nettorendite Setter for nettorendite
	 * @return Preise
	 */
	public function setNettorendite(float $nettorendite) {
		$this->nettorendite = $nettorendite;
		return $this;
	}

	/**
	 * @param float $nettorenditeIst Setter for nettorenditeIst
	 * @return Preise
	 */
	public function setNettorenditeIst(float $nettorenditeIst) {
		$this->nettorenditeIst = $nettorenditeIst;
		return $this;
	}

	/**
	 * @param float $nettorenditeSoll Setter for nettorenditeSoll
	 * @return Preise
	 */
	public function setNettorenditeSoll(float $nettorenditeSoll) {
		$this->nettorenditeSoll = $nettorenditeSoll;
		return $this;
	}

	/**
	 * @param float $pacht Setter for pacht
	 * @return Preise
	 */
	public function setPacht(float $pacht) {
		$this->pacht = $pacht;
		return $this;
	}

	/**
	 * @param float $pauschalmiete Setter for pauschalmiete
	 * @return Preise
	 */
	public function setPauschalmiete(float $pauschalmiete) {
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
	 * @param \DateTime $preisZeitraumBis Setter for preisZeitraumBis
	 * @return Preise
	 */
	public function setPreisZeitraumBis(\DateTime $preisZeitraumBis) {
		$this->preisZeitraumBis = $preisZeitraumBis;
		return $this;
	}

	/**
	 * @param \DateTime $preisZeitraumVon Setter for preisZeitraumVon
	 * @return Preise
	 */
	public function setPreisZeitraumVon(\DateTime $preisZeitraumVon) {
		$this->preisZeitraumVon = $preisZeitraumVon;
		return $this;
	}

	/**
	 * @param float $provisionbrutto Setter for provisionbrutto
	 * @return Preise
	 */
	public function setProvisionbrutto(float $provisionbrutto) {
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
	 * @param float $richtpreis Setter for richtpreis
	 * @return Preise
	 */
	public function setRichtpreis(float $richtpreis) {
		$this->richtpreis = $richtpreis;
		return $this;
	}

	/**
	 * @param float $richtpreisprom2 Setter for richtpreisprom2
	 * @return Preise
	 */
	public function setRichtpreisprom2(float $richtpreisprom2) {
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
	 * @param float $warmmiete Setter for warmmiete
	 * @return Preise
	 */
	public function setWarmmiete(float $warmmiete) {
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
