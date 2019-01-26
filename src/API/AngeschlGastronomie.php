<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class AngeschlGastronomie {

	/**
	 * @var boolean
	 */
	protected $bar;

	/**
	 * @var boolean
	 */
	protected $hotelrestaurant;

	/**
	 * @return boolean
	 */
	public function getBar() {
		return $this->bar;
	}

	/**
	 * @return boolean
	 */
	public function getHotelrestaurant() {
		return $this->hotelrestaurant;
	}

	/**
	 * @param boolean $bar Setter for bar
	 * @return AngeschlGastronomie
	 */
	public function setBar($bar) {
		$this->bar = $bar;
		return $this;
	}

	/**
	 * @param boolean $hotelrestaurant Setter for hotelrestaurant
	 * @return AngeschlGastronomie
	 */
	public function setHotelrestaurant($hotelrestaurant) {
		$this->hotelrestaurant = $hotelrestaurant;
		return $this;
	}
}
