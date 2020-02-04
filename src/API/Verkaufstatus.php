<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Verkaufstatus
 * Anzeige ob z.B schon verkauft, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("verkaufstatus") 
 */
class Verkaufstatus {

	/**
	 */
	const STAND_OFFEN = 'OFFEN';

	/**
	 */
	const STAND_RESERVIERT = 'RESERVIERT';

	/**
	 */
	const STAND_VERKAUFT = 'VERKAUFT';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see STAND_* constants
	 * @var string
	 */
	protected $stand;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $stand Shortcut setter for stand
	 * @param string $value the actual value
	 */
	public function __construct(string $stand = null, string $value = null) {
		$this->stand = $stand;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getStand(): ?string {
		return $this->stand;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $stand Setter for stand
	 * @return Verkaufstatus
	 */
	public function setStand(?string $stand) {
		$this->stand = $stand;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Verkaufstatus
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
