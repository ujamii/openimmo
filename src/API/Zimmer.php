<?php
namespace Ujamii\OpenImmo\API;

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
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ZIMMERTYP_* constants
	 * @var string
	 */
	protected $zimmertyp;

	/**
	 * @return string
	 */
	public function getZimmertyp(): string {
		return $this->zimmertyp;
	}

	/**
	 * @param string $zimmertyp Setter for zimmertyp
	 * @return Zimmer
	 */
	public function setZimmertyp(string $zimmertyp) {
		$this->zimmertyp = $zimmertyp;
		return $this;
	}
}
