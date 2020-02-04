<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
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
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

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
	 * @param string $zeiteinheit Shortcut setter for zeiteinheit
	 * @param string $value the actual value
	 */
	public function __construct(string $zeiteinheit = null, string $value = null) {
		$this->zeiteinheit = $zeiteinheit;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @return string
	 */
	public function getZeiteinheit(): ?string {
		return $this->zeiteinheit;
	}

	/**
	 * @param string $value Setter for value
	 * @return PreisZeiteinheit
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}

	/**
	 * @param string $zeiteinheit Setter for zeiteinheit
	 * @return PreisZeiteinheit
	 */
	public function setZeiteinheit(?string $zeiteinheit) {
		$this->zeiteinheit = $zeiteinheit;
		return $this;
	}
}
