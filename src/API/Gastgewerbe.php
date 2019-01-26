<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gastgewerbe
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("gastgewerbe") 
 */
class Gastgewerbe {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $gastgewTyp;

	/**
	 * @return string
	 */
	public function getGastgewTyp(): string {
		return $this->gastgewTyp;
	}

	/**
	 * @param string $gastgewTyp Setter for gastgewTyp
	 * @return Gastgewerbe
	 */
	public function setGastgewTyp(string $gastgewTyp) {
		$this->gastgewTyp = $gastgewTyp;
		return $this;
	}
}
