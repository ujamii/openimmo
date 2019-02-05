<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Betriebskostennetto
 * Betriebskosten eines Objektes bei Vermietun, UmSt. im Attribut
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("betriebskostennetto") 
 */
class Betriebskostennetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $betriebskostenust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $betriebskostenust Shortcut setter for betriebskostenust
	 * @param float $value the actual value
	 */
	public function __construct(float $betriebskostenust = null, float $value = null) {
		$this->betriebskostenust = $betriebskostenust;
		$this->value = $value;
	}

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
