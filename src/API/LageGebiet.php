<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class LageGebiet {

	/**
	 * @var string
	 */
	protected $gebiete;

	/**
	 * @return string
	 */
	public function getGebiete(): string {
		return $this->gebiete;
	}

	/**
	 * @param string $gebiete Setter for gebiete
	 * @return LageGebiet
	 */
	public function setGebiete(string $gebiete) {
		$this->gebiete = $gebiete;
		return $this;
	}
}
