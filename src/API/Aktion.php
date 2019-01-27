<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Aktion
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("aktion") 
 */
class Aktion {

	/**
	 */
	const AKTIONART_CHANGE = 'CHANGE';

	/**
	 */
	const AKTIONART_DELETE = 'DELETE';

	/**
	 */
	const AKTIONART_REFERENZ = 'REFERENZ';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see AKTIONART_* constants
	 * @var string
	 */
	protected $aktionart;

	/**
	 * @return string
	 */
	public function getAktionart(): string {
		return $this->aktionart;
	}

	/**
	 * @param string $aktionart Setter for aktionart
	 * @return Aktion
	 */
	public function setAktionart(string $aktionart) {
		$this->aktionart = $aktionart;
		return $this;
	}
}
