<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class MaxMietdauer {

	/**
	 * @var string
	 */
	protected $maxDauer;

	/**
	 * @return string
	 */
	public function getMaxDauer() {
		return $this->maxDauer;
	}

	/**
	 * @param string $maxDauer Setter for maxDauer
	 * @return MaxMietdauer
	 */
	public function setMaxDauer($maxDauer) {
		$this->maxDauer = $maxDauer;
		return $this;
	}
}
