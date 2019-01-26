<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstige
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("sonstige") 
 */
class Sonstige {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $sonstigeTyp;

	/**
	 * @return string
	 */
	public function getSonstigeTyp(): string {
		return $this->sonstigeTyp;
	}

	/**
	 * @param string $sonstigeTyp Setter for sonstigeTyp
	 * @return Sonstige
	 */
	public function setSonstigeTyp(string $sonstigeTyp) {
		$this->sonstigeTyp = $sonstigeTyp;
		return $this;
	}
}
