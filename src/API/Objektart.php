<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Objektart
 * Objektarten
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("objektart") 
 */
class Objektart {

	/**
	 * @XmlList(inline = true, entry = "buero_praxen") 
	 * @Type("array<Ujamii\OpenImmo\API\BueroPraxen>") 
	 * @var BueroPraxen[]
	 */
	protected $bueroPraxen;

	/**
	 * @XmlList(inline = true, entry = "einzelhandel") 
	 * @Type("array<Ujamii\OpenImmo\API\Einzelhandel>") 
	 * @var Einzelhandel[]
	 */
	protected $einzelhandel;

	/**
	 * @XmlList(inline = true, entry = "freizeitimmobilie_gewerblich") 
	 * @Type("array<Ujamii\OpenImmo\API\FreizeitimmobilieGewerblich>") 
	 * @var FreizeitimmobilieGewerblich[]
	 */
	protected $freizeitimmobilieGewerblich;

	/**
	 * @XmlList(inline = true, entry = "gastgewerbe") 
	 * @Type("array<Ujamii\OpenImmo\API\Gastgewerbe>") 
	 * @var Gastgewerbe[]
	 */
	protected $gastgewerbe;

	/**
	 * @XmlList(inline = true, entry = "grundstueck") 
	 * @Type("array<Ujamii\OpenImmo\API\Grundstueck>") 
	 * @var Grundstueck[]
	 */
	protected $grundstueck;

	/**
	 * @XmlList(inline = true, entry = "hallen_lager_prod") 
	 * @Type("array<Ujamii\OpenImmo\API\HallenLagerProd>") 
	 * @var HallenLagerProd[]
	 */
	protected $hallenLagerProd;

	/**
	 * @XmlList(inline = true, entry = "haus") 
	 * @Type("array<Ujamii\OpenImmo\API\Haus>") 
	 * @var Haus[]
	 */
	protected $haus;

	/**
	 * @XmlList(inline = true, entry = "land_und_forstwirtschaft") 
	 * @Type("array<Ujamii\OpenImmo\API\LandUndForstwirtschaft>") 
	 * @var LandUndForstwirtschaft[]
	 */
	protected $landUndForstwirtschaft;

	/**
	 * @XmlList(inline = true, entry = "objektart_zusatz") 
	 * @Type("string") 
	 * @var string[]
	 */
	protected $objektartZusatz;

	/**
	 * @XmlList(inline = true, entry = "parken") 
	 * @Type("array<Ujamii\OpenImmo\API\Parken>") 
	 * @var Parken[]
	 */
	protected $parken;

	/**
	 * @XmlList(inline = true, entry = "sonstige") 
	 * @Type("array<Ujamii\OpenImmo\API\Sonstige>") 
	 * @var Sonstige[]
	 */
	protected $sonstige;

	/**
	 * @XmlList(inline = true, entry = "wohnung") 
	 * @Type("array<Ujamii\OpenImmo\API\Wohnung>") 
	 * @var Wohnung[]
	 */
	protected $wohnung;

	/**
	 * @XmlList(inline = true, entry = "zimmer") 
	 * @Type("array<Ujamii\OpenImmo\API\Zimmer>") 
	 * @var Zimmer[]
	 */
	protected $zimmer;

	/**
	 * @XmlList(inline = true, entry = "zinshaus_renditeobjekt") 
	 * @Type("array<Ujamii\OpenImmo\API\ZinshausRenditeobjekt>") 
	 * @var ZinshausRenditeobjekt[]
	 */
	protected $zinshausRenditeobjekt;

	/**
	 * Returns array of BueroPraxen
	 *
	 * @return array
	 */
	public function getBueroPraxen(): array {
		return $this->bueroPraxen;
	}

	/**
	 * Returns array of Einzelhandel
	 *
	 * @return array
	 */
	public function getEinzelhandel(): array {
		return $this->einzelhandel;
	}

	/**
	 * Returns array of FreizeitimmobilieGewerblich
	 *
	 * @return array
	 */
	public function getFreizeitimmobilieGewerblich(): array {
		return $this->freizeitimmobilieGewerblich;
	}

	/**
	 * Returns array of Gastgewerbe
	 *
	 * @return array
	 */
	public function getGastgewerbe(): array {
		return $this->gastgewerbe;
	}

	/**
	 * Returns array of Grundstueck
	 *
	 * @return array
	 */
	public function getGrundstueck(): array {
		return $this->grundstueck;
	}

	/**
	 * Returns array of HallenLagerProd
	 *
	 * @return array
	 */
	public function getHallenLagerProd(): array {
		return $this->hallenLagerProd;
	}

	/**
	 * Returns array of Haus
	 *
	 * @return array
	 */
	public function getHaus(): array {
		return $this->haus;
	}

	/**
	 * Returns array of LandUndForstwirtschaft
	 *
	 * @return array
	 */
	public function getLandUndForstwirtschaft(): array {
		return $this->landUndForstwirtschaft;
	}

	/**
	 * Returns array of string
	 *
	 * @return array
	 */
	public function getObjektartZusatz(): array {
		return $this->objektartZusatz;
	}

	/**
	 * Returns array of Parken
	 *
	 * @return array
	 */
	public function getParken(): array {
		return $this->parken;
	}

	/**
	 * Returns array of Sonstige
	 *
	 * @return array
	 */
	public function getSonstige(): array {
		return $this->sonstige;
	}

	/**
	 * Returns array of Wohnung
	 *
	 * @return array
	 */
	public function getWohnung(): array {
		return $this->wohnung;
	}

	/**
	 * Returns array of Zimmer
	 *
	 * @return array
	 */
	public function getZimmer(): array {
		return $this->zimmer;
	}

	/**
	 * Returns array of ZinshausRenditeobjekt
	 *
	 * @return array
	 */
	public function getZinshausRenditeobjekt(): array {
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
