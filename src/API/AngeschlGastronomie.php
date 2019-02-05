<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AngeschlGastronomie
 * Welcher Art ist die angeschlossene Gastronomie, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("angeschl_gastronomie") 
 */
class AngeschlGastronomie {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("BAR") 
	 * @var boolean
	 */
	protected $bar;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("HOTELRESTAURANT") 
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
