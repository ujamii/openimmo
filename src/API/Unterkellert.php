<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Unterkellert
 * Ist das Objekt unterkellert? Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("unterkellert") 
 */
class Unterkellert {

	/**
	 */
	const KELLER_JA = 'JA';

	/**
	 */
	const KELLER_NEIN = 'NEIN';

	/**
	 */
	const KELLER_TEIL = 'TEIL';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see KELLER_* constants
	 * @var string
	 */
	protected $keller;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $keller Shortcut setter for keller
	 * @param string $value the actual value
	 */
	public function __construct(string $keller = null, string $value = null) {
		$this->keller = $keller;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getKeller(): ?string {
		return $this->keller;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $keller Setter for keller
	 * @return Unterkellert
	 */
	public function setKeller(?string $keller) {
		$this->keller = $keller;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Unterkellert
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
