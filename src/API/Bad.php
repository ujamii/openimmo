<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bad
 * Welche Eigenschaft besitzt das Bad, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("bad") 
 */
class Bad {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("BIDET") 
	 * @var boolean
	 */
	protected $bidet;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("DUSCHE") 
	 * @var boolean
	 */
	protected $dusche;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("FENSTER") 
	 * @var boolean
	 */
	protected $fenster;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("PISSOIR") 
	 * @var boolean
	 */
	protected $pissoir;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("WANNE") 
	 * @var boolean
	 */
	protected $wanne;

	/**
	 * @return boolean
	 */
	public function getBidet(): bool {
		return $this->bidet;
	}

	/**
	 * @return boolean
	 */
	public function getDusche(): bool {
		return $this->dusche;
	}

	/**
	 * @return boolean
	 */
	public function getFenster(): bool {
		return $this->fenster;
	}

	/**
	 * @return boolean
	 */
	public function getPissoir(): bool {
		return $this->pissoir;
	}

	/**
	 * @return boolean
	 */
	public function getWanne(): bool {
		return $this->wanne;
	}

	/**
	 * @param boolean $bidet Setter for bidet
	 * @return Bad
	 */
	public function setBidet(bool $bidet) {
		$this->bidet = $bidet;
		return $this;
	}

	/**
	 * @param boolean $dusche Setter for dusche
	 * @return Bad
	 */
	public function setDusche(bool $dusche) {
		$this->dusche = $dusche;
		return $this;
	}

	/**
	 * @param boolean $fenster Setter for fenster
	 * @return Bad
	 */
	public function setFenster(bool $fenster) {
		$this->fenster = $fenster;
		return $this;
	}

	/**
	 * @param boolean $pissoir Setter for pissoir
	 * @return Bad
	 */
	public function setPissoir(bool $pissoir) {
		$this->pissoir = $pissoir;
		return $this;
	}

	/**
	 * @param boolean $wanne Setter for wanne
	 * @return Bad
	 */
	public function setWanne(bool $wanne) {
		$this->wanne = $wanne;
		return $this;
	}
}
