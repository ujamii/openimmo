<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Ausblick {

	/**
	 * @var string
	 */
	protected $blick;

	/**
	 * @return string
	 */
	public function getBlick(): string {
		return $this->blick;
	}

	/**
	 * @param string $blick Setter for blick
	 * @return Ausblick
	 */
	public function setBlick(string $blick) {
		$this->blick = $blick;
		return $this;
	}
}
