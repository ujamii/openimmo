<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpFreiplatz
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("stp_freiplatz") 
 */
class StpFreiplatz {

	/**
	 * optional
	 *
	 * @Type("int") 
	 * @XmlAttribute 
	 * @var int
	 */
	protected $anzahl;

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $stellplatzkaufpreis;

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $stellplatzmiete;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param float $stellplatzmiete Shortcut setter for stellplatzmiete
	 * @param float $stellplatzkaufpreis Shortcut setter for stellplatzkaufpreis
	 * @param int $anzahl Shortcut setter for anzahl
	 * @param string $value the actual value
	 */
	public function __construct(float $stellplatzmiete = null, float $stellplatzkaufpreis = null, int $anzahl = null, string $value = null) {
		$this->stellplatzmiete = $stellplatzmiete;
		$this->stellplatzkaufpreis = $stellplatzkaufpreis;
		$this->anzahl = $anzahl;
		$this->value = $value;
	}

	/**
	 * @return int
	 */
	public function getAnzahl(): ?int {
		return $this->anzahl;
	}

	/**
	 * @return float
	 */
	public function getStellplatzkaufpreis(): ?float {
		return $this->stellplatzkaufpreis;
	}

	/**
	 * @return float
	 */
	public function getStellplatzmiete(): ?float {
		return $this->stellplatzmiete;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param int $anzahl Setter for anzahl
	 * @return StpFreiplatz
	 */
	public function setAnzahl(?int $anzahl) {
		$this->anzahl = $anzahl;
		return $this;
	}

	/**
	 * @param float $stellplatzkaufpreis Setter for stellplatzkaufpreis
	 * @return StpFreiplatz
	 */
	public function setStellplatzkaufpreis(?float $stellplatzkaufpreis) {
		$this->stellplatzkaufpreis = $stellplatzkaufpreis;
		return $this;
	}

	/**
	 * @param float $stellplatzmiete Setter for stellplatzmiete
	 * @return StpFreiplatz
	 */
	public function setStellplatzmiete(?float $stellplatzmiete) {
		$this->stellplatzmiete = $stellplatzmiete;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return StpFreiplatz
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
