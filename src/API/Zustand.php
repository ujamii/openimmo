<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Zustand
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("zustand") 
 */
class Zustand {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $zustandArt;

	/**
	 * @return string
	 */
	public function getZustandArt(): string {
		return $this->zustandArt;
	}

	/**
	 * @param string $zustandArt Setter for zustandArt
	 * @return Zustand
	 */
	public function setZustandArt(string $zustandArt) {
		$this->zustandArt = $zustandArt;
		return $this;
	}
}
