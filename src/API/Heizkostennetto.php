<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizkostennetto
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("heizkostennetto") 
 */
class Heizkostennetto {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var float
	 */
	protected $heizkostenust;

	/**
	 * @Inline 
	 * @var float
	 */
	protected $value;

	/**
	 * @return float
	 */
	public function getHeizkostenust(): float {
		return $this->heizkostenust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $heizkostenust Setter for heizkostenust
	 * @return Heizkostennetto
	 */
	public function setHeizkostenust(float $heizkostenust) {
		$this->heizkostenust = $heizkostenust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Heizkostennetto
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
