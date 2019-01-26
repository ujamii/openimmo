<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Befeuerung {

	/**
	 * @var boolean
	 */
	protected $alternativ;

	/**
	 * @var boolean
	 */
	protected $block;

	/**
	 * @var boolean
	 */
	protected $elektro;

	/**
	 * @var boolean
	 */
	protected $erdwaerme;

	/**
	 * @var boolean
	 */
	protected $fern;

	/**
	 * @var boolean
	 */
	protected $fluessiggas;

	/**
	 * @var boolean
	 */
	protected $gas;

	/**
	 * @var boolean
	 */
	protected $holz;

	/**
	 * @var boolean
	 */
	protected $kohle;

	/**
	 * @var boolean
	 */
	protected $luftwp;

	/**
	 * @var boolean
	 */
	protected $oel;

	/**
	 * @var boolean
	 */
	protected $pellet;

	/**
	 * @var boolean
	 */
	protected $solar;

	/**
	 * @var boolean
	 */
	protected $wasserElektro;

	/**
	 * @return boolean
	 */
	public function getAlternativ() {
		return $this->alternativ;
	}

	/**
	 * @return boolean
	 */
	public function getBlock() {
		return $this->block;
	}

	/**
	 * @return boolean
	 */
	public function getElektro() {
		return $this->elektro;
	}

	/**
	 * @return boolean
	 */
	public function getErdwaerme() {
		return $this->erdwaerme;
	}

	/**
	 * @return boolean
	 */
	public function getFern() {
		return $this->fern;
	}

	/**
	 * @return boolean
	 */
	public function getFluessiggas() {
		return $this->fluessiggas;
	}

	/**
	 * @return boolean
	 */
	public function getGas() {
		return $this->gas;
	}

	/**
	 * @return boolean
	 */
	public function getHolz() {
		return $this->holz;
	}

	/**
	 * @return boolean
	 */
	public function getKohle() {
		return $this->kohle;
	}

	/**
	 * @return boolean
	 */
	public function getLuftwp() {
		return $this->luftwp;
	}

	/**
	 * @return boolean
	 */
	public function getOel() {
		return $this->oel;
	}

	/**
	 * @return boolean
	 */
	public function getPellet() {
		return $this->pellet;
	}

	/**
	 * @return boolean
	 */
	public function getSolar() {
		return $this->solar;
	}

	/**
	 * @return boolean
	 */
	public function getWasserElektro() {
		return $this->wasserElektro;
	}

	/**
	 * @param boolean $alternativ Setter for alternativ
	 * @return Befeuerung
	 */
	public function setAlternativ($alternativ) {
		$this->alternativ = $alternativ;
		return $this;
	}

	/**
	 * @param boolean $block Setter for block
	 * @return Befeuerung
	 */
	public function setBlock($block) {
		$this->block = $block;
		return $this;
	}

	/**
	 * @param boolean $elektro Setter for elektro
	 * @return Befeuerung
	 */
	public function setElektro($elektro) {
		$this->elektro = $elektro;
		return $this;
	}

	/**
	 * @param boolean $erdwaerme Setter for erdwaerme
	 * @return Befeuerung
	 */
	public function setErdwaerme($erdwaerme) {
		$this->erdwaerme = $erdwaerme;
		return $this;
	}

	/**
	 * @param boolean $fern Setter for fern
	 * @return Befeuerung
	 */
	public function setFern($fern) {
		$this->fern = $fern;
		return $this;
	}

	/**
	 * @param boolean $fluessiggas Setter for fluessiggas
	 * @return Befeuerung
	 */
	public function setFluessiggas($fluessiggas) {
		$this->fluessiggas = $fluessiggas;
		return $this;
	}

	/**
	 * @param boolean $gas Setter for gas
	 * @return Befeuerung
	 */
	public function setGas($gas) {
		$this->gas = $gas;
		return $this;
	}

	/**
	 * @param boolean $holz Setter for holz
	 * @return Befeuerung
	 */
	public function setHolz($holz) {
		$this->holz = $holz;
		return $this;
	}

	/**
	 * @param boolean $kohle Setter for kohle
	 * @return Befeuerung
	 */
	public function setKohle($kohle) {
		$this->kohle = $kohle;
		return $this;
	}

	/**
	 * @param boolean $luftwp Setter for luftwp
	 * @return Befeuerung
	 */
	public function setLuftwp($luftwp) {
		$this->luftwp = $luftwp;
		return $this;
	}

	/**
	 * @param boolean $oel Setter for oel
	 * @return Befeuerung
	 */
	public function setOel($oel) {
		$this->oel = $oel;
		return $this;
	}

	/**
	 * @param boolean $pellet Setter for pellet
	 * @return Befeuerung
	 */
	public function setPellet($pellet) {
		$this->pellet = $pellet;
		return $this;
	}

	/**
	 * @param boolean $solar Setter for solar
	 * @return Befeuerung
	 */
	public function setSolar($solar) {
		$this->solar = $solar;
		return $this;
	}

	/**
	 * @param boolean $wasserElektro Setter for wasserElektro
	 * @return Befeuerung
	 */
	public function setWasserElektro($wasserElektro) {
		$this->wasserElektro = $wasserElektro;
		return $this;
	}
}
