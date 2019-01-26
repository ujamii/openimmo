<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class UserDefinedExtend {

	/**
	 * @var []
	 */
	protected $feld;

	/**
	 * @return []
	 */
	public function getFeld() {
		return $this->feld;
	}

	/**
	 * @param array $feld Setter for feld
	 * @return UserDefinedExtend
	 */
	public function setFeld(array $feld) {
		$this->feld = $feld;
		return $this;
	}
}
