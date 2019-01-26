<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class UserDefinedSimplefield {

	/**
	 * @var string
	 */
	protected $feldname;

	/**
	 * @return string
	 */
	public function getFeldname(): string {
		return $this->feldname;
	}

	/**
	 * @param string $feldname Setter for feldname
	 * @return UserDefinedSimplefield
	 */
	public function setFeldname(string $feldname) {
		$this->feldname = $feldname;
		return $this;
	}
}
