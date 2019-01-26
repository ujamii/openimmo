<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MaxMietdauer
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("max_mietdauer") 
 */
class MaxMietdauer {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $maxDauer;

	/**
	 * @return string
	 */
	public function getMaxDauer(): string {
		return $this->maxDauer;
	}

	/**
	 * @param string $maxDauer Setter for maxDauer
	 * @return MaxMietdauer
	 */
	public function setMaxDauer(string $maxDauer) {
		$this->maxDauer = $maxDauer;
		return $this;
	}
}
