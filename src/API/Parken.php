<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Parken {

	/**
	 * @var string
	 */
	protected $parkenTyp;

	/**
	 * @return string
	 */
	public function getParkenTyp() {
		return $this->parkenTyp;
	}

	/**
	 * @param string $parkenTyp Setter for parkenTyp
	 * @return Parken
	 */
	public function setParkenTyp($parkenTyp) {
		$this->parkenTyp = $parkenTyp;
		return $this;
	}
}
