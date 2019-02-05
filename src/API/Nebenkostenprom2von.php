<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nebenkostenprom2von
 * Angaben bei Gewerbe Miete,UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("nebenkostenprom2von") 
 */
class Nebenkostenprom2von {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $nebenkostenprom2bis;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $nebenkostenprom2bis Shortcut setter for nebenkostenprom2bis
	 * @param float $value the actual value
	 */
	public function __construct(float $nebenkostenprom2bis = null, float $value = null) {
		$this->nebenkostenprom2bis = $nebenkostenprom2bis;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getNebenkostenprom2bis(): float {
		return $this->nebenkostenprom2bis;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $nebenkostenprom2bis Setter for nebenkostenprom2bis
	 * @return Nebenkostenprom2von
	 */
	public function setNebenkostenprom2bis(float $nebenkostenprom2bis) {
		$this->nebenkostenprom2bis = $nebenkostenprom2bis;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Nebenkostenprom2von
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
