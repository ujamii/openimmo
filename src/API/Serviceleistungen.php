<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Serviceleistungen
 * Welche Serviceleistungen werden angeboten? Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("serviceleistungen") 
 */
class Serviceleistungen {

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("BETREUTES_WOHNEN") 
	 * @var bool
	 */
	protected $betreutesWohnen;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("CATERING") 
	 * @var bool
	 */
	protected $catering;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("EINKAUF") 
	 * @var bool
	 */
	protected $einkauf;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("REINIGUNG") 
	 * @var bool
	 */
	protected $reinigung;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("WACHDIENST") 
	 * @var bool
	 */
	protected $wachdienst;

	/**
	 * @param bool $betreutesWohnen Shortcut setter for betreutesWohnen
	 * @param bool $catering Shortcut setter for catering
	 * @param bool $reinigung Shortcut setter for reinigung
	 * @param bool $einkauf Shortcut setter for einkauf
	 * @param bool $wachdienst Shortcut setter for wachdienst
	 */
	public function __construct(bool $betreutesWohnen = null, bool $catering = null, bool $reinigung = null, bool $einkauf = null, bool $wachdienst = null) {
		$this->betreutesWohnen = $betreutesWohnen;
		$this->catering = $catering;
		$this->reinigung = $reinigung;
		$this->einkauf = $einkauf;
		$this->wachdienst = $wachdienst;
	}

	/**
	 * @return bool
	 */
	public function getBetreutesWohnen(): ?bool {
		return $this->betreutesWohnen;
	}

	/**
	 * @return bool
	 */
	public function getCatering(): ?bool {
		return $this->catering;
	}

	/**
	 * @return bool
	 */
	public function getEinkauf(): ?bool {
		return $this->einkauf;
	}

	/**
	 * @return bool
	 */
	public function getReinigung(): ?bool {
		return $this->reinigung;
	}

	/**
	 * @return bool
	 */
	public function getWachdienst(): ?bool {
		return $this->wachdienst;
	}

	/**
	 * @param bool $betreutesWohnen Setter for betreutesWohnen
	 * @return Serviceleistungen
	 */
	public function setBetreutesWohnen(?bool $betreutesWohnen) {
		$this->betreutesWohnen = $betreutesWohnen;
		return $this;
	}

	/**
	 * @param bool $catering Setter for catering
	 * @return Serviceleistungen
	 */
	public function setCatering(?bool $catering) {
		$this->catering = $catering;
		return $this;
	}

	/**
	 * @param bool $einkauf Setter for einkauf
	 * @return Serviceleistungen
	 */
	public function setEinkauf(?bool $einkauf) {
		$this->einkauf = $einkauf;
		return $this;
	}

	/**
	 * @param bool $reinigung Setter for reinigung
	 * @return Serviceleistungen
	 */
	public function setReinigung(?bool $reinigung) {
		$this->reinigung = $reinigung;
		return $this;
	}

	/**
	 * @param bool $wachdienst Setter for wachdienst
	 * @return Serviceleistungen
	 */
	public function setWachdienst(?bool $wachdienst) {
		$this->wachdienst = $wachdienst;
		return $this;
	}
}
