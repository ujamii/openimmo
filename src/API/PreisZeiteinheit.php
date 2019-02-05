<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PreisZeiteinheit
 * Zeiteinheit für die der Preis gilt, vorrangig bei Ferienobjekten
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("preis_zeiteinheit") 
 */
class PreisZeiteinheit {

	/**
	 */
	const ZEITEINHEIT_JAHR = 'JAHR';

	/**
	 */
	const ZEITEINHEIT_MONAT = 'MONAT';

	/**
	 */
	const ZEITEINHEIT_TAG = 'TAG';

	/**
	 */
	const ZEITEINHEIT_WOCHE = 'WOCHE';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ZEITEINHEIT_* constants
	 * @var string
	 */
	protected $zeiteinheit;

	/**
	 * @return string
	 */
	public function getZeiteinheit(): string {
		return $this->zeiteinheit;
	}

	/**
	 * @param string $zeiteinheit Setter for zeiteinheit
	 * @return PreisZeiteinheit
	 */
	public function setZeiteinheit(string $zeiteinheit) {
		$this->zeiteinheit = $zeiteinheit;
		return $this;
	}
}
