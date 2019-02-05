<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MinMietdauer
 * Mindestzeitraum für den die Immobilie gemietet werden muss, Optionen nicht kombinierbar, vorrangig bei WaZ
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("min_mietdauer") 
 */
class MinMietdauer {

	/**
	 */
	const MIN_DAUER_JAHR = 'JAHR';

	/**
	 */
	const MIN_DAUER_MONAT = 'MONAT';

	/**
	 */
	const MIN_DAUER_TAG = 'TAG';

	/**
	 */
	const MIN_DAUER_WOCHE = 'WOCHE';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see MIN_DAUER_* constants
	 * @var string
	 */
	protected $minDauer;

	/**
	 * @return string
	 */
	public function getMinDauer(): string {
		return $this->minDauer;
	}

	/**
	 * @param string $minDauer Setter for minDauer
	 * @return MinMietdauer
	 */
	public function setMinDauer(string $minDauer) {
		$this->minDauer = $minDauer;
		return $this;
	}
}
