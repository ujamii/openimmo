<?php
namespace Ujamii\OpenImmo\API;

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
	 * @return string
	 */
	public function getAlterAttr(): string {
		return $this->alterAttr;
	}

	/**
	 * @param string $alterAttr Setter for alterAttr
	 * @return Alter
	 */
	public function setAlterAttr(string $alterAttr) {
		$this->alterAttr = $alterAttr;
		return $this;
	}
}
