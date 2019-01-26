<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class MinMietdauer {

	/**
	 * @var string
	 */
	protected $minDauer;

	/**
	 * @return string
	 */
	public function getMinDauer() {
		return $this->minDauer;
	}

	/**
	 * @param string $minDauer Setter for minDauer
	 * @return MinMietdauer
	 */
	public function setMinDauer($minDauer) {
		$this->minDauer = $minDauer;
		return $this;
	}
}
