<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Unterkellert
 * Ist das Objekt unterkellert? Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("unterkellert") 
 */
class Unterkellert {

	/**
	 */
	const KELLER_JA = 'JA';

	/**
	 */
	const KELLER_NEIN = 'NEIN';

	/**
	 */
	const KELLER_TEIL = 'TEIL';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see KELLER_* constants
	 * @var string
	 */
	protected $keller;

	/**
	 * @return string
	 */
	public function getKeller(): string {
		return $this->keller;
	}

	/**
	 * @param string $keller Setter for keller
	 * @return Unterkellert
	 */
	public function setKeller(string $keller) {
		$this->keller = $keller;
		return $this;
	}
}
