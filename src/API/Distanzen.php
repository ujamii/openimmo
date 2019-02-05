<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Distanzen
 * Welche Distanz zu dem ausgewählten Ziel besteht (Angabe in km),
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("distanzen") 
 */
class Distanzen {

	/**
	 */
	const DISTANZ_ZU_AUTOBAHN = 'AUTOBAHN';

	/**
	 */
	const DISTANZ_ZU_BUS = 'BUS';

	/**
	 */
	const DISTANZ_ZU_EINKAUFSMOEGLICHKEITEN = 'EINKAUFSMOEGLICHKEITEN';

	/**
	 */
	const DISTANZ_ZU_FERNBAHNHOF = 'FERNBAHNHOF';

	/**
	 */
	const DISTANZ_ZU_FLUGHAFEN = 'FLUGHAFEN';

	/**
	 */
	const DISTANZ_ZU_GASTSTAETTEN = 'GASTSTAETTEN';

	/**
	 */
	const DISTANZ_ZU_GESAMTSCHULE = 'GESAMTSCHULE';

	/**
	 */
	const DISTANZ_ZU_GRUNDSCHULE = 'GRUNDSCHULE';

	/**
	 */
	const DISTANZ_ZU_GYMNASIUM = 'GYMNASIUM';

	/**
	 */
	const DISTANZ_ZU_HAUPTSCHULE = 'HAUPTSCHULE';

	/**
	 */
	const DISTANZ_ZU_KINDERGAERTEN = 'KINDERGAERTEN';

	/**
	 */
	const DISTANZ_ZU_REALSCHULE = 'REALSCHULE';

	/**
	 */
	const DISTANZ_ZU_US_BAHN = 'US_BAHN';

	/**
	 */
	const DISTANZ_ZU_ZENTRUM = 'ZENTRUM';

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see DISTANZ_ZU_* constants
	 * @var string
	 */
	protected $distanzZu;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param string $distanzZu Shortcut setter for distanzZu
	 * @param float $value the actual value
	 */
	public function __construct(string $distanzZu = null, float $value = null) {
		$this->distanzZu = $distanzZu;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getDistanzZu(): string {
		return $this->distanzZu;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param string $distanzZu Setter for distanzZu
	 * @return Distanzen
	 */
	public function setDistanzZu(string $distanzZu) {
		$this->distanzZu = $distanzZu;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Distanzen
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
