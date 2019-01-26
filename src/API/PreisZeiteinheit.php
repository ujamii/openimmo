<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PreisZeiteinheit
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("preis_zeiteinheit") 
 */
class PreisZeiteinheit {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $zeiteinheit;

	/**
	 * @return string
	 */
	public function getZeiteinheit(): string {
		return $this->zeiteinheit;
	}

	/**
	 * @param string $zeiteinheit Setter for zeiteinheit
	 * @return PreisZeiteinheit
	 */
	public function setZeiteinheit(string $zeiteinheit) {
		$this->zeiteinheit = $zeiteinheit;
		return $this;
	}
}
