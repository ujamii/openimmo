<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Bauweise {

	/**
	 * @var boolean
	 */
	protected $fertigteile;

	/**
	 * @var boolean
	 */
	protected $holz;

	/**
	 * @var boolean
	 */
	protected $massiv;

	/**
	 * @return boolean
	 */
	public function getFertigteile() {
		return $this->fertigteile;
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
	public function getMassiv() {
		return $this->massiv;
	}

	/**
	 * @param boolean $fertigteile Setter for fertigteile
	 * @return Bauweise
	 */
	public function setFertigteile($fertigteile) {
		$this->fertigteile = $fertigteile;
		return $this;
	}

	/**
	 * @param boolean $holz Setter for holz
	 * @return Bauweise
	 */
	public function setHolz($holz) {
		$this->holz = $holz;
		return $this;
	}

	/**
	 * @param boolean $massiv Setter for massiv
	 * @return Bauweise
	 */
	public function setMassiv($massiv) {
		$this->massiv = $massiv;
		return $this;
	}
}
