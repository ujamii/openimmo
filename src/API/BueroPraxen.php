<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BueroPraxen
 * Objektart / Typ f. Büro/Praxen
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("buero_praxen") 
 */
class BueroPraxen {

	/**
	 */
	const BUERO_TYP_AUSSTELLUNGSFLAECHE = 'AUSSTELLUNGSFLAECHE';

	/**
	 */
	const BUERO_TYP_BUEROFLAECHE = 'BUEROFLAECHE';

	/**
	 */
	const BUERO_TYP_BUEROHAUS = 'BUEROHAUS';

	/**
	 */
	const BUERO_TYP_BUEROZENTRUM = 'BUEROZENTRUM';

	/**
	 */
	const BUERO_TYP_COWORKING = 'COWORKING';

	/**
	 */
	const BUERO_TYP_LOFT_ATELIER = 'LOFT_ATELIER';

	/**
	 */
	const BUERO_TYP_PRAXIS = 'PRAXIS';

	/**
	 */
	const BUERO_TYP_PRAXISFLAECHE = 'PRAXISFLAECHE';

	/**
	 */
	const BUERO_TYP_PRAXISHAUS = 'PRAXISHAUS';

	/**
	 */
	const BUERO_TYP_SHARED_OFFICE = 'SHARED_OFFICE';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see BUERO_TYP_* constants
	 * @var string
	 */
	protected $bueroTyp;

	/**
	 * @return string
	 */
	public function getBueroTyp(): string {
		return $this->bueroTyp;
	}

	/**
	 * @param string $bueroTyp Setter for bueroTyp
	 * @return BueroPraxen
	 */
	public function setBueroTyp(string $bueroTyp) {
		$this->bueroTyp = $bueroTyp;
		return $this;
	}
}
