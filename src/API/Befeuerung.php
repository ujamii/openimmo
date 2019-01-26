<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Befeuerung
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("befeuerung") 
 */
class Befeuerung {

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $alternativ;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $block;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $elektro;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $erdwaerme;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $fern;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $fluessiggas;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $gas;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $holz;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $kohle;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $luftwp;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $oel;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $pellet;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $solar;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $wasserElektro;

	/**
	 * @return boolean
	 */
	public function getAlternativ(): bool {
		return $this->alternativ;
	}

	/**
	 * @return boolean
	 */
	public function getBlock(): bool {
		return $this->block;
	}

	/**
	 * @return boolean
	 */
	public function getElektro(): bool {
		return $this->elektro;
	}

	/**
	 * @return boolean
	 */
	public function getErdwaerme(): bool {
		return $this->erdwaerme;
	}

	/**
	 * @return boolean
	 */
	public function getFern(): bool {
		return $this->fern;
	}

	/**
	 * @return boolean
	 */
	public function getFluessiggas(): bool {
		return $this->fluessiggas;
	}

	/**
	 * @return boolean
	 */
	public function getGas(): bool {
		return $this->gas;
	}

	/**
	 * @return boolean
	 */
	public function getHolz(): bool {
		return $this->holz;
	}

	/**
	 * @return boolean
	 */
	public function getKohle(): bool {
		return $this->kohle;
	}

	/**
	 * @return boolean
	 */
	public function getLuftwp(): bool {
		return $this->luftwp;
	}

	/**
	 * @return boolean
	 */
	public function getOel(): bool {
		return $this->oel;
	}

	/**
	 * @return boolean
	 */
	public function getPellet(): bool {
		return $this->pellet;
	}

	/**
	 * @return boolean
	 */
	public function getSolar(): bool {
		return $this->solar;
	}

	/**
	 * @return boolean
	 */
	public function getWasserElektro(): bool {
		return $this->wasserElektro;
	}

	/**
	 * @param boolean $alternativ Setter for alternativ
	 * @return Befeuerung
	 */
	public function setAlternativ(bool $alternativ) {
		$this->alternativ = $alternativ;
		return $this;
	}

	/**
	 * @param boolean $block Setter for block
	 * @return Befeuerung
	 */
	public function setBlock(bool $block) {
		$this->block = $block;
		return $this;
	}

	/**
	 * @param boolean $elektro Setter for elektro
	 * @return Befeuerung
	 */
	public function setElektro(bool $elektro) {
		$this->elektro = $elektro;
		return $this;
	}

	/**
	 * @param boolean $erdwaerme Setter for erdwaerme
	 * @return Befeuerung
	 */
	public function setErdwaerme(bool $erdwaerme) {
		$this->erdwaerme = $erdwaerme;
		return $this;
	}

	/**
	 * @param boolean $fern Setter for fern
	 * @return Befeuerung
	 */
	public function setFern(bool $fern) {
		$this->fern = $fern;
		return $this;
	}

	/**
	 * @param boolean $fluessiggas Setter for fluessiggas
	 * @return Befeuerung
	 */
	public function setFluessiggas(bool $fluessiggas) {
		$this->fluessiggas = $fluessiggas;
		return $this;
	}

	/**
	 * @param boolean $gas Setter for gas
	 * @return Befeuerung
	 */
	public function setGas(bool $gas) {
		$this->gas = $gas;
		return $this;
	}

	/**
	 * @param boolean $holz Setter for holz
	 * @return Befeuerung
	 */
	public function setHolz(bool $holz) {
		$this->holz = $holz;
		return $this;
	}

	/**
	 * @param boolean $kohle Setter for kohle
	 * @return Befeuerung
	 */
	public function setKohle(bool $kohle) {
		$this->kohle = $kohle;
		return $this;
	}

	/**
	 * @param boolean $luftwp Setter for luftwp
	 * @return Befeuerung
	 */
	public function setLuftwp(bool $luftwp) {
		$this->luftwp = $luftwp;
		return $this;
	}

	/**
	 * @param boolean $oel Setter for oel
	 * @return Befeuerung
	 */
	public function setOel(bool $oel) {
		$this->oel = $oel;
		return $this;
	}

	/**
	 * @param boolean $pellet Setter for pellet
	 * @return Befeuerung
	 */
	public function setPellet(bool $pellet) {
		$this->pellet = $pellet;
		return $this;
	}

	/**
	 * @param boolean $solar Setter for solar
	 * @return Befeuerung
	 */
	public function setSolar(bool $solar) {
		$this->solar = $solar;
		return $this;
	}

	/**
	 * @param boolean $wasserElektro Setter for wasserElektro
	 * @return Befeuerung
	 */
	public function setWasserElektro(bool $wasserElektro) {
		$this->wasserElektro = $wasserElektro;
		return $this;
	}
}
