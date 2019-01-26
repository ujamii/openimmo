<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Einzelhandel
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("einzelhandel") 
 */
class Einzelhandel {

	/**
	 * @var string
	 */
	protected $handelTyp;

	/**
	 * @return string
	 */
	public function getHandelTyp(): string {
		return $this->handelTyp;
	}

	/**
	 * @param string $handelTyp Setter for handelTyp
	 * @return Einzelhandel
	 */
	public function setHandelTyp(string $handelTyp) {
		$this->handelTyp = $handelTyp;
		return $this;
	}
}
