<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LandUndForstwirtschaft
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("land_und_forstwirtschaft") 
 */
class LandUndForstwirtschaft {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $landTyp;

	/**
	 * @return string
	 */
	public function getLandTyp(): string {
		return $this->landTyp;
	}

	/**
	 * @param string $landTyp Setter for landTyp
	 * @return LandUndForstwirtschaft
	 */
	public function setLandTyp(string $landTyp) {
		$this->landTyp = $landTyp;
		return $this;
	}
}
