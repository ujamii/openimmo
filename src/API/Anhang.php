<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Anhang {

	/**
	 * @var string
	 */
	protected $anhangtitel;

	/**
	 * @var Check
	 */
	protected $check;

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
	protected $gruppe;

	/**
	 * @var string
	 */
	protected $location;

	/**
	 * @return string
	 */
	public function getAnhangtitel() {
		return $this->anhangtitel;
	}

	/**
	 * @return Check
	 */
	public function getCheck() {
		return $this->check;
	}

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
	public function getGruppe() {
		return $this->gruppe;
	}

	/**
	 * @return string
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * @param string $anhangtitel Setter for anhangtitel
	 * @return Anhang
	 */
	public function setAnhangtitel($anhangtitel) {
		$this->anhangtitel = $anhangtitel;
		return $this;
	}

	/**
	 * @param Check $check Setter for check
	 * @return Anhang
	 */
	public function setCheck(Check $check) {
		$this->check = $check;
		return $this;
	}

	/**
	 * @param Daten $daten Setter for daten
	 * @return Anhang
	 */
	public function setDaten(Daten $daten) {
		$this->daten = $daten;
		return $this;
	}

	/**
	 * @param string $format Setter for format
	 * @return Anhang
	 */
	public function setFormat($format) {
		$this->format = $format;
		return $this;
	}

	/**
	 * @param string $gruppe Setter for gruppe
	 * @return Anhang
	 */
	public function setGruppe($gruppe) {
		$this->gruppe = $gruppe;
		return $this;
	}

	/**
	 * @param string $location Setter for location
	 * @return Anhang
	 */
	public function setLocation($location) {
		$this->location = $location;
		return $this;
	}
}
