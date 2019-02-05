<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MieteinnahmenSoll
 * Mieteinnahmen pro Periode, Normal-/Solleinnahmen (Ohne Periode = JAHR)
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("mieteinnahmen_soll") 
 */
class MieteinnahmenSoll {

	/**
	 */
	const PERIODE_JAHR = 'JAHR';

	/**
	 */
	const PERIODE_MONAT = 'MONAT';

	/**
	 */
	const PERIODE_TAG = 'TAG';

	/**
	 */
	const PERIODE_WOCHE = 'WOCHE';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see PERIODE_* constants
	 * @var string
	 */
	protected $periode;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param string $periode Shortcut setter for periode
	 * @param float $value the actual value
	 */
	public function __construct(string $periode = null, float $value = null) {
		$this->periode = $periode;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getPeriode(): string {
		return $this->periode;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param string $periode Setter for periode
	 * @return MieteinnahmenSoll
	 */
	public function setPeriode(string $periode) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return MieteinnahmenSoll
	 */
	public function setValue(float $value) {
		$this->value = $value;
		return $this;
	}
}
