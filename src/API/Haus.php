<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Haus {

	/**
	 * @var string
	 */
	protected $haustyp;

	/**
	 * @return string
	 */
	public function getHaustyp(): string {
		return $this->haustyp;
	}

	/**
	 * @param string $haustyp Setter for haustyp
	 * @return Haus
	 */
	public function setHaustyp(string $haustyp) {
		$this->haustyp = $haustyp;
		return $this;
	}
}
