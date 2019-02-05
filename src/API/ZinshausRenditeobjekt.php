<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ZinshausRenditeobjekt
 * Objektyp / Typ f. Zins und Renditehäuser
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("zinshaus_renditeobjekt") 
 */
class ZinshausRenditeobjekt {

	/**
	 */
	const ZINS_TYP_BETREUTES_WOHNEN = 'BETREUTES-WOHNEN';

	/**
	 */
	const ZINS_TYP_BUEROGEBAEUDE = 'BUEROGEBAEUDE';

	/**
	 */
	const ZINS_TYP_EINKAUFSCENTREN = 'EINKAUFSCENTREN';

	/**
	 */
	const ZINS_TYP_GESCHAEFTSHAUS = 'GESCHAEFTSHAUS';

	/**
	 */
	const ZINS_TYP_INDUSTRIEANLAGEN = 'INDUSTRIEANLAGEN';

	/**
	 */
	const ZINS_TYP_MEHRFAMILIENHAUS = 'MEHRFAMILIENHAUS';

	/**
	 */
	const ZINS_TYP_PFLEGEHEIM = 'PFLEGEHEIM';

	/**
	 */
	const ZINS_TYP_SANATORIUM = 'SANATORIUM';

	/**
	 */
	const ZINS_TYP_SB_MAERKTE = 'SB_MAERKTE';

	/**
	 */
	const ZINS_TYP_SENIORENHEIM = 'SENIORENHEIM';

	/**
	 */
	const ZINS_TYP_VERBRAUCHERMAERKTE = 'VERBRAUCHERMAERKTE';

	/**
	 */
	const ZINS_TYP_WOHN_UND_GESCHAEFTSHAUS = 'WOHN_UND_GESCHAEFTSHAUS';

	/**
	 */
	const ZINS_TYP_WOHNANLAGEN = 'WOHNANLAGEN';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ZINS_TYP_* constants
	 * @var string
	 */
	protected $zinsTyp;

	/**
	 * @return string
	 */
	public function getZinsTyp(): string {
		return $this->zinsTyp;
	}

	/**
	 * @param string $zinsTyp Setter for zinsTyp
	 * @return ZinshausRenditeobjekt
	 */
	public function setZinsTyp(string $zinsTyp) {
		$this->zinsTyp = $zinsTyp;
		return $this;
	}
}
