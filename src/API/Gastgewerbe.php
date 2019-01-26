<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Gastgewerbe {

	/**
	 * @var string
	 */
	protected $gastgewTyp;

	/**
	 * @return string
	 */
	public function getGastgewTyp() {
		return $this->gastgewTyp;
	}

	/**
	 * @param string $gastgewTyp Setter for gastgewTyp
	 * @return Gastgewerbe
	 */
	public function setGastgewTyp($gastgewTyp) {
		$this->gastgewTyp = $gastgewTyp;
		return $this;
	}
}
