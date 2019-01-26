<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kueche
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("kueche") 
 */
class Kueche {

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $ebk;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $offen;

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $pantry;

	/**
	 * @return boolean
	 */
	public function getEbk(): bool {
		return $this->ebk;
	}

	/**
	 * @return boolean
	 */
	public function getOffen(): bool {
		return $this->offen;
	}

	/**
	 * @return boolean
	 */
	public function getPantry(): bool {
		return $this->pantry;
	}

	/**
	 * @param boolean $ebk Setter for ebk
	 * @return Kueche
	 */
	public function setEbk(bool $ebk) {
		$this->ebk = $ebk;
		return $this;
	}

	/**
	 * @param boolean $offen Setter for offen
	 * @return Kueche
	 */
	public function setOffen(bool $offen) {
		$this->offen = $offen;
		return $this;
	}

	/**
	 * @param boolean $pantry Setter for pantry
	 * @return Kueche
	 */
	public function setPantry(bool $pantry) {
		$this->pantry = $pantry;
		return $this;
	}
}
