<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MinMietdauer
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("min_mietdauer") 
 */
class MinMietdauer {

	/**
	 * @var string
	 */
	protected $minDauer;

	/**
	 * @return string
	 */
	public function getMinDauer(): string {
		return $this->minDauer;
	}

	/**
	 * @param string $minDauer Setter for minDauer
	 * @return MinMietdauer
	 */
	public function setMinDauer(string $minDauer) {
		$this->minDauer = $minDauer;
		return $this;
	}
}
