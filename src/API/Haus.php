<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Haus
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("haus") 
 */
class Haus {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $haustyp;

	/**
	 * @return string
	 */
	public function getHaustyp(): string {
		return $this->haustyp;
	}

	/**
	 * @param string $haustyp Setter for haustyp
	 * @return Haus
	 */
	public function setHaustyp(string $haustyp) {
		$this->haustyp = $haustyp;
		return $this;
	}
}
