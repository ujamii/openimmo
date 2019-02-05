<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedSimplefield
 * Benutzerdefinierte Angaben
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("user_defined_simplefield") 
 */
class UserDefinedSimplefield {

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
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
