<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Fahrstuhl
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("fahrstuhl") 
 */
class Fahrstuhl {

	/**
	 * @var boolean
	 */
	protected $lasten;

	/**
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
