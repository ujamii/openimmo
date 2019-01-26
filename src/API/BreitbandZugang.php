<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BreitbandZugang
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("breitband_zugang") 
 */
class BreitbandZugang {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $art;

	/**
	 * @XmlAttribute 
	 * @var decimal
	 */
	protected $speed;

	/**
	 * @return string
	 */
	public function getArt(): string {
		return $this->art;
	}

	/**
	 * @return decimal
	 */
	public function getSpeed(): decimal {
		return $this->speed;
	}

	/**
	 * @param string $art Setter for art
	 * @return BreitbandZugang
	 */
	public function setArt(string $art) {
		$this->art = $art;
		return $this;
	}

	/**
	 * @param decimal $speed Setter for speed
	 * @return BreitbandZugang
	 */
	public function setSpeed(decimal $speed) {
		$this->speed = $speed;
		return $this;
	}
}
