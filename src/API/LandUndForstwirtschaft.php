<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LandUndForstwirtschaft
 * Objektart / Typ f. Land-/Forstwirtschaft
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("land_und_forstwirtschaft") 
 */
class LandUndForstwirtschaft {

	/**
	 */
	const LAND_TYP_ACKERBAU = 'ACKERBAU';

	/**
	 */
	const LAND_TYP_ANWESEN = 'ANWESEN';

	/**
	 */
	const LAND_TYP_AUSSIEDLERHOF = 'AUSSIEDLERHOF';

	/**
	 */
	const LAND_TYP_BAUERNHOF = 'BAUERNHOF';

	/**
	 */
	const LAND_TYP_GARTENBAU = 'GARTENBAU';

	/**
	 */
	const LAND_TYP_JAGD_UND_FORSTWIRTSCHAFT = 'JAGD_UND_FORSTWIRTSCHAFT';

	/**
	 */
	const LAND_TYP_JAGDREVIER = 'JAGDREVIER';

	/**
	 */
	const LAND_TYP_LANDWIRTSCHAFTLICHE_BETRIEBE = 'LANDWIRTSCHAFTLICHE_BETRIEBE';

	/**
	 */
	const LAND_TYP_REITERHOEFE = 'REITERHOEFE';

	/**
	 */
	const LAND_TYP_SCHEUNEN = 'SCHEUNEN';

	/**
	 */
	const LAND_TYP_SONSTIGE_LANDWIRTSCHAFTSIMMOBILIEN = 'SONSTIGE_LANDWIRTSCHAFTSIMMOBILIEN';

	/**
	 */
	const LAND_TYP_TEICH_UND_FISCHWIRTSCHAFT = 'TEICH_UND_FISCHWIRTSCHAFT';

	/**
	 */
	const LAND_TYP_VIEHWIRTSCHAFT = 'VIEHWIRTSCHAFT';

	/**
	 */
	const LAND_TYP_WEINBAU = 'WEINBAU';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see LAND_TYP_* constants
	 * @var string
	 */
	protected $landTyp;

	/**
	 * @return string
	 */
	public function getLandTyp(): string {
		return $this->landTyp;
	}

	/**
	 * @param string $landTyp Setter for landTyp
	 * @return LandUndForstwirtschaft
	 */
	public function setLandTyp(string $landTyp) {
		$this->landTyp = $landTyp;
		return $this;
	}
}
