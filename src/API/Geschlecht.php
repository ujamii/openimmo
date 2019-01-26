<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Geschlecht {

	/**
	 * @var string
	 */
	protected $geschlAttr;

	/**
	 * @return string
	 */
	public function getGeschlAttr(): string {
		return $this->geschlAttr;
	}

	/**
	 * @param string $geschlAttr Setter for geschlAttr
	 * @return Geschlecht
	 */
	public function setGeschlAttr(string $geschlAttr) {
		$this->geschlAttr = $geschlAttr;
		return $this;
	}
}
