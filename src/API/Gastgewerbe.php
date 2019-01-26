<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Gastgewerbe {

	/**
	 * @var string
	 */
	protected $gastgewTyp;

	/**
	 * @return string
	 */
	public function getGastgewTyp(): string {
		return $this->gastgewTyp;
	}

	/**
	 * @param string $gastgewTyp Setter for gastgewTyp
	 * @return Gastgewerbe
	 */
	public function setGastgewTyp(string $gastgewTyp) {
		$this->gastgewTyp = $gastgewTyp;
		return $this;
	}
}
