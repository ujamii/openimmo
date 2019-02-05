<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Verkaufstatus
 * Anzeige ob z.B schon verkauft, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("verkaufstatus") 
 */
class Verkaufstatus {

	/**
	 */
	const STAND_OFFEN = 'OFFEN';

	/**
	 */
	const STAND_RESERVIERT = 'RESERVIERT';

	/**
	 */
	const STAND_VERKAUFT = 'VERKAUFT';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see STAND_* constants
	 * @var string
	 */
	protected $stand;

	/**
	 * @return string
	 */
	public function getStand(): string {
		return $this->stand;
	}

	/**
	 * @param string $stand Setter for stand
	 * @return Verkaufstatus
	 */
	public function setStand(string $stand) {
		$this->stand = $stand;
		return $this;
	}
}
