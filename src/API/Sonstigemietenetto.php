<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstigemietenetto
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("sonstigemietenetto") 
 */
class Sonstigemietenetto {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var float
	 */
	protected $sonstigemieteust;

	/**
	 * @Inline 
	 * @var float
	 */
	protected $value;

	/**
	 * @return float
	 */
	public function getSonstigemieteust(): float {
		return $this->sonstigemieteust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $sonstigemieteust Setter for sonstigemieteust
	 * @return Sonstigemietenetto
	 */
	public function setSonstigemieteust(float $sonstigemieteust) {
		$this->sonstigemieteust = $sonstigemieteust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Sonstigemietenetto
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
