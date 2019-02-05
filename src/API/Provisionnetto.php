<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Provisionnetto
 * Wenn unterschiedliche Provisionen anfallen, dann hier Netto und UmSt. einzeln
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("provisionnetto") 
 */
class Provisionnetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $provisionust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $provisionust Shortcut setter for provisionust
	 * @param float $value the actual value
	 */
	public function __construct(float $provisionust = null, float $value = null) {
		$this->provisionust = $provisionust;
		$this->value = $value;
	}

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
