<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class LandUndForstwirtschaft {

	/**
	 * @var string
	 */
	protected $landTyp;

	/**
	 * @return string
	 */
	public function getLandTyp(): string {
		return $this->landTyp;
	}

	/**
	 * @param string $landTyp Setter for landTyp
	 * @return LandUndForstwirtschaft
	 */
	public function setLandTyp(string $landTyp) {
		$this->landTyp = $landTyp;
		return $this;
	}
}
