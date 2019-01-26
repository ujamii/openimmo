<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ZinshausRenditeobjekt
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("zinshaus_renditeobjekt") 
 */
class ZinshausRenditeobjekt {

	/**
	 * @var string
	 */
	protected $zinsTyp;

	/**
	 * @return string
	 */
	public function getZinsTyp(): string {
		return $this->zinsTyp;
	}

	/**
	 * @param string $zinsTyp Setter for zinsTyp
	 * @return ZinshausRenditeobjekt
	 */
	public function setZinsTyp(string $zinsTyp) {
		$this->zinsTyp = $zinsTyp;
		return $this;
	}
}
