<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Serviceleistungen
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("serviceleistungen") 
 */
class Serviceleistungen {

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $betreutesWohnen;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $catering;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $einkauf;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $reinigung;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $wachdienst;

	/**
	 * @return boolean
	 */
	public function getBetreutesWohnen(): bool {
		return $this->betreutesWohnen;
	}

	/**
	 * @return boolean
	 */
	public function getCatering(): bool {
		return $this->catering;
	}

	/**
	 * @return boolean
	 */
	public function getEinkauf(): bool {
		return $this->einkauf;
	}

	/**
	 * @return boolean
	 */
	public function getReinigung(): bool {
		return $this->reinigung;
	}

	/**
	 * @return boolean
	 */
	public function getWachdienst(): bool {
		return $this->wachdienst;
	}

	/**
	 * @param boolean $betreutesWohnen Setter for betreutesWohnen
	 * @return Serviceleistungen
	 */
	public function setBetreutesWohnen(bool $betreutesWohnen) {
		$this->betreutesWohnen = $betreutesWohnen;
		return $this;
	}

	/**
	 * @param boolean $catering Setter for catering
	 * @return Serviceleistungen
	 */
	public function setCatering(bool $catering) {
		$this->catering = $catering;
		return $this;
	}

	/**
	 * @param boolean $einkauf Setter for einkauf
	 * @return Serviceleistungen
	 */
	public function setEinkauf(bool $einkauf) {
		$this->einkauf = $einkauf;
		return $this;
	}

	/**
	 * @param boolean $reinigung Setter for reinigung
	 * @return Serviceleistungen
	 */
	public function setReinigung(bool $reinigung) {
		$this->reinigung = $reinigung;
		return $this;
	}

	/**
	 * @param boolean $wachdienst Setter for wachdienst
	 * @return Serviceleistungen
	 */
	public function setWachdienst(bool $wachdienst) {
		$this->wachdienst = $wachdienst;
		return $this;
	}
}
