<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Wohnung
 * Objektart / Typ f. Wohnungen
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("wohnung") 
 */
class Wohnung {

	/**
	 */
	const WOHNUNGTYP_APARTMENT = 'APARTMENT';

	/**
	 */
	const WOHNUNGTYP_ATTIKAWOHNUNG = 'ATTIKAWOHNUNG';

	/**
	 */
	const WOHNUNGTYP_DACHGESCHOSS = 'DACHGESCHOSS';

	/**
	 */
	const WOHNUNGTYP_ERDGESCHOSS = 'ERDGESCHOSS';

	/**
	 */
	const WOHNUNGTYP_ETAGE = 'ETAGE';

	/**
	 */
	const WOHNUNGTYP_FERIENWOHNUNG = 'FERIENWOHNUNG';

	/**
	 */
	const WOHNUNGTYP_GALERIE = 'GALERIE';

	/**
	 */
	const WOHNUNGTYP_KEINE_ANGABE = 'KEINE_ANGABE';

	/**
	 */
	const WOHNUNGTYP_LOFT_STUDIO_ATELIER = 'LOFT-STUDIO-ATELIER';

	/**
	 */
	const WOHNUNGTYP_MAISONETTE = 'MAISONETTE';

	/**
	 */
	const WOHNUNGTYP_PENTHOUSE = 'PENTHOUSE';

	/**
	 */
	const WOHNUNGTYP_ROHDACHBODEN = 'ROHDACHBODEN';

	/**
	 */
	const WOHNUNGTYP_SOUTERRAIN = 'SOUTERRAIN';

	/**
	 */
	const WOHNUNGTYP_TERRASSEN = 'TERRASSEN';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see WOHNUNGTYP_* constants
	 * @var string
	 */
	protected $wohnungtyp;

	/**
	 * @return string
	 */
	public function getWohnungtyp(): string {
		return $this->wohnungtyp;
	}

	/**
	 * @param string $wohnungtyp Setter for wohnungtyp
	 * @return Wohnung
	 */
	public function setWohnungtyp(string $wohnungtyp) {
		$this->wohnungtyp = $wohnungtyp;
		return $this;
	}
}
