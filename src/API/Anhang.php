<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anhang
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("anhang") 
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
	 * @XmlAttribute 
	 * @var string
	 */
	protected $gruppe;

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $location;

	/**
	 * @return string
	 */
	public function getAnhangtitel(): string {
		return $this->anhangtitel;
	}

	/**
	 * @return Check
	 */
	public function getCheck(): Check {
		return $this->check;
	}

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
	public function getGruppe(): string {
		return $this->gruppe;
	}

	/**
	 * @return string
	 */
	public function getLocation(): string {
		return $this->location;
	}

	/**
	 * @param string $anhangtitel Setter for anhangtitel
	 * @return Anhang
	 */
	public function setAnhangtitel(string $anhangtitel) {
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
	public function setFormat(string $format) {
		$this->format = $format;
		return $this;
	}

	/**
	 * @param string $gruppe Setter for gruppe
	 * @return Anhang
	 */
	public function setGruppe(string $gruppe) {
		$this->gruppe = $gruppe;
		return $this;
	}

	/**
	 * @param string $location Setter for location
	 * @return Anhang
	 */
	public function setLocation(string $location) {
		$this->location = $location;
		return $this;
	}
}
