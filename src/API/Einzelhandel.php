<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Einzelhandel {

	/**
	 * @var string
	 */
	protected $handelTyp;

	/**
	 * @return string
	 */
	public function getHandelTyp(): string {
		return $this->handelTyp;
	}

	/**
	 * @param string $handelTyp Setter for handelTyp
	 * @return Einzelhandel
	 */
	public function setHandelTyp(string $handelTyp) {
		$this->handelTyp = $handelTyp;
		return $this;
	}
}
