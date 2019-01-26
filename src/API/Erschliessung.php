<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Erschliessung
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("erschliessung") 
 */
class Erschliessung {

	/**
	 * @var string
	 */
	protected $erschlAttr;

	/**
	 * @return string
	 */
	public function getErschlAttr(): string {
		return $this->erschlAttr;
	}

	/**
	 * @param string $erschlAttr Setter for erschlAttr
	 * @return Erschliessung
	 */
	public function setErschlAttr(string $erschlAttr) {
		$this->erschlAttr = $erschlAttr;
		return $this;
	}
}
