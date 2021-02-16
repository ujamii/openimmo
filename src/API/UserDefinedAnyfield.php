<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedAnyfield
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("user_defined_anyfield") 
 */
class UserDefinedAnyfield {

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $value Shortcut setter for value
	 */
	public function __construct(string $value = null) {
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $value Setter for value
	 * @return UserDefinedAnyfield
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
