<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class FreizeitimmobilieGewerblich
 * Objektart / Typ f. gew. Freizeitimmobilen
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("freizeitimmobilie_gewerblich") 
 */
class FreizeitimmobilieGewerblich {

	/**
	 */
	const FREIZEIT_TYP_FREIZEITANLAGE = 'FREIZEITANLAGE';

	/**
	 */
	const FREIZEIT_TYP_SPORTANLAGEN = 'SPORTANLAGEN';

	/**
	 */
	const FREIZEIT_TYP_VERGNUEGUNGSPARKS_UND_CENTER = 'VERGNUEGUNGSPARKS_UND_CENTER';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see FREIZEIT_TYP_* constants
	 * @var string
	 */
	protected $freizeitTyp;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $freizeitTyp Shortcut setter for freizeitTyp
	 * @param string $value the actual value
	 */
	public function __construct(string $freizeitTyp = null, string $value = null) {
		$this->freizeitTyp = $freizeitTyp;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getFreizeitTyp(): ?string {
		return $this->freizeitTyp;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $freizeitTyp Setter for freizeitTyp
	 * @return FreizeitimmobilieGewerblich
	 */
	public function setFreizeitTyp(?string $freizeitTyp) {
		$this->freizeitTyp = $freizeitTyp;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return FreizeitimmobilieGewerblich
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
