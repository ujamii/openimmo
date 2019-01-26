<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BebaubarNach
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("bebaubar_nach") 
 */
class BebaubarNach {

	/**
	 * @var string
	 */
	protected $bebaubarAttr;

	/**
	 * @return string
	 */
	public function getBebaubarAttr(): string {
		return $this->bebaubarAttr;
	}

	/**
	 * @param string $bebaubarAttr Setter for bebaubarAttr
	 * @return BebaubarNach
	 */
	public function setBebaubarAttr(string $bebaubarAttr) {
		$this->bebaubarAttr = $bebaubarAttr;
		return $this;
	}
}
