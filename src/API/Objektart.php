<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Objektart {

	/**
	 * @var BueroPraxen[]
	 */
	protected $bueroPraxen;

	/**
	 * @var Einzelhandel[]
	 */
	protected $einzelhandel;

	/**
	 * @var FreizeitimmobilieGewerblich[]
	 */
	protected $freizeitimmobilieGewerblich;

	/**
	 * @var Gastgewerbe[]
	 */
	protected $gastgewerbe;

	/**
	 * @var Grundstueck[]
	 */
	protected $grundstueck;

	/**
	 * @var HallenLagerProd[]
	 */
	protected $hallenLagerProd;

	/**
	 * @var Haus[]
	 */
	protected $haus;

	/**
	 * @var LandUndForstwirtschaft[]
	 */
	protected $landUndForstwirtschaft;

	/**
	 * @var string[]
	 */
	protected $objektartZusatz;

	/**
	 * @var Parken[]
	 */
	protected $parken;

	/**
	 * @var Sonstige[]
	 */
	protected $sonstige;

	/**
	 * @var Wohnung[]
	 */
	protected $wohnung;

	/**
	 * @var Zimmer[]
	 */
	protected $zimmer;

	/**
	 * @var ZinshausRenditeobjekt[]
	 */
	protected $zinshausRenditeobjekt;

	/**
	 * @return BueroPraxen[]
	 */
	public function getBueroPraxen(): BueroPraxen[] {
		return $this->bueroPraxen;
	}

	/**
	 * @return Einzelhandel[]
	 */
	public function getEinzelhandel(): Einzelhandel[] {
		return $this->einzelhandel;
	}

	/**
	 * @return FreizeitimmobilieGewerblich[]
	 */
	public function getFreizeitimmobilieGewerblich(): FreizeitimmobilieGewerblich[] {
		return $this->freizeitimmobilieGewerblich;
	}

	/**
	 * @return Gastgewerbe[]
	 */
	public function getGastgewerbe(): Gastgewerbe[] {
		return $this->gastgewerbe;
	}

	/**
	 * @return Grundstueck[]
	 */
	public function getGrundstueck(): Grundstueck[] {
		return $this->grundstueck;
	}

	/**
	 * @return HallenLagerProd[]
	 */
	public function getHallenLagerProd(): HallenLagerProd[] {
		return $this->hallenLagerProd;
	}

	/**
	 * @return Haus[]
	 */
	public function getHaus(): Haus[] {
		return $this->haus;
	}

	/**
	 * @return LandUndForstwirtschaft[]
	 */
	public function getLandUndForstwirtschaft(): LandUndForstwirtschaft[] {
		return $this->landUndForstwirtschaft;
	}

	/**
	 * @return string[]
	 */
	public function getObjektartZusatz(): string[] {
		return $this->objektartZusatz;
	}

	/**
	 * @return Parken[]
	 */
	public function getParken(): Parken[] {
		return $this->parken;
	}

	/**
	 * @return Sonstige[]
	 */
	public function getSonstige(): Sonstige[] {
		return $this->sonstige;
	}

	/**
	 * @return Wohnung[]
	 */
	public function getWohnung(): Wohnung[] {
		return $this->wohnung;
	}

	/**
	 * @return Zimmer[]
	 */
	public function getZimmer(): Zimmer[] {
		return $this->zimmer;
	}

	/**
	 * @return ZinshausRenditeobjekt[]
	 */
	public function getZinshausRenditeobjekt(): ZinshausRenditeobjekt[] {
		return $this->zinshausRenditeobjekt;
	}

	/**
	 * @param array $bueroPraxen Setter for bueroPraxen
	 * @return Objektart
	 */
	public function setBueroPraxen(array $bueroPraxen) {
		$this->bueroPraxen = $bueroPraxen;
		return $this;
	}

	/**
	 * @param array $einzelhandel Setter for einzelhandel
	 * @return Objektart
	 */
	public function setEinzelhandel(array $einzelhandel) {
		$this->einzelhandel = $einzelhandel;
		return $this;
	}

	/**
	 * @param array $freizeitimmobilieGewerblich Setter for freizeitimmobilieGewerblich
	 * @return Objektart
	 */
	public function setFreizeitimmobilieGewerblich(array $freizeitimmobilieGewerblich) {
		$this->freizeitimmobilieGewerblich = $freizeitimmobilieGewerblich;
		return $this;
	}

	/**
	 * @param array $gastgewerbe Setter for gastgewerbe
	 * @return Objektart
	 */
	public function setGastgewerbe(array $gastgewerbe) {
		$this->gastgewerbe = $gastgewerbe;
		return $this;
	}

	/**
	 * @param array $grundstueck Setter for grundstueck
	 * @return Objektart
	 */
	public function setGrundstueck(array $grundstueck) {
		$this->grundstueck = $grundstueck;
		return $this;
	}

	/**
	 * @param array $hallenLagerProd Setter for hallenLagerProd
	 * @return Objektart
	 */
	public function setHallenLagerProd(array $hallenLagerProd) {
		$this->hallenLagerProd = $hallenLagerProd;
		return $this;
	}

	/**
	 * @param array $haus Setter for haus
	 * @return Objektart
	 */
	public function setHaus(array $haus) {
		$this->haus = $haus;
		return $this;
	}

	/**
	 * @param array $landUndForstwirtschaft Setter for landUndForstwirtschaft
	 * @return Objektart
	 */
	public function setLandUndForstwirtschaft(array $landUndForstwirtschaft) {
		$this->landUndForstwirtschaft = $landUndForstwirtschaft;
		return $this;
	}

	/**
	 * @param array $objektartZusatz Setter for objektartZusatz
	 * @return Objektart
	 */
	public function setObjektartZusatz(array $objektartZusatz) {
		$this->objektartZusatz = $objektartZusatz;
		return $this;
	}

	/**
	 * @param array $parken Setter for parken
	 * @return Objektart
	 */
	public function setParken(array $parken) {
		$this->parken = $parken;
		return $this;
	}

	/**
	 * @param array $sonstige Setter for sonstige
	 * @return Objektart
	 */
	public function setSonstige(array $sonstige) {
		$this->sonstige = $sonstige;
		return $this;
	}

	/**
	 * @param array $wohnung Setter for wohnung
	 * @return Objektart
	 */
	public function setWohnung(array $wohnung) {
		$this->wohnung = $wohnung;
		return $this;
	}

	/**
	 * @param array $zimmer Setter for zimmer
	 * @return Objektart
	 */
	public function setZimmer(array $zimmer) {
		$this->zimmer = $zimmer;
		return $this;
	}

	/**
	 * @param array $zinshausRenditeobjekt Setter for zinshausRenditeobjekt
	 * @return Objektart
	 */
	public function setZinshausRenditeobjekt(array $zinshausRenditeobjekt) {
		$this->zinshausRenditeobjekt = $zinshausRenditeobjekt;
		return $this;
	}
}
