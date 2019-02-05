<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Evbnetto
 * Erhaltungs- und Verbesserungsbeitrag. Ähnlich Instanthaltungsrücklage, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("evbnetto") 
 */
class Evbnetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $evbust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $evbust Shortcut setter for evbust
	 * @param float $value the actual value
	 */
	public function __construct(float $evbust = null, float $value = null) {
		$this->evbust = $evbust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getEvbust(): float {
		return $this->evbust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $evbust Setter for evbust
	 * @return Evbnetto
	 */
	public function setEvbust(float $evbust) {
		$this->evbust = $evbust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Evbnetto
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
