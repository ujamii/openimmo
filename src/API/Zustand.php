<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Zustand {

	/**
	 * @var string
	 */
	protected $zustandArt;

	/**
	 * @return string
	 */
	public function getZustandArt(): string {
		return $this->zustandArt;
	}

	/**
	 * @param string $zustandArt Setter for zustandArt
	 * @return Zustand
	 */
	public function setZustandArt(string $zustandArt) {
		$this->zustandArt = $zustandArt;
		return $this;
	}
}
