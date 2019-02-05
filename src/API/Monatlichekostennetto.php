<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Monatlichekostennetto
 * Summe der Monatlichen Kosten einer Wohnung als Information für einen Käufer (Netto), Umst im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("monatlichekostennetto") 
 */
class Monatlichekostennetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $monatlichekostenust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $monatlichekostenust Shortcut setter for monatlichekostenust
	 * @param float $value the actual value
	 */
	public function __construct(float $monatlichekostenust = null, float $value = null) {
		$this->monatlichekostenust = $monatlichekostenust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getMonatlichekostenust(): float {
		return $this->monatlichekostenust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $monatlichekostenust Setter for monatlichekostenust
	 * @return Monatlichekostennetto
	 */
	public function setMonatlichekostenust(float $monatlichekostenust) {
		$this->monatlichekostenust = $monatlichekostenust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Monatlichekostennetto
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
