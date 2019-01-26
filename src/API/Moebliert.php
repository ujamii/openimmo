<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Moebliert {

	/**
	 * @var string
	 */
	protected $moeb;

	/**
	 * @return string
	 */
	public function getMoeb() {
		return $this->moeb;
	}

	/**
	 * @param string $moeb Setter for moeb
	 * @return Moebliert
	 */
	public function setMoeb($moeb) {
		$this->moeb = $moeb;
		return $this;
	}
}
