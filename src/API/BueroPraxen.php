<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class BueroPraxen {

	/**
	 * @var string
	 */
	protected $bueroTyp;

	/**
	 * @return string
	 */
	public function getBueroTyp() {
		return $this->bueroTyp;
	}

	/**
	 * @param string $bueroTyp Setter for bueroTyp
	 * @return BueroPraxen
	 */
	public function setBueroTyp($bueroTyp) {
		$this->bueroTyp = $bueroTyp;
		return $this;
	}
}
