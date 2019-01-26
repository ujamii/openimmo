<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Sonstige {

	/**
	 * @var string
	 */
	protected $sonstigeTyp;

	/**
	 * @return string
	 */
	public function getSonstigeTyp(): string {
		return $this->sonstigeTyp;
	}

	/**
	 * @param string $sonstigeTyp Setter for sonstigeTyp
	 * @return Sonstige
	 */
	public function setSonstigeTyp(string $sonstigeTyp) {
		$this->sonstigeTyp = $sonstigeTyp;
		return $this;
	}
}
