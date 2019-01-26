<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Zustand {

	/**
	 * @var string
	 */
	protected $zustandArt;

	/**
	 * @return string
	 */
	public function getZustandArt() {
		return $this->zustandArt;
	}

	/**
	 * @param string $zustandArt Setter for zustandArt
	 * @return Zustand
	 */
	public function setZustandArt($zustandArt) {
		$this->zustandArt = $zustandArt;
		return $this;
	}
}
