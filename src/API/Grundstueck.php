<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Grundstueck
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("grundstueck") 
 */
class Grundstueck {

	/**
	 * @var string
	 */
	protected $grundstTyp;

	/**
	 * @return string
	 */
	public function getGrundstTyp(): string {
		return $this->grundstTyp;
	}

	/**
	 * @param string $grundstTyp Setter for grundstTyp
	 * @return Grundstueck
	 */
	public function setGrundstTyp(string $grundstTyp) {
		$this->grundstTyp = $grundstTyp;
		return $this;
	}
}
