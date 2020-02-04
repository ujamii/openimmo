<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Moebliert
 * Wie ist die Möblierung: Voll, Teil oder keine Aussage
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("moebliert") 
 */
class Moebliert {

	/**
	 */
	const MOEB_TEIL = 'TEIL';

	/**
	 */
	const MOEB_VOLL = 'VOLL';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see MOEB_* constants
	 * @var string
	 */
	protected $moeb;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $moeb Shortcut setter for moeb
	 * @param string $value the actual value
	 */
	public function __construct(string $moeb = null, string $value = null) {
		$this->moeb = $moeb;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getMoeb(): ?string {
		return $this->moeb;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $moeb Setter for moeb
	 * @return Moebliert
	 */
	public function setMoeb(?string $moeb) {
		$this->moeb = $moeb;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Moebliert
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
