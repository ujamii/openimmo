<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
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
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param boolean $mitMwst Shortcut setter for mitMwst
	 * @param string $value
	 */
	public function __construct(bool $mitMwst = null, string $value = null) {
		$this->mitMwst = $mitMwst;
		$this->value = $value;
	}

	/**
	 * @return boolean
	 */
	public function getMitMwst(): ?bool {
		return $this->mitMwst;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param boolean $mitMwst Setter for mitMwst
	 * @return InnenCourtage
	 */
	public function setMitMwst(?bool $mitMwst) {
		$this->mitMwst = $mitMwst;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return InnenCourtage
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
