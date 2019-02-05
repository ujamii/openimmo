<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtmietenetto
 * Summe alle Mietzins Zahlungen, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("gesamtmietenetto") 
 */
class Gesamtmietenetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $gesamtmieteust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $gesamtmieteust Shortcut setter for gesamtmieteust
	 * @param float $value the actual value
	 */
	public function __construct(float $gesamtmieteust = null, float $value = null) {
		$this->gesamtmieteust = $gesamtmieteust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getGesamtmieteust(): float {
		return $this->gesamtmieteust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param float $gesamtmieteust Setter for gesamtmieteust
	 * @return Gesamtmietenetto
	 */
	public function setGesamtmieteust(float $gesamtmieteust) {
		$this->gesamtmieteust = $gesamtmieteust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Gesamtmietenetto
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
