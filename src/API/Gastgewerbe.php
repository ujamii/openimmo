<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gastgewerbe
 * Objektart / Typ f. Gastgewerbe
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("gastgewerbe") 
 */
class Gastgewerbe {

	/**
	 */
	const GASTGEW_TYP_BAR = 'BAR';

	/**
	 */
	const GASTGEW_TYP_CAFE = 'CAFE';

	/**
	 */
	const GASTGEW_TYP_DISCOTHEK = 'DISCOTHEK';

	/**
	 */
	const GASTGEW_TYP_EINRAUMLOKAL = 'EINRAUMLOKAL';

	/**
	 */
	const GASTGEW_TYP_GASTRONOMIE = 'GASTRONOMIE';

	/**
	 */
	const GASTGEW_TYP_GASTRONOMIE_UND_WOHNUNG = 'GASTRONOMIE_UND_WOHNUNG';

	/**
	 */
	const GASTGEW_TYP_HOTELS = 'HOTELS';

	/**
	 */
	const GASTGEW_TYP_PENSIONEN = 'PENSIONEN';

	/**
	 */
	const GASTGEW_TYP_RAUCHERLOKAL = 'RAUCHERLOKAL';

	/**
	 */
	const GASTGEW_TYP_RESTAURANT = 'RESTAURANT';

	/**
	 */
	const GASTGEW_TYP_WEITERE_BEHERBERGUNGSBETRIEBE = 'WEITERE_BEHERBERGUNGSBETRIEBE';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see GASTGEW_TYP_* constants
	 * @var string
	 */
	protected $gastgewTyp;

	/**
	 * @return string
	 */
	public function getGastgewTyp(): string {
		return $this->gastgewTyp;
	}

	/**
	 * @param string $gastgewTyp Setter for gastgewTyp
	 * @return Gastgewerbe
	 */
	public function setGastgewTyp(string $gastgewTyp) {
		$this->gastgewTyp = $gastgewTyp;
		return $this;
	}
}
