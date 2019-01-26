<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class BueroPraxen {

	/**
	 * @var string
	 */
	protected $bueroTyp;

	/**
	 * @return string
	 */
	public function getBueroTyp(): string {
		return $this->bueroTyp;
	}

	/**
	 * @param string $bueroTyp Setter for bueroTyp
	 * @return BueroPraxen
	 */
	public function setBueroTyp(string $bueroTyp) {
		$this->bueroTyp = $bueroTyp;
		return $this;
	}
}
