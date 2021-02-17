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
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("BIDET") 
	 * @var bool
	 */
	protected $bidet;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("DUSCHE") 
	 * @var bool
	 */
	protected $dusche;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("FENSTER") 
	 * @var bool
	 */
	protected $fenster;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("PISSOIR") 
	 * @var bool
	 */
	protected $pissoir;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("WANNE") 
	 * @var bool
	 */
	protected $wanne;

	/**
	 * @param bool $dusche Shortcut setter for dusche
	 * @param bool $wanne Shortcut setter for wanne
	 * @param bool $fenster Shortcut setter for fenster
	 * @param bool $bidet Shortcut setter for bidet
	 * @param bool $pissoir Shortcut setter for pissoir
	 */
	public function __construct(bool $dusche = null, bool $wanne = null, bool $fenster = null, bool $bidet = null, bool $pissoir = null) {
		$this->dusche = $dusche;
		$this->wanne = $wanne;
		$this->fenster = $fenster;
		$this->bidet = $bidet;
		$this->pissoir = $pissoir;
	}

	/**
	 * @return bool
	 */
	public function getBidet(): ?bool {
		return $this->bidet;
	}

	/**
	 * @return bool
	 */
	public function getDusche(): ?bool {
		return $this->dusche;
	}

	/**
	 * @return bool
	 */
	public function getFenster(): ?bool {
		return $this->fenster;
	}

	/**
	 * @return bool
	 */
	public function getPissoir(): ?bool {
		return $this->pissoir;
	}

	/**
	 * @return bool
	 */
	public function getWanne(): ?bool {
		return $this->wanne;
	}

	/**
	 * @param bool $bidet Setter for bidet
	 * @return Bad
	 */
	public function setBidet(?bool $bidet) {
		$this->bidet = $bidet;
		return $this;
	}

	/**
	 * @param bool $dusche Setter for dusche
	 * @return Bad
	 */
	public function setDusche(?bool $dusche) {
		$this->dusche = $dusche;
		return $this;
	}

	/**
	 * @param bool $fenster Setter for fenster
	 * @return Bad
	 */
	public function setFenster(?bool $fenster) {
		$this->fenster = $fenster;
		return $this;
	}

	/**
	 * @param bool $pissoir Setter for pissoir
	 * @return Bad
	 */
	public function setPissoir(?bool $pissoir) {
		$this->pissoir = $pissoir;
		return $this;
	}

	/**
	 * @param bool $wanne Setter for wanne
	 * @return Bad
	 */
	public function setWanne(?bool $wanne) {
		$this->wanne = $wanne;
		return $this;
	}
}
