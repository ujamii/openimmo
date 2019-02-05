<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ruecklagenetto
 * Vorhanden Rücklagen bei einem Kauf Objekt, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("ruecklagenetto") 
 */
class Ruecklagenetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $ruecklageust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $ruecklageust Shortcut setter for ruecklageust
	 * @param float $value the actual value
	 */
	public function __construct(float $ruecklageust = null, float $value = null) {
		$this->ruecklageust = $ruecklageust;
		$this->value = $value;
	}

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
