<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Unterkellert {

	/**
	 * @var string
	 */
	protected $keller;

	/**
	 * @return string
	 */
	public function getKeller(): string {
		return $this->keller;
	}

	/**
	 * @param string $keller Setter for keller
	 * @return Unterkellert
	 */
	public function setKeller(string $keller) {
		$this->keller = $keller;
		return $this;
	}
}
