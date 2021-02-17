<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizungsart
 * Welche Heizungsarten sind vorhanden, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("heizungsart") 
 */
class Heizungsart {

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("ETAGE") 
	 * @var bool
	 */
	protected $etage;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("FERN") 
	 * @var bool
	 */
	protected $fern;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("FUSSBODEN") 
	 * @var bool
	 */
	protected $fussboden;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("OFEN") 
	 * @var bool
	 */
	protected $ofen;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("ZENTRAL") 
	 * @var bool
	 */
	protected $zentral;

	/**
	 * @param bool $ofen Shortcut setter for ofen
	 * @param bool $etage Shortcut setter for etage
	 * @param bool $zentral Shortcut setter for zentral
	 * @param bool $fern Shortcut setter for fern
	 * @param bool $fussboden Shortcut setter for fussboden
	 */
	public function __construct(bool $ofen = null, bool $etage = null, bool $zentral = null, bool $fern = null, bool $fussboden = null) {
		$this->ofen = $ofen;
		$this->etage = $etage;
		$this->zentral = $zentral;
		$this->fern = $fern;
		$this->fussboden = $fussboden;
	}

	/**
	 * @return bool
	 */
	public function getEtage(): ?bool {
		return $this->etage;
	}

	/**
	 * @return bool
	 */
	public function getFern(): ?bool {
		return $this->fern;
	}

	/**
	 * @return bool
	 */
	public function getFussboden(): ?bool {
		return $this->fussboden;
	}

	/**
	 * @return bool
	 */
	public function getOfen(): ?bool {
		return $this->ofen;
	}

	/**
	 * @return bool
	 */
	public function getZentral(): ?bool {
		return $this->zentral;
	}

	/**
	 * @param bool $etage Setter for etage
	 * @return Heizungsart
	 */
	public function setEtage(?bool $etage) {
		$this->etage = $etage;
		return $this;
	}

	/**
	 * @param bool $fern Setter for fern
	 * @return Heizungsart
	 */
	public function setFern(?bool $fern) {
		$this->fern = $fern;
		return $this;
	}

	/**
	 * @param bool $fussboden Setter for fussboden
	 * @return Heizungsart
	 */
	public function setFussboden(?bool $fussboden) {
		$this->fussboden = $fussboden;
		return $this;
	}

	/**
	 * @param bool $ofen Setter for ofen
	 * @return Heizungsart
	 */
	public function setOfen(?bool $ofen) {
		$this->ofen = $ofen;
		return $this;
	}

	/**
	 * @param bool $zentral Setter for zentral
	 * @return Heizungsart
	 */
	public function setZentral(?bool $zentral) {
		$this->zentral = $zentral;
		return $this;
	}
}
