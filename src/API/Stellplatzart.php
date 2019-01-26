<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Stellplatzart {

	/**
	 * @var boolean
	 */
	protected $carport;

	/**
	 * @var boolean
	 */
	protected $duplex;

	/**
	 * @var boolean
	 */
	protected $freiplatz;

	/**
	 * @var boolean
	 */
	protected $garage;

	/**
	 * @var boolean
	 */
	protected $parkhaus;

	/**
	 * @var boolean
	 */
	protected $tiefgarage;

	/**
	 * @return boolean
	 */
	public function getCarport() {
		return $this->carport;
	}

	/**
	 * @return boolean
	 */
	public function getDuplex() {
		return $this->duplex;
	}

	/**
	 * @return boolean
	 */
	public function getFreiplatz() {
		return $this->freiplatz;
	}

	/**
	 * @return boolean
	 */
	public function getGarage() {
		return $this->garage;
	}

	/**
	 * @return boolean
	 */
	public function getParkhaus() {
		return $this->parkhaus;
	}

	/**
	 * @return boolean
	 */
	public function getTiefgarage() {
		return $this->tiefgarage;
	}

	/**
	 * @param boolean $carport Setter for carport
	 * @return Stellplatzart
	 */
	public function setCarport($carport) {
		$this->carport = $carport;
		return $this;
	}

	/**
	 * @param boolean $duplex Setter for duplex
	 * @return Stellplatzart
	 */
	public function setDuplex($duplex) {
		$this->duplex = $duplex;
		return $this;
	}

	/**
	 * @param boolean $freiplatz Setter for freiplatz
	 * @return Stellplatzart
	 */
	public function setFreiplatz($freiplatz) {
		$this->freiplatz = $freiplatz;
		return $this;
	}

	/**
	 * @param boolean $garage Setter for garage
	 * @return Stellplatzart
	 */
	public function setGarage($garage) {
		$this->garage = $garage;
		return $this;
	}

	/**
	 * @param boolean $parkhaus Setter for parkhaus
	 * @return Stellplatzart
	 */
	public function setParkhaus($parkhaus) {
		$this->parkhaus = $parkhaus;
		return $this;
	}

	/**
	 * @param boolean $tiefgarage Setter for tiefgarage
	 * @return Stellplatzart
	 */
	public function setTiefgarage($tiefgarage) {
		$this->tiefgarage = $tiefgarage;
		return $this;
	}
}
