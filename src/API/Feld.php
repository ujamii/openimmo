<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Feld
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("feld") 
 */
class Feld {

	/**
	 * @XmlList(inline = true, entry = "modus") 
	 * @Type("array<string>") 
	 * @var string[]
	 */
	protected $modus;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $name;

	/**
	 * @XmlList(inline = true, entry = "typ") 
	 * @Type("array<string>") 
	 * @var string[]
	 */
	protected $typ;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $wert;

	/**
	 * @param string $name Shortcut setter for name
	 * @param string $wert Shortcut setter for wert
	 * @param array $typ Shortcut setter for typ
	 * @param array $modus Shortcut setter for modus
	 */
	public function __construct(string $name = null, string $wert = null, array $typ = [], array $modus = []) {
		$this->name = $name;
		$this->wert = $wert;
		$this->typ = $typ;
		$this->modus = $modus;
	}

	/**
	 * Returns array of string
	 *
	 * @return array
	 */
	public function getModus(): array {
		return $this->modus ?? [];
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * Returns array of string
	 *
	 * @return array
	 */
	public function getTyp(): array {
		return $this->typ ?? [];
	}

	/**
	 * @return string
	 */
	public function getWert(): string {
		return $this->wert;
	}

	/**
	 * @param array $modus Setter for modus
	 * @return Feld
	 */
	public function setModus(array $modus) {
		$this->modus = $modus;
		return $this;
	}

	/**
	 * @param string $name Setter for name
	 * @return Feld
	 */
	public function setName(string $name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * @param array $typ Setter for typ
	 * @return Feld
	 */
	public function setTyp(array $typ) {
		$this->typ = $typ;
		return $this;
	}

	/**
	 * @param string $wert Setter for wert
	 * @return Feld
	 */
	public function setWert(string $wert) {
		$this->wert = $wert;
		return $this;
	}
}
