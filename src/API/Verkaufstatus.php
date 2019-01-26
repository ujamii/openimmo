<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Verkaufstatus {

	/**
	 * @var string
	 */
	protected $stand;

	/**
	 * @return string
	 */
	public function getStand(): string {
		return $this->stand;
	}

	/**
	 * @param string $stand Setter for stand
	 * @return Verkaufstatus
	 */
	public function setStand(string $stand) {
		$this->stand = $stand;
		return $this;
	}
}
