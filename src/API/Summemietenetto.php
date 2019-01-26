<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Summemietenetto
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("summemietenetto") 
 */
class Summemietenetto {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var float
	 */
	protected $summemieteust;

	/**
	 * @Inline 
	 * @var float
	 */
	protected $value;

	/**
	 * @return float
	 */
	public function getSummemieteust(): float {
		return $this->summemieteust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $summemieteust Setter for summemieteust
	 * @return Summemietenetto
	 */
	public function setSummemieteust(float $summemieteust) {
		$this->summemieteust = $summemieteust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Summemietenetto
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
