<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Alter {

	/**
	 * @var string
	 */
	protected $alterAttr;

	/**
	 * @return string
	 */
	public function getAlterAttr() {
		return $this->alterAttr;
	}

	/**
	 * @param string $alterAttr Setter for alterAttr
	 * @return Alter
	 */
	public function setAlterAttr($alterAttr) {
		$this->alterAttr = $alterAttr;
		return $this;
	}
}
