<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Erschliessung {

	/**
	 * @var string
	 */
	protected $erschlAttr;

	/**
	 * @return string
	 */
	public function getErschlAttr(): string {
		return $this->erschlAttr;
	}

	/**
	 * @param string $erschlAttr Setter for erschlAttr
	 * @return Erschliessung
	 */
	public function setErschlAttr(string $erschlAttr) {
		$this->erschlAttr = $erschlAttr;
		return $this;
	}
}
