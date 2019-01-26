<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class FreizeitimmobilieGewerblich
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("freizeitimmobilie_gewerblich") 
 */
class FreizeitimmobilieGewerblich {

	/**
	 * @XmlAttribute 
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
