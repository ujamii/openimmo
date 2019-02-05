<?php
namespace Ujamii\OpenImmo\API;

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
	 * @return string
	 */
	public function getFreizeitTyp(): string {
		return $this->freizeitTyp;
	}

	/**
	 * @param string $freizeitTyp Setter for freizeitTyp
	 * @return FreizeitimmobilieGewerblich
	 */
	public function setFreizeitTyp(string $freizeitTyp) {
		$this->freizeitTyp = $freizeitTyp;
		return $this;
	}
}
