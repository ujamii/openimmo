<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtkostenprom2von
 * Gesamtkosten bei Gewerbeobjekten Von - Bis.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("gesamtkostenprom2von") 
 */
class Gesamtkostenprom2von {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $gesamtkostenprom2bis;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $gesamtkostenprom2bis Shortcut setter for gesamtkostenprom2bis
	 * @param float $value the actual value
	 */
	public function __construct(float $gesamtkostenprom2bis = null, float $value = null) {
		$this->gesamtkostenprom2bis = $gesamtkostenprom2bis;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getGesamtkostenprom2bis(): float {
		return $this->gesamtkostenprom2bis;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $gesamtkostenprom2bis Setter for gesamtkostenprom2bis
	 * @return Gesamtkostenprom2von
	 */
	public function setGesamtkostenprom2bis(float $gesamtkostenprom2bis) {
		$this->gesamtkostenprom2bis = $gesamtkostenprom2bis;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Gesamtkostenprom2von
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
