<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
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
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $minDauer Shortcut setter for minDauer
	 * @param string $value Shortcut setter for value
	 */
	public function __construct(string $minDauer = null, string $value = null) {
		$this->minDauer = $minDauer;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getMinDauer(): ?string {
		return $this->minDauer;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $minDauer Setter for minDauer
	 * @return MinMietdauer
	 */
	public function setMinDauer(?string $minDauer) {
		$this->minDauer = $minDauer;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return MinMietdauer
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
