<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Energietyp {

	/**
	 * @var boolean
	 */
	protected $kfw40;

	/**
	 * @var boolean
	 */
	protected $kfw55;

	/**
	 * @var boolean
	 */
	protected $kfw60;

	/**
	 * @var boolean
	 */
	protected $kfw70;

	/**
	 * @var boolean
	 */
	protected $minergiebauweise;

	/**
	 * @var boolean
	 */
	protected $minergieZertifiziert;

	/**
	 * @var boolean
	 */
	protected $neubaustandard;

	/**
	 * @var boolean
	 */
	protected $niedrigenergie;

	/**
	 * @var boolean
	 */
	protected $passivhaus;

	/**
	 * @return boolean
	 */
	public function getKfw40() {
		return $this->kfw40;
	}

	/**
	 * @return boolean
	 */
	public function getKfw55() {
		return $this->kfw55;
	}

	/**
	 * @return boolean
	 */
	public function getKfw60() {
		return $this->kfw60;
	}

	/**
	 * @return boolean
	 */
	public function getKfw70() {
		return $this->kfw70;
	}

	/**
	 * @return boolean
	 */
	public function getMinergiebauweise() {
		return $this->minergiebauweise;
	}

	/**
	 * @return boolean
	 */
	public function getMinergieZertifiziert() {
		return $this->minergieZertifiziert;
	}

	/**
	 * @return boolean
	 */
	public function getNeubaustandard() {
		return $this->neubaustandard;
	}

	/**
	 * @return boolean
	 */
	public function getNiedrigenergie() {
		return $this->niedrigenergie;
	}

	/**
	 * @return boolean
	 */
	public function getPassivhaus() {
		return $this->passivhaus;
	}

	/**
	 * @param boolean $kfw40 Setter for kfw40
	 * @return Energietyp
	 */
	public function setKfw40($kfw40) {
		$this->kfw40 = $kfw40;
		return $this;
	}

	/**
	 * @param boolean $kfw55 Setter for kfw55
	 * @return Energietyp
	 */
	public function setKfw55($kfw55) {
		$this->kfw55 = $kfw55;
		return $this;
	}

	/**
	 * @param boolean $kfw60 Setter for kfw60
	 * @return Energietyp
	 */
	public function setKfw60($kfw60) {
		$this->kfw60 = $kfw60;
		return $this;
	}

	/**
	 * @param boolean $kfw70 Setter for kfw70
	 * @return Energietyp
	 */
	public function setKfw70($kfw70) {
		$this->kfw70 = $kfw70;
		return $this;
	}

	/**
	 * @param boolean $minergiebauweise Setter for minergiebauweise
	 * @return Energietyp
	 */
	public function setMinergiebauweise($minergiebauweise) {
		$this->minergiebauweise = $minergiebauweise;
		return $this;
	}

	/**
	 * @param boolean $minergieZertifiziert Setter for minergieZertifiziert
	 * @return Energietyp
	 */
	public function setMinergieZertifiziert($minergieZertifiziert) {
		$this->minergieZertifiziert = $minergieZertifiziert;
		return $this;
	}

	/**
	 * @param boolean $neubaustandard Setter for neubaustandard
	 * @return Energietyp
	 */
	public function setNeubaustandard($neubaustandard) {
		$this->neubaustandard = $neubaustandard;
		return $this;
	}

	/**
	 * @param boolean $niedrigenergie Setter for niedrigenergie
	 * @return Energietyp
	 */
	public function setNiedrigenergie($niedrigenergie) {
		$this->niedrigenergie = $niedrigenergie;
		return $this;
	}

	/**
	 * @param boolean $passivhaus Setter for passivhaus
	 * @return Energietyp
	 */
	public function setPassivhaus($passivhaus) {
		$this->passivhaus = $passivhaus;
		return $this;
	}
}
