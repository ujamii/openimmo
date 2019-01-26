<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AussenCourtage
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("aussen_courtage") 
 */
class AussenCourtage {

	/**
	 * @var boolean
	 */
	protected $mitMwst;

	/**
	 * @return boolean
	 */
	public function getMitMwst(): bool {
		return $this->mitMwst;
	}

	/**
	 * @param boolean $mitMwst Setter for mitMwst
	 * @return AussenCourtage
	 */
	public function setMitMwst(bool $mitMwst) {
		$this->mitMwst = $mitMwst;
		return $this;
	}
}