<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class BreitbandZugang {

	/**
	 * @var string
	 */
	protected $art;

	/**
	 * @var decimal
	 */
	protected $speed;

	/**
	 * @return string
	 */
	public function getArt(): string {
		return $this->art;
	}

	/**
	 * @return decimal
	 */
	public function getSpeed(): decimal {
		return $this->speed;
	}

	/**
	 * @param string $art Setter for art
	 * @return BreitbandZugang
	 */
	public function setArt(string $art) {
		$this->art = $art;
		return $this;
	}

	/**
	 * @param decimal $speed Setter for speed
	 * @return BreitbandZugang
	 */
	public function setSpeed(decimal $speed) {
		$this->speed = $speed;
		return $this;
	}
}
