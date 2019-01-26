<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Unterkellert
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("unterkellert") 
 */
class Unterkellert {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $keller;

	/**
	 * @return string
	 */
	public function getKeller(): string {
		return $this->keller;
	}

	/**
	 * @param string $keller Setter for keller
	 * @return Unterkellert
	 */
	public function setKeller(string $keller) {
		$this->keller = $keller;
		return $this;
	}
}
