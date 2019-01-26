<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BueroPraxen
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("buero_praxen") 
 */
class BueroPraxen {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $bueroTyp;

	/**
	 * @return string
	 */
	public function getBueroTyp(): string {
		return $this->bueroTyp;
	}

	/**
	 * @param string $bueroTyp Setter for bueroTyp
	 * @return BueroPraxen
	 */
	public function setBueroTyp(string $bueroTyp) {
		$this->bueroTyp = $bueroTyp;
		return $this;
	}
}
