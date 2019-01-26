<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Grundstueck {

	/**
	 * @var string
	 */
	protected $grundstTyp;

	/**
	 * @return string
	 */
	public function getGrundstTyp() {
		return $this->grundstTyp;
	}

	/**
	 * @param string $grundstTyp Setter for grundstTyp
	 * @return Grundstueck
	 */
	public function setGrundstTyp($grundstTyp) {
		$this->grundstTyp = $grundstTyp;
		return $this;
	}
}
