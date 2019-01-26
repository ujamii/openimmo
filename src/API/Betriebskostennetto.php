<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Betriebskostennetto
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("betriebskostennetto") 
 */
class Betriebskostennetto {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var float
	 */
	protected $betriebskostenust;

	/**
	 * @Inline 
	 * @var float
	 */
	protected $value;

	/**
	 * @return float
	 */
	public function getBetriebskostenust(): float {
		return $this->betriebskostenust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $betriebskostenust Setter for betriebskostenust
	 * @return Betriebskostennetto
	 */
	public function setBetriebskostenust(float $betriebskostenust) {
		$this->betriebskostenust = $betriebskostenust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Betriebskostennetto
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
