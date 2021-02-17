<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Befeuerung
 * Welche Befeuerungsarten sind vorhanden, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("befeuerung") 
 */
class Befeuerung {

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("ALTERNATIV") 
	 * @var bool
	 */
	protected $alternativ;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("BLOCK") 
	 * @var bool
	 */
	protected $block;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("ELEKTRO") 
	 * @var bool
	 */
	protected $elektro;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("ERDWAERME") 
	 * @var bool
	 */
	protected $erdwaerme;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("FERN") 
	 * @var bool
	 */
	protected $fern;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("FLUESSIGGAS") 
	 * @var bool
	 */
	protected $fluessiggas;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("GAS") 
	 * @var bool
	 */
	protected $gas;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("HOLZ") 
	 * @var bool
	 */
	protected $holz;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("KOHLE") 
	 * @var bool
	 */
	protected $kohle;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("LUFTWP") 
	 * @var bool
	 */
	protected $luftwp;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("OEL") 
	 * @var bool
	 */
	protected $oel;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("PELLET") 
	 * @var bool
	 */
	protected $pellet;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("SOLAR") 
	 * @var bool
	 */
	protected $solar;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("WASSER-ELEKTRO") 
	 * @var bool
	 */
	protected $wasserElektro;

	/**
	 * @return bool
	 */
	public function getAlternativ(): ?bool {
		return $this->alternativ;
	}

	/**
	 * @return bool
	 */
	public function getBlock(): ?bool {
		return $this->block;
	}

	/**
	 * @return bool
	 */
	public function getElektro(): ?bool {
		return $this->elektro;
	}

	/**
	 * @return bool
	 */
	public function getErdwaerme(): ?bool {
		return $this->erdwaerme;
	}

	/**
	 * @return bool
	 */
	public function getFern(): ?bool {
		return $this->fern;
	}

	/**
	 * @return bool
	 */
	public function getFluessiggas(): ?bool {
		return $this->fluessiggas;
	}

	/**
	 * @return bool
	 */
	public function getGas(): ?bool {
		return $this->gas;
	}

	/**
	 * @return bool
	 */
	public function getHolz(): ?bool {
		return $this->holz;
	}

	/**
	 * @return bool
	 */
	public function getKohle(): ?bool {
		return $this->kohle;
	}

	/**
	 * @return bool
	 */
	public function getLuftwp(): ?bool {
		return $this->luftwp;
	}

	/**
	 * @return bool
	 */
	public function getOel(): ?bool {
		return $this->oel;
	}

	/**
	 * @return bool
	 */
	public function getPellet(): ?bool {
		return $this->pellet;
	}

	/**
	 * @return bool
	 */
	public function getSolar(): ?bool {
		return $this->solar;
	}

	/**
	 * @return bool
	 */
	public function getWasserElektro(): ?bool {
		return $this->wasserElektro;
	}

	/**
	 * @param bool $alternativ Setter for alternativ
	 * @return Befeuerung
	 */
	public function setAlternativ(?bool $alternativ) {
		$this->alternativ = $alternativ;
		return $this;
	}

	/**
	 * @param bool $block Setter for block
	 * @return Befeuerung
	 */
	public function setBlock(?bool $block) {
		$this->block = $block;
		return $this;
	}

	/**
	 * @param bool $elektro Setter for elektro
	 * @return Befeuerung
	 */
	public function setElektro(?bool $elektro) {
		$this->elektro = $elektro;
		return $this;
	}

	/**
	 * @param bool $erdwaerme Setter for erdwaerme
	 * @return Befeuerung
	 */
	public function setErdwaerme(?bool $erdwaerme) {
		$this->erdwaerme = $erdwaerme;
		return $this;
	}

	/**
	 * @param bool $fern Setter for fern
	 * @return Befeuerung
	 */
	public function setFern(?bool $fern) {
		$this->fern = $fern;
		return $this;
	}

	/**
	 * @param bool $fluessiggas Setter for fluessiggas
	 * @return Befeuerung
	 */
	public function setFluessiggas(?bool $fluessiggas) {
		$this->fluessiggas = $fluessiggas;
		return $this;
	}

	/**
	 * @param bool $gas Setter for gas
	 * @return Befeuerung
	 */
	public function setGas(?bool $gas) {
		$this->gas = $gas;
		return $this;
	}

	/**
	 * @param bool $holz Setter for holz
	 * @return Befeuerung
	 */
	public function setHolz(?bool $holz) {
		$this->holz = $holz;
		return $this;
	}

	/**
	 * @param bool $kohle Setter for kohle
	 * @return Befeuerung
	 */
	public function setKohle(?bool $kohle) {
		$this->kohle = $kohle;
		return $this;
	}

	/**
	 * @param bool $luftwp Setter for luftwp
	 * @return Befeuerung
	 */
	public function setLuftwp(?bool $luftwp) {
		$this->luftwp = $luftwp;
		return $this;
	}

	/**
	 * @param bool $oel Setter for oel
	 * @return Befeuerung
	 */
	public function setOel(?bool $oel) {
		$this->oel = $oel;
		return $this;
	}

	/**
	 * @param bool $pellet Setter for pellet
	 * @return Befeuerung
	 */
	public function setPellet(?bool $pellet) {
		$this->pellet = $pellet;
		return $this;
	}

	/**
	 * @param bool $solar Setter for solar
	 * @return Befeuerung
	 */
	public function setSolar(?bool $solar) {
		$this->solar = $solar;
		return $this;
	}

	/**
	 * @param bool $wasserElektro Setter for wasserElektro
	 * @return Befeuerung
	 */
	public function setWasserElektro(?bool $wasserElektro) {
		$this->wasserElektro = $wasserElektro;
		return $this;
	}
}
