<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Zustand
 * Zustand des Objektes, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("zustand") 
 */
class Zustand {

	/**
	 */
	const ZUSTAND_ART_ABRISSOBJEKT = 'ABRISSOBJEKT';

	/**
	 */
	const ZUSTAND_ART_BAUFAELLIG = 'BAUFAELLIG';

	/**
	 */
	const ZUSTAND_ART_ENTKERNT = 'ENTKERNT';

	/**
	 */
	const ZUSTAND_ART_ERSTBEZUG = 'ERSTBEZUG';

	/**
	 */
	const ZUSTAND_ART_GEPFLEGT = 'GEPFLEGT';

	/**
	 */
	const ZUSTAND_ART_MODERNISIERT = 'MODERNISIERT';

	/**
	 */
	const ZUSTAND_ART_NACH_VEREINBARUNG = 'NACH_VEREINBARUNG';

	/**
	 */
	const ZUSTAND_ART_NEUWERTIG = 'NEUWERTIG';

	/**
	 */
	const ZUSTAND_ART_PROJEKTIERT = 'PROJEKTIERT';

	/**
	 */
	const ZUSTAND_ART_ROHBAU = 'ROHBAU';

	/**
	 */
	const ZUSTAND_ART_SANIERUNGSBEDUERFTIG = 'SANIERUNGSBEDUERFTIG';

	/**
	 */
	const ZUSTAND_ART_TEIL_SANIERT = 'TEIL_SANIERT';

	/**
	 */
	const ZUSTAND_ART_TEIL_VOLLRENOVIERT = 'TEIL_VOLLRENOVIERT';

	/**
	 */
	const ZUSTAND_ART_TEIL_VOLLRENOVIERUNGSBED = 'TEIL_VOLLRENOVIERUNGSBED';

	/**
	 */
	const ZUSTAND_ART_TEIL_VOLLSANIERT = 'TEIL_VOLLSANIERT';

	/**
	 */
	const ZUSTAND_ART_VOLL_SANIERT = 'VOLL_SANIERT';

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ZUSTAND_ART_* constants
	 * @var string
	 */
	protected $zustandArt;

	/**
	 * @param string $zustandArt Shortcut setter for zustandArt
	 * @param string $value the actual value
	 */
	public function __construct(string $zustandArt = null, string $value = null) {
		$this->zustandArt = $zustandArt;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @return string
	 */
	public function getZustandArt(): ?string {
		return $this->zustandArt;
	}

	/**
	 * @param string $value Setter for value
	 * @return Zustand
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}

	/**
	 * @param string $zustandArt Setter for zustandArt
	 * @return Zustand
	 */
	public function setZustandArt(?string $zustandArt) {
		$this->zustandArt = $zustandArt;
		return $this;
	}
}
