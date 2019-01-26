<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Foto {

	/**
	 * @var Daten
	 */
	protected $daten;

	/**
	 * @var string
	 */
	protected $format;

	/**
	 * @var string
	 */
	protected $location;

	/**
	 * @return Daten
	 */
	public function getDaten() {
		return $this->daten;
	}

	/**
	 * @return string
	 */
	public function getFormat() {
		return $this->format;
	}

	/**
	 * @return string
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * @param Daten $daten Setter for daten
	 * @return Foto
	 */
	public function setDaten(Daten $daten) {
		$this->daten = $daten;
		return $this;
	}

	/**
	 * @param string $format Setter for format
	 * @return Foto
	 */
	public function setFormat($format) {
		$this->format = $format;
		return $this;
	}

	/**
	 * @param string $location Setter for location
	 * @return Foto
	 */
	public function setLocation($location) {
		$this->location = $location;
		return $this;
	}
}
