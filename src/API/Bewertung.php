<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bewertung
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("bewertung") 
 */
class Bewertung {

	/**
	 * @var []
	 */
	protected $feld;

	/**
	 * Returns array of []
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
