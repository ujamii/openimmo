<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nettomieteprom2von
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("nettomieteprom2von") 
 */
class Nettomieteprom2von {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var float
	 */
	protected $nettomieteprom2bis;

	/**
	 * @Inline 
	 * @var float
	 */
	protected $value;

	/**
	 * @return float
	 */
	public function getNettomieteprom2bis(): float {
		return $this->nettomieteprom2bis;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $nettomieteprom2bis Setter for nettomieteprom2bis
	 * @return Nettomieteprom2von
	 */
	public function setNettomieteprom2bis(float $nettomieteprom2bis) {
		$this->nettomieteprom2bis = $nettomieteprom2bis;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Nettomieteprom2von
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
