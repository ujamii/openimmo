<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Ausblick {

	/**
	 * @var string
	 */
	protected $blick;

	/**
	 * @return string
	 */
	public function getBlick() {
		return $this->blick;
	}

	/**
	 * @param string $blick Setter for blick
	 * @return Ausblick
	 */
	public function setBlick($blick) {
		$this->blick = $blick;
		return $this;
	}
}
