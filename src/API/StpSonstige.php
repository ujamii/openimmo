<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpSonstige
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("stp_sonstige") 
 */
class StpSonstige {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $bemerkung;

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $platzart;

	/**
	 * @return string
	 */
	public function getBemerkung(): string {
		return $this->bemerkung;
	}

	/**
	 * @return string
	 */
	public function getPlatzart(): string {
		return $this->platzart;
	}

	/**
	 * @param string $bemerkung Setter for bemerkung
	 * @return StpSonstige
	 */
	public function setBemerkung(string $bemerkung) {
		$this->bemerkung = $bemerkung;
		return $this;
	}

	/**
	 * @param string $platzart Setter for platzart
	 * @return StpSonstige
	 */
	public function setPlatzart(string $platzart) {
		$this->platzart = $platzart;
		return $this;
	}
}
