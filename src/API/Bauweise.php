<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bauweise
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("bauweise") 
 */
class Bauweise {

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $fertigteile;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $holz;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $massiv;

	/**
	 * @return boolean
	 */
	public function getFertigteile(): bool {
		return $this->fertigteile;
	}

	/**
	 * @return boolean
	 */
	public function getHolz(): bool {
		return $this->holz;
	}

	/**
	 * @return boolean
	 */
	public function getMassiv(): bool {
		return $this->massiv;
	}

	/**
	 * @param boolean $fertigteile Setter for fertigteile
	 * @return Bauweise
	 */
	public function setFertigteile(bool $fertigteile) {
		$this->fertigteile = $fertigteile;
		return $this;
	}

	/**
	 * @param boolean $holz Setter for holz
	 * @return Bauweise
	 */
	public function setHolz(bool $holz) {
		$this->holz = $holz;
		return $this;
	}

	/**
	 * @param boolean $massiv Setter for massiv
	 * @return Bauweise
	 */
	public function setMassiv(bool $massiv) {
		$this->massiv = $massiv;
		return $this;
	}
}
