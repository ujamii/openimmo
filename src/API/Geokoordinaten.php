<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Geokoordinaten {

	/**
	 * @var float
	 */
	protected $breitengrad;

	/**
	 * @var float
	 */
	protected $laengengrad;

	/**
	 * @return float
	 */
	public function getBreitengrad(): float {
		return $this->breitengrad;
	}

	/**
	 * @return float
	 */
	public function getLaengengrad(): float {
		return $this->laengengrad;
	}

	/**
	 * @param float $breitengrad Setter for breitengrad
	 * @return Geokoordinaten
	 */
	public function setBreitengrad(float $breitengrad) {
		$this->breitengrad = $breitengrad;
		return $this;
	}

	/**
	 * @param float $laengengrad Setter for laengengrad
	 * @return Geokoordinaten
	 */
	public function setLaengengrad(float $laengengrad) {
		$this->laengengrad = $laengengrad;
		return $this;
	}
}
