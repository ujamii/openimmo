<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Moebliert
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("moebliert") 
 */
class Moebliert {

	/**
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
