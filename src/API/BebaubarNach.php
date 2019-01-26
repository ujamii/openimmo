<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
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
