<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Erschliessung {

	/**
	 * @var string
	 */
	protected $erschlAttr;

	/**
	 * @return string
	 */
	public function getErschlAttr() {
		return $this->erschlAttr;
	}

	/**
	 * @param string $erschlAttr Setter for erschlAttr
	 * @return Erschliessung
	 */
	public function setErschlAttr($erschlAttr) {
		$this->erschlAttr = $erschlAttr;
		return $this;
	}
}
