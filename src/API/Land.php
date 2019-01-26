<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Land {

	/**
	 * @var string
	 */
	protected $isoLand;

	/**
	 * @return string
	 */
	public function getIsoLand(): string {
		return $this->isoLand;
	}

	/**
	 * @param string $isoLand Setter for isoLand
	 * @return Land
	 */
	public function setIsoLand(string $isoLand) {
		$this->isoLand = $isoLand;
		return $this;
	}
}
