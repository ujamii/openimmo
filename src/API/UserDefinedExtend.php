<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedExtend
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("user_defined_extend") 
 */
class UserDefinedExtend {

	/**
	 * @XmlList(inline = true, entry = "feld") 
	 * @Type("array<Ujamii\OpenImmo\API\Feld>") 
	 * @var Feld[]
	 */
	protected $feld;

	/**
	 * @param array $feld Shortcut setter for feld
	 */
	public function __construct(array $feld = []) {
		$this->feld = $feld;
	}

	/**
	 * Returns array of Feld
	 *
	 * @return array
	 */
	public function getFeld(): array {
		return $this->feld ?? [];
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
