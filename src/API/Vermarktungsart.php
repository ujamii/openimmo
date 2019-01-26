<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Vermarktungsart {

	/**
	 * @var boolean
	 */
	protected $erbpacht;

	/**
	 * @var boolean
	 */
	protected $kauf;

	/**
	 * @var boolean
	 */
	protected $leasing;

	/**
	 * @var boolean
	 */
	protected $mietePacht;

	/**
	 * @return boolean
	 */
	public function getErbpacht() {
		return $this->erbpacht;
	}

	/**
	 * @return boolean
	 */
	public function getKauf() {
		return $this->kauf;
	}

	/**
	 * @return boolean
	 */
	public function getLeasing() {
		return $this->leasing;
	}

	/**
	 * @return boolean
	 */
	public function getMietePacht() {
		return $this->mietePacht;
	}

	/**
	 * @param boolean $erbpacht Setter for erbpacht
	 * @return Vermarktungsart
	 */
	public function setErbpacht($erbpacht) {
		$this->erbpacht = $erbpacht;
		return $this;
	}

	/**
	 * @param boolean $kauf Setter for kauf
	 * @return Vermarktungsart
	 */
	public function setKauf($kauf) {
		$this->kauf = $kauf;
		return $this;
	}

	/**
	 * @param boolean $leasing Setter for leasing
	 * @return Vermarktungsart
	 */
	public function setLeasing($leasing) {
		$this->leasing = $leasing;
		return $this;
	}

	/**
	 * @param boolean $mietePacht Setter for mietePacht
	 * @return Vermarktungsart
	 */
	public function setMietePacht($mietePacht) {
		$this->mietePacht = $mietePacht;
		return $this;
	}
}
