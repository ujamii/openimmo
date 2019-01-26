<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class LandUndForstwirtschaft {

	/**
	 * @var string
	 */
	protected $landTyp;

	/**
	 * @return string
	 */
	public function getLandTyp() {
		return $this->landTyp;
	}

	/**
	 * @param string $landTyp Setter for landTyp
	 * @return LandUndForstwirtschaft
	 */
	public function setLandTyp($landTyp) {
		$this->landTyp = $landTyp;
		return $this;
	}
}
