<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
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
	public function getBidet(): bool {
		return $this->bidet;
	}

	/**
	 * @return boolean
	 */
	public function getDusche(): bool {
		return $this->dusche;
	}

	/**
	 * @return boolean
	 */
	public function getFenster(): bool {
		return $this->fenster;
	}

	/**
	 * @return boolean
	 */
	public function getPissoir(): bool {
		return $this->pissoir;
	}

	/**
	 * @return boolean
	 */
	public function getWanne(): bool {
		return $this->wanne;
	}

	/**
	 * @param boolean $bidet Setter for bidet
	 * @return Bad
	 */
	public function setBidet(bool $bidet) {
		$this->bidet = $bidet;
		return $this;
	}

	/**
	 * @param boolean $dusche Setter for dusche
	 * @return Bad
	 */
	public function setDusche(bool $dusche) {
		$this->dusche = $dusche;
		return $this;
	}

	/**
	 * @param boolean $fenster Setter for fenster
	 * @return Bad
	 */
	public function setFenster(bool $fenster) {
		$this->fenster = $fenster;
		return $this;
	}

	/**
	 * @param boolean $pissoir Setter for pissoir
	 * @return Bad
	 */
	public function setPissoir(bool $pissoir) {
		$this->pissoir = $pissoir;
		return $this;
	}

	/**
	 * @param boolean $wanne Setter for wanne
	 * @return Bad
	 */
	public function setWanne(bool $wanne) {
		$this->wanne = $wanne;
		return $this;
	}
}
