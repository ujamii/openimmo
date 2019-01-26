<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Kueche {

	/**
	 * @var boolean
	 */
	protected $ebk;

	/**
	 * @var boolean
	 */
	protected $offen;

	/**
	 * @var boolean
	 */
	protected $pantry;

	/**
	 * @return boolean
	 */
	public function getEbk() {
		return $this->ebk;
	}

	/**
	 * @return boolean
	 */
	public function getOffen() {
		return $this->offen;
	}

	/**
	 * @return boolean
	 */
	public function getPantry() {
		return $this->pantry;
	}

	/**
	 * @param boolean $ebk Setter for ebk
	 * @return Kueche
	 */
	public function setEbk($ebk) {
		$this->ebk = $ebk;
		return $this;
	}

	/**
	 * @param boolean $offen Setter for offen
	 * @return Kueche
	 */
	public function setOffen($offen) {
		$this->offen = $offen;
		return $this;
	}

	/**
	 * @param boolean $pantry Setter for pantry
	 * @return Kueche
	 */
	public function setPantry($pantry) {
		$this->pantry = $pantry;
		return $this;
	}
}
