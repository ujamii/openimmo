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
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("LASTEN") 
	 * @var boolean
	 */
	protected $lasten;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("PERSONEN") 
	 * @var boolean
	 */
	protected $personen;

	/**
	 * @return boolean
	 */
	public function getLasten(): bool {
		return $this->lasten;
	}

	/**
	 * @return boolean
	 */
	public function getPersonen(): bool {
		return $this->personen;
	}

	/**
	 * @param boolean $lasten Setter for lasten
	 * @return Fahrstuhl
	 */
	public function setLasten(bool $lasten) {
		$this->lasten = $lasten;
		return $this;
	}

	/**
	 * @param boolean $personen Setter for personen
	 * @return Fahrstuhl
	 */
	public function setPersonen(bool $personen) {
		$this->personen = $personen;
		return $this;
	}
}
