<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Erschliessung
 * Stand der Erschließung, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("erschliessung") 
 */
class Erschliessung {

	/**
	 */
	const ERSCHL_ATTR_ORTSUEBLICHERSCHLOSSEN = 'ORTSUEBLICHERSCHLOSSEN';

	/**
	 */
	const ERSCHL_ATTR_TEILERSCHLOSSEN = 'TEILERSCHLOSSEN';

	/**
	 */
	const ERSCHL_ATTR_UNERSCHLOSSEN = 'UNERSCHLOSSEN';

	/**
	 */
	const ERSCHL_ATTR_VOLLERSCHLOSSEN = 'VOLLERSCHLOSSEN';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ERSCHL_ATTR_* constants
	 * @var string
	 */
	protected $erschlAttr;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $erschlAttr Shortcut setter for erschlAttr
	 * @param string $value the actual value
	 */
	public function __construct(string $erschlAttr = null, string $value = null) {
		$this->erschlAttr = $erschlAttr;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getErschlAttr(): ?string {
		return $this->erschlAttr;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $erschlAttr Setter for erschlAttr
	 * @return Erschliessung
	 */
	public function setErschlAttr(?string $erschlAttr) {
		$this->erschlAttr = $erschlAttr;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Erschliessung
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
