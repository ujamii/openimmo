<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizungsart
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("heizungsart") 
 */
class Heizungsart {

	/**
	 * @var boolean
	 */
	protected $etage;

	/**
	 * @var boolean
	 */
	protected $fern;

	/**
	 * @var boolean
	 */
	protected $fussboden;

	/**
	 * @var boolean
	 */
	protected $ofen;

	/**
	 * @var boolean
	 */
	protected $zentral;

	/**
	 * @return boolean
	 */
	public function getEtage(): bool {
		return $this->etage;
	}

	/**
	 * @return boolean
	 */
	public function getFern(): bool {
		return $this->fern;
	}

	/**
	 * @return boolean
	 */
	public function getFussboden(): bool {
		return $this->fussboden;
	}

	/**
	 * @return boolean
	 */
	public function getOfen(): bool {
		return $this->ofen;
	}

	/**
	 * @return boolean
	 */
	public function getZentral(): bool {
		return $this->zentral;
	}

	/**
	 * @param boolean $etage Setter for etage
	 * @return Heizungsart
	 */
	public function setEtage(bool $etage) {
		$this->etage = $etage;
		return $this;
	}

	/**
	 * @param boolean $fern Setter for fern
	 * @return Heizungsart
	 */
	public function setFern(bool $fern) {
		$this->fern = $fern;
		return $this;
	}

	/**
	 * @param boolean $fussboden Setter for fussboden
	 * @return Heizungsart
	 */
	public function setFussboden(bool $fussboden) {
		$this->fussboden = $fussboden;
		return $this;
	}

	/**
	 * @param boolean $ofen Setter for ofen
	 * @return Heizungsart
	 */
	public function setOfen(bool $ofen) {
		$this->ofen = $ofen;
		return $this;
	}

	/**
	 * @param boolean $zentral Setter for zentral
	 * @return Heizungsart
	 */
	public function setZentral(bool $zentral) {
		$this->zentral = $zentral;
		return $this;
	}
}
