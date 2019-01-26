<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Waehrung
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("waehrung") 
 */
class Waehrung {

	/**
	 * @var string
	 */
	protected $isoWaehrung;

	/**
	 * @return string
	 */
	public function getIsoWaehrung(): string {
		return $this->isoWaehrung;
	}

	/**
	 * @param string $isoWaehrung Setter for isoWaehrung
	 * @return Waehrung
	 */
	public function setIsoWaehrung(string $isoWaehrung) {
		$this->isoWaehrung = $isoWaehrung;
		return $this;
	}
}
