<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtbelastungnetto
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("gesamtbelastungnetto") 
 */
class Gesamtbelastungnetto {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var float
	 */
	protected $gesamtbelastungust;

	/**
	 * @Inline 
	 * @var float
	 */
	protected $value;

	/**
	 * @return float
	 */
	public function getGesamtbelastungust(): float {
		return $this->gesamtbelastungust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $gesamtbelastungust Setter for gesamtbelastungust
	 * @return Gesamtbelastungnetto
	 */
	public function setGesamtbelastungust(float $gesamtbelastungust) {
		$this->gesamtbelastungust = $gesamtbelastungust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Gesamtbelastungnetto
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
