<?php
namespace Ujamii\OpenImmo\API;

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
	 * @return string
	 */
	public function getMoeb(): string {
		return $this->moeb;
	}

	/**
	 * @param string $moeb Setter for moeb
	 * @return Moebliert
	 */
	public function setMoeb(string $moeb) {
		$this->moeb = $moeb;
		return $this;
	}
}
