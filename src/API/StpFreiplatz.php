<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpFreiplatz
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("stp_freiplatz") 
 */
class StpFreiplatz {

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
	 * @return StpFreiplatz
	 */
	public function setAnzahl(int $anzahl) {
		$this->anzahl = $anzahl;
		return $this;
	}

	/**
	 * @param decimal $stellplatzkaufpreis Setter for stellplatzkaufpreis
	 * @return StpFreiplatz
	 */
	public function setStellplatzkaufpreis(decimal $stellplatzkaufpreis) {
		$this->stellplatzkaufpreis = $stellplatzkaufpreis;
		return $this;
	}

	/**
	 * @param decimal $stellplatzmiete Setter for stellplatzmiete
	 * @return StpFreiplatz
	 */
	public function setStellplatzmiete(decimal $stellplatzmiete) {
		$this->stellplatzmiete = $stellplatzmiete;
		return $this;
	}
}
