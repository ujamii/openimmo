<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class FreizeitimmobilieGewerblich {

	/**
	 * @var string
	 */
	protected $freizeitTyp;

	/**
	 * @return string
	 */
	public function getFreizeitTyp(): string {
		return $this->freizeitTyp;
	}

	/**
	 * @param string $freizeitTyp Setter for freizeitTyp
	 * @return FreizeitimmobilieGewerblich
	 */
	public function setFreizeitTyp(string $freizeitTyp) {
		$this->freizeitTyp = $freizeitTyp;
		return $this;
	}
}
