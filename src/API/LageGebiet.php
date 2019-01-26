<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageGebiet
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("lage_gebiet") 
 */
class LageGebiet {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $gebiete;

	/**
	 * @return string
	 */
	public function getGebiete(): string {
		return $this->gebiete;
	}

	/**
	 * @param string $gebiete Setter for gebiete
	 * @return LageGebiet
	 */
	public function setGebiete(string $gebiete) {
		$this->gebiete = $gebiete;
		return $this;
	}
}
