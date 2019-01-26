<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ruecklagenetto
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("ruecklagenetto") 
 */
class Ruecklagenetto {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var float
	 */
	protected $ruecklageust;

	/**
	 * @Inline 
	 * @var float
	 */
	protected $value;

	/**
	 * @return float
	 */
	public function getRuecklageust(): float {
		return $this->ruecklageust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $ruecklageust Setter for ruecklageust
	 * @return Ruecklagenetto
	 */
	public function setRuecklageust(float $ruecklageust) {
		$this->ruecklageust = $ruecklageust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Ruecklagenetto
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
