<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Einzelhandel {

	/**
	 * @var string
	 */
	protected $handelTyp;

	/**
	 * @return string
	 */
	public function getHandelTyp() {
		return $this->handelTyp;
	}

	/**
	 * @param string $handelTyp Setter for handelTyp
	 * @return Einzelhandel
	 */
	public function setHandelTyp($handelTyp) {
		$this->handelTyp = $handelTyp;
		return $this;
	}
}
