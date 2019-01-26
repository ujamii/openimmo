<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausblick
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("ausblick") 
 */
class Ausblick {

	/**
	 * @var string
	 */
	protected $blick;

	/**
	 * @return string
	 */
	public function getBlick(): string {
		return $this->blick;
	}

	/**
	 * @param string $blick Setter for blick
	 * @return Ausblick
	 */
	public function setBlick(string $blick) {
		$this->blick = $blick;
		return $this;
	}
}
