<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Provisionnetto
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("provisionnetto") 
 */
class Provisionnetto {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var float
	 */
	protected $provisionust;

	/**
	 * @Inline 
	 * @var float
	 */
	protected $value;

	/**
	 * @return float
	 */
	public function getProvisionust(): float {
		return $this->provisionust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $provisionust Setter for provisionust
	 * @return Provisionnetto
	 */
	public function setProvisionust(float $provisionust) {
		$this->provisionust = $provisionust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Provisionnetto
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
