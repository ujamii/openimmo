<?php
namespace Ujamii\OpenImmo\API;

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
	 * @return string
	 */
	public function getGeschlAttr(): string {
		return $this->geschlAttr;
	}

	/**
	 * @param string $geschlAttr Setter for geschlAttr
	 * @return Geschlecht
	 */
	public function setGeschlAttr(string $geschlAttr) {
		$this->geschlAttr = $geschlAttr;
		return $this;
	}
}
