<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BreitbandZugang
 * Informationen über die Breitbandmöglichkeiten.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("breitband_zugang") 
 */
class BreitbandZugang {

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $art;

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $speed;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $art Shortcut setter for art
	 * @param float $speed Shortcut setter for speed
	 * @param string $value the actual value
	 */
	public function __construct(string $art = null, float $speed = null, string $value = null) {
		$this->art = $art;
		$this->speed = $speed;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getArt(): ?string {
		return $this->art;
	}

	/**
	 * @return float
	 */
	public function getSpeed(): ?float {
		return $this->speed;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $art Setter for art
	 * @return BreitbandZugang
	 */
	public function setArt(?string $art) {
		$this->art = $art;
		return $this;
	}

	/**
	 * @param float $speed Setter for speed
	 * @return BreitbandZugang
	 */
	public function setSpeed(?float $speed) {
		$this->speed = $speed;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return BreitbandZugang
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
