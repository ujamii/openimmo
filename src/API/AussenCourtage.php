<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AussenCourtage
 * Courtage, die der Kunde zu zahlen hat, als Betrag in ? / % / MM, daher Textfeld
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("aussen_courtage") 
 */
class AussenCourtage {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
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
