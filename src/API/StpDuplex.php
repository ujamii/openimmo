<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpDuplex
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("stp_duplex") 
 */
class StpDuplex {

	/**
	 * @var int
	 */
	protected $anzahl;

	/**
	 * @var decimal
	 */
	protected $stellplatzkaufpreis;

	/**
	 * @var decimal
	 */
	protected $stellplatzmiete;

	/**
	 * @return int
	 */
	public function getAnzahl(): int {
		return $this->anzahl;
	}

	/**
	 * @return decimal
	 */
	public function getStellplatzkaufpreis(): decimal {
		return $this->stellplatzkaufpreis;
	}

	/**
	 * @return decimal
	 */
	public function getStellplatzmiete(): decimal {
		return $this->stellplatzmiete;
	}

	/**
	 * @param int $anzahl Setter for anzahl
	 * @return StpDuplex
	 */
	public function setAnzahl(int $anzahl) {
		$this->anzahl = $anzahl;
		return $this;
	}

	/**
	 * @param decimal $stellplatzkaufpreis Setter for stellplatzkaufpreis
	 * @return StpDuplex
	 */
	public function setStellplatzkaufpreis(decimal $stellplatzkaufpreis) {
		$this->stellplatzkaufpreis = $stellplatzkaufpreis;
		return $this;
	}

	/**
	 * @param decimal $stellplatzmiete Setter for stellplatzmiete
	 * @return StpDuplex
	 */
	public function setStellplatzmiete(decimal $stellplatzmiete) {
		$this->stellplatzmiete = $stellplatzmiete;
		return $this;
	}
}
