<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Grundstueck
 * Objektart / Typ f. Grundstücke
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("grundstueck") 
 */
class Grundstueck {

	/**
	 */
	const GRUNDST_TYP_FREIZEIT = 'FREIZEIT';

	/**
	 */
	const GRUNDST_TYP_GEMISCHT = 'GEMISCHT';

	/**
	 */
	const GRUNDST_TYP_GEWERBE = 'GEWERBE';

	/**
	 */
	const GRUNDST_TYP_GEWERBEPARK = 'GEWERBEPARK';

	/**
	 */
	const GRUNDST_TYP_INDUSTRIE = 'INDUSTRIE';

	/**
	 */
	const GRUNDST_TYP_LAND_FORSTWIRSCHAFT = 'LAND_FORSTWIRSCHAFT';

	/**
	 */
	const GRUNDST_TYP_SEELIEGENSCHAFT = 'SEELIEGENSCHAFT';

	/**
	 */
	const GRUNDST_TYP_SONDERNUTZUNG = 'SONDERNUTZUNG';

	/**
	 */
	const GRUNDST_TYP_WOHNEN = 'WOHNEN';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see GRUNDST_TYP_* constants
	 * @var string
	 */
	protected $grundstTyp;

	/**
	 * @return string
	 */
	public function getGrundstTyp(): string {
		return $this->grundstTyp;
	}

	/**
	 * @param string $grundstTyp Setter for grundstTyp
	 * @return Grundstueck
	 */
	public function setGrundstTyp(string $grundstTyp) {
		$this->grundstTyp = $grundstTyp;
		return $this;
	}
}
