<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Geschlecht {

	/**
	 * @var string
	 */
	protected $geschlAttr;

	/**
	 * @return string
	 */
	public function getGeschlAttr() {
		return $this->geschlAttr;
	}

	/**
	 * @param string $geschlAttr Setter for geschlAttr
	 * @return Geschlecht
	 */
	public function setGeschlAttr($geschlAttr) {
		$this->geschlAttr = $geschlAttr;
		return $this;
	}
}
