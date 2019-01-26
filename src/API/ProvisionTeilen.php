<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class ProvisionTeilen {

	/**
	 * @var string
	 */
	protected $wert;

	/**
	 * @return string
	 */
	public function getWert(): string {
		return $this->wert;
	}

	/**
	 * @param string $wert Setter for wert
	 * @return ProvisionTeilen
	 */
	public function setWert(string $wert) {
		$this->wert = $wert;
		return $this;
	}
}
