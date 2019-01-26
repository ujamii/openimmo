<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
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
	public function getBar(): bool {
		return $this->bar;
	}

	/**
	 * @return boolean
	 */
	public function getHotelrestaurant(): bool {
		return $this->hotelrestaurant;
	}

	/**
	 * @param boolean $bar Setter for bar
	 * @return AngeschlGastronomie
	 */
	public function setBar(bool $bar) {
		$this->bar = $bar;
		return $this;
	}

	/**
	 * @param boolean $hotelrestaurant Setter for hotelrestaurant
	 * @return AngeschlGastronomie
	 */
	public function setHotelrestaurant(bool $hotelrestaurant) {
		$this->hotelrestaurant = $hotelrestaurant;
		return $this;
	}
}
