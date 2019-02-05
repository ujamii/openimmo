<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Parken
 * Objektart für diverse Parkplatz Angaben
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("parken") 
 */
class Parken {

	/**
	 */
	const PARKEN_TYP_BOOTSLIEGEPLATZ = 'BOOTSLIEGEPLATZ';

	/**
	 */
	const PARKEN_TYP_CARPORT = 'CARPORT';

	/**
	 */
	const PARKEN_TYP_DOPPELGARAGE = 'DOPPELGARAGE';

	/**
	 */
	const PARKEN_TYP_DUPLEX = 'DUPLEX';

	/**
	 */
	const PARKEN_TYP_EINZELGARAGE = 'EINZELGARAGE';

	/**
	 */
	const PARKEN_TYP_PARKHAUS = 'PARKHAUS';

	/**
	 */
	const PARKEN_TYP_PARKPLATZ_STROM = 'PARKPLATZ_STROM';

	/**
	 */
	const PARKEN_TYP_STELLPLATZ = 'STELLPLATZ';

	/**
	 */
	const PARKEN_TYP_TIEFGARAGE = 'TIEFGARAGE';

	/**
	 */
	const PARKEN_TYP_TIEFGARAGENSTELLPLATZ = 'TIEFGARAGENSTELLPLATZ';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see PARKEN_TYP_* constants
	 * @var string
	 */
	protected $parkenTyp;

	/**
	 * @return string
	 */
	public function getParkenTyp(): string {
		return $this->parkenTyp;
	}

	/**
	 * @param string $parkenTyp Setter for parkenTyp
	 * @return Parken
	 */
	public function setParkenTyp(string $parkenTyp) {
		$this->parkenTyp = $parkenTyp;
		return $this;
	}
}
