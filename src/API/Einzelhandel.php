<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Einzelhandel
 * Objektart / Typ f. Handel
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("einzelhandel") 
 */
class Einzelhandel {

	/**
	 */
	const HANDEL_TYP_AUSSTELLUNGSFLAECHE = 'AUSSTELLUNGSFLAECHE';

	/**
	 */
	const HANDEL_TYP_EINKAUFSZENTRUM = 'EINKAUFSZENTRUM';

	/**
	 */
	const HANDEL_TYP_EINZELHANDELSLADEN = 'EINZELHANDELSLADEN';

	/**
	 */
	const HANDEL_TYP_FACTORY_OUTLET = 'FACTORY_OUTLET';

	/**
	 */
	const HANDEL_TYP_KAUFHAUS = 'KAUFHAUS';

	/**
	 */
	const HANDEL_TYP_KIOSK = 'KIOSK';

	/**
	 */
	const HANDEL_TYP_LADENLOKAL = 'LADENLOKAL';

	/**
	 */
	const HANDEL_TYP_VERBRAUCHERMARKT = 'VERBRAUCHERMARKT';

	/**
	 */
	const HANDEL_TYP_VERKAUFSFLAECHE = 'VERKAUFSFLAECHE';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see HANDEL_TYP_* constants
	 * @var string
	 */
	protected $handelTyp;

	/**
	 * @return string
	 */
	public function getHandelTyp(): string {
		return $this->handelTyp;
	}

	/**
	 * @param string $handelTyp Setter for handelTyp
	 * @return Einzelhandel
	 */
	public function setHandelTyp(string $handelTyp) {
		$this->handelTyp = $handelTyp;
		return $this;
	}
}
