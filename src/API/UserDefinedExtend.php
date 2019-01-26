<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedExtend
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("user_defined_extend") 
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