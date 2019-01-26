<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Bad {

	/**
	 * @var boolean
	 */
	protected $bidet;

	/**
	 * @var boolean
	 */
	protected $dusche;

	/**
	 * @var boolean
	 */
	protected $fenster;

	/**
	 * @var boolean
	 */
	protected $pissoir;

	/**
	 * @var boolean
	 */
	protected $wanne;

	/**
	 * @return boolean
	 */
	public function getBidet() {
		return $this->bidet;
	}

	/**
	 * @return boolean
	 */
	public function getDusche() {
		return $this->dusche;
	}

	/**
	 * @return boolean
	 */
	public function getFenster() {
		return $this->fenster;
	}

	/**
	 * @return boolean
	 */
	public function getPissoir() {
		return $this->pissoir;
	}

	/**
	 * @return boolean
	 */
	public function getWanne() {
		return $this->wanne;
	}

	/**
	 * @param boolean $bidet Setter for bidet
	 * @return Bad
	 */
	public function setBidet($bidet) {
		$this->bidet = $bidet;
		return $this;
	}

	/**
	 * @param boolean $dusche Setter for dusche
	 * @return Bad
	 */
	public function setDusche($dusche) {
		$this->dusche = $dusche;
		return $this;
	}

	/**
	 * @param boolean $fenster Setter for fenster
	 * @return Bad
	 */
	public function setFenster($fenster) {
		$this->fenster = $fenster;
		return $this;
	}

	/**
	 * @param boolean $pissoir Setter for pissoir
	 * @return Bad
	 */
	public function setPissoir($pissoir) {
		$this->pissoir = $pissoir;
		return $this;
	}

	/**
	 * @param boolean $wanne Setter for wanne
	 * @return Bad
	 */
	public function setWanne($wanne) {
		$this->wanne = $wanne;
		return $this;
	}
}
