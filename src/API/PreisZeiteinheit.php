<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class PreisZeiteinheit {

	/**
	 * @var string
	 */
	protected $zeiteinheit;

	/**
	 * @return string
	 */
	public function getZeiteinheit(): string {
		return $this->zeiteinheit;
	}

	/**
	 * @param string $zeiteinheit Setter for zeiteinheit
	 * @return PreisZeiteinheit
	 */
	public function setZeiteinheit(string $zeiteinheit) {
		$this->zeiteinheit = $zeiteinheit;
		return $this;
	}
}
