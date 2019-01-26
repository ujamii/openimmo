<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class UserDefinedSimplefield {

	/**
	 * @var string
	 */
	protected $feldname;

	/**
	 * @return string
	 */
	public function getFeldname() {
		return $this->feldname;
	}

	/**
	 * @param string $feldname Setter for feldname
	 * @return UserDefinedSimplefield
	 */
	public function setFeldname($feldname) {
		$this->feldname = $feldname;
		return $this;
	}
}
