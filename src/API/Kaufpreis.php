<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kaufpreis
 * Gesamt- (Angebots-)Kaufpreis der Immobilie. Wenn "Auf Anfrage" dann Wert = 0 und Attribut auf TRUE
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("kaufpreis") 
 */
class Kaufpreis {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $aufAnfrage;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param boolean $aufAnfrage Shortcut setter for aufAnfrage
	 * @param float $value the actual value
	 */
	public function __construct(bool $aufAnfrage = null, float $value = null) {
		$this->aufAnfrage = $aufAnfrage;
		$this->value = $value;
	}

	/**
	 * @return boolean
	 */
	public function getAufAnfrage(): bool {
		return $this->aufAnfrage;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param boolean $aufAnfrage Setter for aufAnfrage
	 * @return Kaufpreis
	 */
	public function setAufAnfrage(bool $aufAnfrage) {
		$this->aufAnfrage = $aufAnfrage;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Kaufpreis
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
