<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MaxMietdauer
 * Maximalzeitraum für den die Immobilie gemietet werdenkann, Optionen nicht kombinierbar, vorrangig bei WaZ
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("max_mietdauer") 
 */
class MaxMietdauer {

	/**
	 */
	const MAX_DAUER_JAHR = 'JAHR';

	/**
	 */
	const MAX_DAUER_MONAT = 'MONAT';

	/**
	 */
	const MAX_DAUER_TAG = 'TAG';

	/**
	 */
	const MAX_DAUER_WOCHE = 'WOCHE';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see MAX_DAUER_* constants
	 * @var string
	 */
	protected $maxDauer;

	/**
	 * @return string
	 */
	public function getMaxDauer(): string {
		return $this->maxDauer;
	}

	/**
	 * @param string $maxDauer Setter for maxDauer
	 * @return MaxMietdauer
	 */
	public function setMaxDauer(string $maxDauer) {
		$this->maxDauer = $maxDauer;
		return $this;
	}
}
