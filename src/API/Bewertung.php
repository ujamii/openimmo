<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bewertung
 * Container für detailierte Bewertungs Parmater
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("bewertung") 
 */
class Bewertung {

	/**
	 * @XmlList(inline = true, entry = "feld") 
	 * @Type("string") 
	 * @var string[]
	 */
	protected $feld;

	/**
	 * Returns array of string
	 *
	 * @return array
	 */
	public function getFeld(): array {
		return $this->feld;
	}

	/**
	 * @param array $feld Setter for feld
	 * @return Bewertung
	 */
	public function setFeld(array $feld) {
		$this->feld = $feld;
		return $this;
	}
}
