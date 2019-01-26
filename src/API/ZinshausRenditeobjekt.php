<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class ZinshausRenditeobjekt {

	/**
	 * @var string
	 */
	protected $zinsTyp;

	/**
	 * @return string
	 */
	public function getZinsTyp() {
		return $this->zinsTyp;
	}

	/**
	 * @param string $zinsTyp Setter for zinsTyp
	 * @return ZinshausRenditeobjekt
	 */
	public function setZinsTyp($zinsTyp) {
		$this->zinsTyp = $zinsTyp;
		return $this;
	}
}
