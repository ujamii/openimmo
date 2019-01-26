<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class MaxMietdauer {

	/**
	 * @var string
	 */
	protected $maxDauer;

	/**
	 * @return string
	 */
	public function getMaxDauer(): string {
		return $this->maxDauer;
	}

	/**
	 * @param string $maxDauer Setter for maxDauer
	 * @return MaxMietdauer
	 */
	public function setMaxDauer(string $maxDauer) {
		$this->maxDauer = $maxDauer;
		return $this;
	}
}
