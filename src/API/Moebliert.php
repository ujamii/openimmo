<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Moebliert {

	/**
	 * @var string
	 */
	protected $moeb;

	/**
	 * @return string
	 */
	public function getMoeb(): string {
		return $this->moeb;
	}

	/**
	 * @param string $moeb Setter for moeb
	 * @return Moebliert
	 */
	public function setMoeb(string $moeb) {
		$this->moeb = $moeb;
		return $this;
	}
}
