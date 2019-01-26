<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Serviceleistungen {

	/**
	 * @var boolean
	 */
	protected $betreutesWohnen;

	/**
	 * @var boolean
	 */
	protected $catering;

	/**
	 * @var boolean
	 */
	protected $einkauf;

	/**
	 * @var boolean
	 */
	protected $reinigung;

	/**
	 * @var boolean
	 */
	protected $wachdienst;

	/**
	 * @return boolean
	 */
	public function getBetreutesWohnen() {
		return $this->betreutesWohnen;
	}

	/**
	 * @return boolean
	 */
	public function getCatering() {
		return $this->catering;
	}

	/**
	 * @return boolean
	 */
	public function getEinkauf() {
		return $this->einkauf;
	}

	/**
	 * @return boolean
	 */
	public function getReinigung() {
		return $this->reinigung;
	}

	/**
	 * @return boolean
	 */
	public function getWachdienst() {
		return $this->wachdienst;
	}

	/**
	 * @param boolean $betreutesWohnen Setter for betreutesWohnen
	 * @return Serviceleistungen
	 */
	public function setBetreutesWohnen($betreutesWohnen) {
		$this->betreutesWohnen = $betreutesWohnen;
		return $this;
	}

	/**
	 * @param boolean $catering Setter for catering
	 * @return Serviceleistungen
	 */
	public function setCatering($catering) {
		$this->catering = $catering;
		return $this;
	}

	/**
	 * @param boolean $einkauf Setter for einkauf
	 * @return Serviceleistungen
	 */
	public function setEinkauf($einkauf) {
		$this->einkauf = $einkauf;
		return $this;
	}

	/**
	 * @param boolean $reinigung Setter for reinigung
	 * @return Serviceleistungen
	 */
	public function setReinigung($reinigung) {
		$this->reinigung = $reinigung;
		return $this;
	}

	/**
	 * @param boolean $wachdienst Setter for wachdienst
	 * @return Serviceleistungen
	 */
	public function setWachdienst($wachdienst) {
		$this->wachdienst = $wachdienst;
		return $this;
	}
}
