<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class ZinshausRenditeobjekt {

	/**
	 * @var string
	 */
	protected $zinsTyp;

	/**
	 * @return string
	 */
	public function getZinsTyp(): string {
		return $this->zinsTyp;
	}

	/**
	 * @param string $zinsTyp Setter for zinsTyp
	 * @return ZinshausRenditeobjekt
	 */
	public function setZinsTyp(string $zinsTyp) {
		$this->zinsTyp = $zinsTyp;
		return $this;
	}
}
