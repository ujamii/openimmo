<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Daten
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("daten") 
 */
class Daten {

	/**
	 * @var base64Binary
	 */
	protected $anhanginhalt;

	/**
	 * @var string
	 */
	protected $pfad;

	/**
	 * @return base64Binary
	 */
	public function getAnhanginhalt(): base64Binary {
		return $this->anhanginhalt;
	}

	/**
	 * @return string
	 */
	public function getPfad(): string {
		return $this->pfad;
	}

	/**
	 * @param base64Binary $anhanginhalt Setter for anhanginhalt
	 * @return Daten
	 */
	public function setAnhanginhalt(base64Binary $anhanginhalt) {
		$this->anhanginhalt = $anhanginhalt;
		return $this;
	}

	/**
	 * @param string $pfad Setter for pfad
	 * @return Daten
	 */
	public function setPfad(string $pfad) {
		$this->pfad = $pfad;
		return $this;
	}
}
