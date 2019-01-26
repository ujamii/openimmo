<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class PreisZeiteinheit {

	/**
	 * @var string
	 */
	protected $zeiteinheit;

	/**
	 * @return string
	 */
	public function getZeiteinheit() {
		return $this->zeiteinheit;
	}

	/**
	 * @param string $zeiteinheit Setter for zeiteinheit
	 * @return PreisZeiteinheit
	 */
	public function setZeiteinheit($zeiteinheit) {
		$this->zeiteinheit = $zeiteinheit;
		return $this;
	}
}
