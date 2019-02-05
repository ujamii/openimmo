<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageGebiet
 * Lage Gebiet, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("lage_gebiet") 
 */
class LageGebiet {

	/**
	 */
	const GEBIETE_1A = '1A';

	/**
	 */
	const GEBIETE_1B = '1B';

	/**
	 */
	const GEBIETE_GEWERBE = 'GEWERBE';

	/**
	 */
	const GEBIETE_INDUSTRIE = 'INDUSTRIE';

	/**
	 */
	const GEBIETE_MISCH = 'MISCH';

	/**
	 */
	const GEBIETE_NEBENZENTRUM = 'NEBENZENTRUM';

	/**
	 */
	const GEBIETE_NEUBAU = 'NEUBAU';

	/**
	 */
	const GEBIETE_ORTSLAGE = 'ORTSLAGE';

	/**
	 */
	const GEBIETE_SIEDLUNG = 'SIEDLUNG';

	/**
	 */
	const GEBIETE_STADTRAND = 'STADTRAND';

	/**
	 */
	const GEBIETE_STADTTEIL = 'STADTTEIL';

	/**
	 */
	const GEBIETE_STADTZENTRUM = 'STADTZENTRUM';

	/**
	 */
	const GEBIETE_WOHN = 'WOHN';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see GEBIETE_* constants
	 * @var string
	 */
	protected $gebiete;

	/**
	 * @return string
	 */
	public function getGebiete(): string {
		return $this->gebiete;
	}

	/**
	 * @param string $gebiete Setter for gebiete
	 * @return LageGebiet
	 */
	public function setGebiete(string $gebiete) {
		$this->gebiete = $gebiete;
		return $this;
	}
}
