<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Wohnung
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("wohnung") 
 */
class Wohnung {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $wohnungtyp;

	/**
	 * @return string
	 */
	public function getWohnungtyp(): string {
		return $this->wohnungtyp;
	}

	/**
	 * @param string $wohnungtyp Setter for wohnungtyp
	 * @return Wohnung
	 */
	public function setWohnungtyp(string $wohnungtyp) {
		$this->wohnungtyp = $wohnungtyp;
		return $this;
	}
}
