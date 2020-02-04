<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausblick
 * Welcher Ausblick ist vorhanden, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("ausblick") 
 */
class Ausblick {

	/**
	 */
	const BLICK_BERGE = 'BERGE';

	/**
	 */
	const BLICK_FERNE = 'FERNE';

	/**
	 */
	const BLICK_MEER = 'MEER';

	/**
	 */
	const BLICK_SEE = 'SEE';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see BLICK_* constants
	 * @var string
	 */
	protected $blick;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $blick Shortcut setter for blick
	 * @param string $value the actual value
	 */
	public function __construct(string $blick = null, string $value = null) {
		$this->blick = $blick;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getBlick(): ?string {
		return $this->blick;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $blick Setter for blick
	 * @return Ausblick
	 */
	public function setBlick(?string $blick) {
		$this->blick = $blick;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Ausblick
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
