<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Fahrstuhl
 * Welche Art von Fahrstuhl, Aufzug, Lift - Mehrfachnennung möglich
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("fahrstuhl") 
 */
class Fahrstuhl {

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("LASTEN") 
	 * @var bool
	 */
	protected $lasten;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("PERSONEN") 
	 * @var bool
	 */
	protected $personen;

	/**
	 * @param bool $personen Shortcut setter for personen
	 * @param bool $lasten Shortcut setter for lasten
	 */
	public function __construct(bool $personen = null, bool $lasten = null) {
		$this->personen = $personen;
		$this->lasten = $lasten;
	}

	/**
	 * @return bool
	 */
	public function getLasten(): ?bool {
		return $this->lasten;
	}

	/**
	 * @return bool
	 */
	public function getPersonen(): ?bool {
		return $this->personen;
	}

	/**
	 * @param bool $lasten Setter for lasten
	 * @return Fahrstuhl
	 */
	public function setLasten(?bool $lasten) {
		$this->lasten = $lasten;
		return $this;
	}

	/**
	 * @param bool $personen Setter for personen
	 * @return Fahrstuhl
	 */
	public function setPersonen(?bool $personen) {
		$this->personen = $personen;
		return $this;
	}
}
