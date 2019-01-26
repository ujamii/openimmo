<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Heizungsart {

	/**
	 * @var boolean
	 */
	protected $etage;

	/**
	 * @var boolean
	 */
	protected $fern;

	/**
	 * @var boolean
	 */
	protected $fussboden;

	/**
	 * @var boolean
	 */
	protected $ofen;

	/**
	 * @var boolean
	 */
	protected $zentral;

	/**
	 * @return boolean
	 */
	public function getEtage() {
		return $this->etage;
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
	public function getFussboden() {
		return $this->fussboden;
	}

	/**
	 * @return boolean
	 */
	public function getOfen() {
		return $this->ofen;
	}

	/**
	 * @return boolean
	 */
	public function getZentral() {
		return $this->zentral;
	}

	/**
	 * @param boolean $etage Setter for etage
	 * @return Heizungsart
	 */
	public function setEtage($etage) {
		$this->etage = $etage;
		return $this;
	}

	/**
	 * @param boolean $fern Setter for fern
	 * @return Heizungsart
	 */
	public function setFern($fern) {
		$this->fern = $fern;
		return $this;
	}

	/**
	 * @param boolean $fussboden Setter for fussboden
	 * @return Heizungsart
	 */
	public function setFussboden($fussboden) {
		$this->fussboden = $fussboden;
		return $this;
	}

	/**
	 * @param boolean $ofen Setter for ofen
	 * @return Heizungsart
	 */
	public function setOfen($ofen) {
		$this->ofen = $ofen;
		return $this;
	}

	/**
	 * @param boolean $zentral Setter for zentral
	 * @return Heizungsart
	 */
	public function setZentral($zentral) {
		$this->zentral = $zentral;
		return $this;
	}
}
