<?php
namespace Ujamii\OpenImmo\API;

/**
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
	public function getLasten() {
		return $this->lasten;
	}

	/**
	 * @return boolean
	 */
	public function getPersonen() {
		return $this->personen;
	}

	/**
	 * @param boolean $lasten Setter for lasten
	 * @return Fahrstuhl
	 */
	public function setLasten($lasten) {
		$this->lasten = $lasten;
		return $this;
	}

	/**
	 * @param boolean $personen Setter for personen
	 * @return Fahrstuhl
	 */
	public function setPersonen($personen) {
		$this->personen = $personen;
		return $this;
	}
}
