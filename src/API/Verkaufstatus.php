<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Verkaufstatus
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("verkaufstatus") 
 */
class Verkaufstatus {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $stand;

	/**
	 * @return string
	 */
	public function getStand(): string {
		return $this->stand;
	}

	/**
	 * @param string $stand Setter for stand
	 * @return Verkaufstatus
	 */
	public function setStand(string $stand) {
		$this->stand = $stand;
		return $this;
	}
}
