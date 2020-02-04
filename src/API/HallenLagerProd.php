<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class HallenLagerProd
 * Objektart / Typ f. Hallen/Lager/Produktion
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("hallen_lager_prod") 
 */
class HallenLagerProd {

	/**
	 */
	const HALLEN_TYP_FREIFLAECHEN = 'FREIFLAECHEN';

	/**
	 */
	const HALLEN_TYP_HALLE = 'HALLE';

	/**
	 */
	const HALLEN_TYP_HOCHREGALLAGER = 'HOCHREGALLAGER';

	/**
	 */
	const HALLEN_TYP_INDUSTRIEHALLE = 'INDUSTRIEHALLE';

	/**
	 */
	const HALLEN_TYP_KUEHLHAUS = 'KUEHLHAUS';

	/**
	 */
	const HALLEN_TYP_LAGER = 'LAGER';

	/**
	 */
	const HALLEN_TYP_LAGER_MIT_FREIFLAECHE = 'LAGER_MIT_FREIFLAECHE';

	/**
	 */
	const HALLEN_TYP_LAGERFLAECHEN = 'LAGERFLAECHEN';

	/**
	 */
	const HALLEN_TYP_PRODUKTION = 'PRODUKTION';

	/**
	 */
	const HALLEN_TYP_SERVICE = 'SERVICE';

	/**
	 */
	const HALLEN_TYP_SPEDITIONSLAGER = 'SPEDITIONSLAGER';

	/**
	 */
	const HALLEN_TYP_WERKSTATT = 'WERKSTATT';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see HALLEN_TYP_* constants
	 * @var string
	 */
	protected $hallenTyp;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $hallenTyp Shortcut setter for hallenTyp
	 * @param string $value the actual value
	 */
	public function __construct(string $hallenTyp = null, string $value = null) {
		$this->hallenTyp = $hallenTyp;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getHallenTyp(): ?string {
		return $this->hallenTyp;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param string $hallenTyp Setter for hallenTyp
	 * @return HallenLagerProd
	 */
	public function setHallenTyp(?string $hallenTyp) {
		$this->hallenTyp = $hallenTyp;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return HallenLagerProd
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
