<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
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
	 * @Type("array<string>") 
	 * @var string[]
	 */
	protected $feld;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $value the actual value
	 */
	public function __construct(string $value = null) {
		$this->value = $value;
	}

	/**
	 * Returns array of string
	 *
	 * @return array
	 */
	public function getFeld(): array {
		return $this->feld ?? [];
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param array $feld Setter for feld
	 * @return UserDefinedExtend
	 */
	public function setFeld(array $feld) {
		$this->feld = $feld;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return UserDefinedExtend
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
