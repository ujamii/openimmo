<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class MinMietdauer {

	/**
	 * @var string
	 */
	protected $minDauer;

	/**
	 * @return string
	 */
	public function getMinDauer(): string {
		return $this->minDauer;
	}

	/**
	 * @param string $minDauer Setter for minDauer
	 * @return MinMietdauer
	 */
	public function setMinDauer(string $minDauer) {
		$this->minDauer = $minDauer;
		return $this;
	}
}
