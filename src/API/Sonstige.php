<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Sonstige {

	/**
	 * @var string
	 */
	protected $sonstigeTyp;

	/**
	 * @return string
	 */
	public function getSonstigeTyp() {
		return $this->sonstigeTyp;
	}

	/**
	 * @param string $sonstigeTyp Setter for sonstigeTyp
	 * @return Sonstige
	 */
	public function setSonstigeTyp($sonstigeTyp) {
		$this->sonstigeTyp = $sonstigeTyp;
		return $this;
	}
}
