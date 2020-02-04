<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geschlecht
 * Soll das Objekt nur an Frauen bzw. nur an Männer vermietet werden,
 *  fehlende Angabe wird als 'Ja' interpretiert
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("geschlecht") 
 */
class Geschlecht {

	/**
	 */
	const GESCHL_ATTR_EGAL = 'EGAL';

	/**
	 */
	const GESCHL_ATTR_NUR_FRAU = 'NUR_FRAU';

	/**
	 */
	const GESCHL_ATTR_NUR_MANN = 'NUR_MANN';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see GESCHL_ATTR_* constants
	 * @var string
	 */
	protected $geschlAttr;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $geschlAttr Shortcut setter for geschlAttr
	 * @param string $value the actual value
	 */
	public function __construct(string $geschlAttr = null, string $value = null) {
		$this->geschlAttr = $geschlAttr;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getGeschlAttr(): ?string {
		return $this->geschlAttr;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $geschlAttr Setter for geschlAttr
	 * @return Geschlecht
	 */
	public function setGeschlAttr(?string $geschlAttr) {
		$this->geschlAttr = $geschlAttr;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Geschlecht
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
