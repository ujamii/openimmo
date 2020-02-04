<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Aktion
 * Aktion für Objekt. Wenn nicht vorhanden, dann "ADD", als neu.
 *  Change= Update der Objektdaten, Delete = Löschen des Objektes
 *  Referenz= Die Möglichkeit Objekte in Portalen als Verkauft oder Archiv zu definieren.
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
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $aktionart Shortcut setter for aktionart
	 * @param string $value the actual value
	 */
	public function __construct(string $aktionart = null, string $value = null) {
		$this->aktionart = $aktionart;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getAktionart(): ?string {
		return $this->aktionart;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $aktionart Setter for aktionart
	 * @return Aktion
	 */
	public function setAktionart(?string $aktionart) {
		$this->aktionart = $aktionart;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Aktion
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
