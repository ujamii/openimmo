<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geokoordinaten
 * Geokoordinaten der Immobilie, Pflichtfeld, alternativ mit Ort, PLZ
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("geokoordinaten") 
 */
class Geokoordinaten {

	/**
	 * required
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $breitengrad;

	/**
	 * required
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $laengengrad;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param float $breitengrad Shortcut setter for breitengrad
	 * @param float $laengengrad Shortcut setter for laengengrad
	 * @param string $value the actual value
	 */
	public function __construct(float $breitengrad = null, float $laengengrad = null, string $value = null) {
		$this->breitengrad = $breitengrad;
		$this->laengengrad = $laengengrad;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getBreitengrad(): float {
		return $this->breitengrad;
	}

	/**
	 * @return float
	 */
	public function getLaengengrad(): float {
		return $this->laengengrad;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param float $breitengrad Setter for breitengrad
	 * @return Geokoordinaten
	 */
	public function setBreitengrad(float $breitengrad) {
		$this->breitengrad = $breitengrad;
		return $this;
	}

	/**
	 * @param float $laengengrad Setter for laengengrad
	 * @return Geokoordinaten
	 */
	public function setLaengengrad(float $laengengrad) {
		$this->laengengrad = $laengengrad;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Geokoordinaten
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
