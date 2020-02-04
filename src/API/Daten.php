<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Daten
 * Anhangdaten
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("daten") 
 */
class Daten {

	/**
	 * Base64 encoded binary
	 *
	 * @Type("string") 
	 * @var string
	 */
	protected $anhanginhalt;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $pfad;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $value the actual value
	 */
	public function __construct(string $value = null) {
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getAnhanginhalt(): ?string {
		return $this->anhanginhalt;
	}

	/**
	 * @return string
	 */
	public function getPfad(): ?string {
		return $this->pfad;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $anhanginhalt Setter for anhanginhalt
	 * @return Daten
	 */
	public function setAnhanginhalt(?string $anhanginhalt) {
		$this->anhanginhalt = $anhanginhalt;
		return $this;
	}

	/**
	 * @param string $pfad Setter for pfad
	 * @return Daten
	 */
	public function setPfad(?string $pfad) {
		$this->pfad = $pfad;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Daten
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
