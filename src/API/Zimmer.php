<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Zimmer {

	/**
	 * @var string
	 */
	protected $zimmertyp;

	/**
	 * @return string
	 */
	public function getZimmertyp(): string {
		return $this->zimmertyp;
	}

	/**
	 * @param string $zimmertyp Setter for zimmertyp
	 * @return Zimmer
	 */
	public function setZimmertyp(string $zimmertyp) {
		$this->zimmertyp = $zimmertyp;
		return $this;
	}
}
