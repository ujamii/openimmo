<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kaufpreis
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("kaufpreis") 
 */
class Kaufpreis {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $aufAnfrage;

	/**
	 * @Inline 
	 * @var float
	 */
	protected $value;

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
