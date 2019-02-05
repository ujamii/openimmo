<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class InnenCourtage
 * Maklercourtage, bei Vermittlungs- bzw. Nachweisgeschäften als Betrag in ? / % / MM, daher Textfeld
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("innen_courtage") 
 */
class InnenCourtage {

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
	 * @return InnenCourtage
	 */
	public function setMitMwst(bool $mitMwst) {
		$this->mitMwst = $mitMwst;
		return $this;
	}
}
