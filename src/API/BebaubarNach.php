<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class BebaubarNach {

	/**
	 * @var string
	 */
	protected $bebaubarAttr;

	/**
	 * @return string
	 */
	public function getBebaubarAttr() {
		return $this->bebaubarAttr;
	}

	/**
	 * @param string $bebaubarAttr Setter for bebaubarAttr
	 * @return BebaubarNach
	 */
	public function setBebaubarAttr($bebaubarAttr) {
		$this->bebaubarAttr = $bebaubarAttr;
		return $this;
	}
}
