<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Aktion
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("aktion") 
 */
class Aktion {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $aktionart;

	/**
	 * @return string
	 */
	public function getAktionart(): string {
		return $this->aktionart;
	}

	/**
	 * @param string $aktionart Setter for aktionart
	 * @return Aktion
	 */
	public function setAktionart(string $aktionart) {
		$this->aktionart = $aktionart;
		return $this;
	}
}
