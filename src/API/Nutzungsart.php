<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Nutzungsart {

	/**
	 * @var boolean
	 */
	protected $anlage;

	/**
	 * @var boolean
	 */
	protected $gewerbe;

	/**
	 * @var boolean
	 */
	protected $waz;

	/**
	 * @var boolean
	 */
	protected $wohnen;

	/**
	 * @return boolean
	 */
	public function getAnlage() {
		return $this->anlage;
	}

	/**
	 * @return boolean
	 */
	public function getGewerbe() {
		return $this->gewerbe;
	}

	/**
	 * @return boolean
	 */
	public function getWaz() {
		return $this->waz;
	}

	/**
	 * @return boolean
	 */
	public function getWohnen() {
		return $this->wohnen;
	}

	/**
	 * @param boolean $anlage Setter for anlage
	 * @return Nutzungsart
	 */
	public function setAnlage($anlage) {
		$this->anlage = $anlage;
		return $this;
	}

	/**
	 * @param boolean $gewerbe Setter for gewerbe
	 * @return Nutzungsart
	 */
	public function setGewerbe($gewerbe) {
		$this->gewerbe = $gewerbe;
		return $this;
	}

	/**
	 * @param boolean $waz Setter for waz
	 * @return Nutzungsart
	 */
	public function setWaz($waz) {
		$this->waz = $waz;
		return $this;
	}

	/**
	 * @param boolean $wohnen Setter for wohnen
	 * @return Nutzungsart
	 */
	public function setWohnen($wohnen) {
		$this->wohnen = $wohnen;
		return $this;
	}
}
