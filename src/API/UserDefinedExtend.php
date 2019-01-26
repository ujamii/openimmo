<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class UserDefinedExtend {

	/**
	 * @var []
	 */
	protected $feld;

	/**
	 * Returns array of []
	 *
	 * @return array
	 */
	public function getFeld(): array {
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
