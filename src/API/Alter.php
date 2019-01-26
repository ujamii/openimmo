<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Alter
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("alter") 
 */
class Alter {

	/**
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
