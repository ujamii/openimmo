<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Parken
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("parken") 
 */
class Parken {

	/**
	 * @var string
	 */
	protected $parkenTyp;

	/**
	 * @return string
	 */
	public function getParkenTyp(): string {
		return $this->parkenTyp;
	}

	/**
	 * @param string $parkenTyp Setter for parkenTyp
	 * @return Parken
	 */
	public function setParkenTyp(string $parkenTyp) {
		$this->parkenTyp = $parkenTyp;
		return $this;
	}
}
