<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
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
	public function getDaten(): Daten {
		return $this->daten;
	}

	/**
	 * @return string
	 */
	public function getFormat(): string {
		return $this->format;
	}

	/**
	 * @return string
	 */
	public function getLocation(): string {
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
	public function setFormat(string $format) {
		$this->format = $format;
		return $this;
	}

	/**
	 * @param string $location Setter for location
	 * @return Foto
	 */
	public function setLocation(string $location) {
		$this->location = $location;
		return $this;
	}
}
