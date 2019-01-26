<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpTiefgarage
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("stp_tiefgarage") 
 */
class StpTiefgarage {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var int
	 */
	protected $anzahl;

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var decimal
	 */
	protected $stellplatzkaufpreis;

	/**
	 * optional
	 *
	 * @XmlAttribute 
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
	 * @return StpTiefgarage
	 */
	public function setAnzahl(int $anzahl) {
		$this->anzahl = $anzahl;
		return $this;
	}

	/**
	 * @param decimal $stellplatzkaufpreis Setter for stellplatzkaufpreis
	 * @return StpTiefgarage
	 */
	public function setStellplatzkaufpreis(decimal $stellplatzkaufpreis) {
		$this->stellplatzkaufpreis = $stellplatzkaufpreis;
		return $this;
	}

	/**
	 * @param decimal $stellplatzmiete Setter for stellplatzmiete
	 * @return StpTiefgarage
	 */
	public function setStellplatzmiete(decimal $stellplatzmiete) {
		$this->stellplatzmiete = $stellplatzmiete;
		return $this;
	}
}
