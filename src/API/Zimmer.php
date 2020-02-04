<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Zimmer
 * Objekart / Typ f. Zimmer
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("zimmer") 
 */
class Zimmer {

	/**
	 */
	const ZIMMERTYP_ZIMMER = 'ZIMMER';

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ZIMMERTYP_* constants
	 * @var string
	 */
	protected $zimmertyp;

	/**
	 * @param string $zimmertyp Shortcut setter for zimmertyp
	 * @param string $value the actual value
	 */
	public function __construct(string $zimmertyp = null, string $value = null) {
		$this->zimmertyp = $zimmertyp;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @return string
	 */
	public function getZimmertyp(): ?string {
		return $this->zimmertyp;
	}

	/**
	 * @param string $value Setter for value
	 * @return Zimmer
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}

	/**
	 * @param string $zimmertyp Setter for zimmertyp
	 * @return Zimmer
	 */
	public function setZimmertyp(?string $zimmertyp) {
		$this->zimmertyp = $zimmertyp;
		return $this;
	}
}
