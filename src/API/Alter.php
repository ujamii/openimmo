<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Alter
 * Ist es ein Neu- oder Altbau, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("alter") 
 */
class Alter {

	/**
	 */
	const ALTER_ATTR_ALTBAU = 'ALTBAU';

	/**
	 */
	const ALTER_ATTR_NEUBAU = 'NEUBAU';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ALTER_ATTR_* constants
	 * @var string
	 */
	protected $alterAttr;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $alterAttr Shortcut setter for alterAttr
	 * @param string $value the actual value
	 */
	public function __construct(string $alterAttr = null, string $value = null) {
		$this->alterAttr = $alterAttr;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getAlterAttr(): ?string {
		return $this->alterAttr;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $alterAttr Setter for alterAttr
	 * @return Alter
	 */
	public function setAlterAttr(?string $alterAttr) {
		$this->alterAttr = $alterAttr;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Alter
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
