<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
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
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param boolean $hotelrestaurant Shortcut setter for hotelrestaurant
	 * @param boolean $bar Shortcut setter for bar
	 * @param string $value the actual value
	 */
	public function __construct(bool $hotelrestaurant = null, bool $bar = null, string $value = null) {
		$this->hotelrestaurant = $hotelrestaurant;
		$this->bar = $bar;
		$this->value = $value;
	}

	/**
	 * @return boolean
	 */
	public function getBar(): ?bool {
		return $this->bar;
	}

	/**
	 * @return boolean
	 */
	public function getHotelrestaurant(): ?bool {
		return $this->hotelrestaurant;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param boolean $bar Setter for bar
	 * @return AngeschlGastronomie
	 */
	public function setBar(?bool $bar) {
		$this->bar = $bar;
		return $this;
	}

	/**
	 * @param boolean $hotelrestaurant Setter for hotelrestaurant
	 * @return AngeschlGastronomie
	 */
	public function setHotelrestaurant(?bool $hotelrestaurant) {
		$this->hotelrestaurant = $hotelrestaurant;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return AngeschlGastronomie
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
