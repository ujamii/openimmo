<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
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
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $gastgewTyp Shortcut setter for gastgewTyp
	 * @param string $value the actual value
	 */
	public function __construct(string $gastgewTyp = null, string $value = null) {
		$this->gastgewTyp = $gastgewTyp;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getGastgewTyp(): ?string {
		return $this->gastgewTyp;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $gastgewTyp Setter for gastgewTyp
	 * @return Gastgewerbe
	 */
	public function setGastgewTyp(?string $gastgewTyp) {
		$this->gastgewTyp = $gastgewTyp;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Gastgewerbe
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
