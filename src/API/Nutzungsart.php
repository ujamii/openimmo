<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nutzungsart
 * nutzungsart
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("nutzungsart") 
 */
class Nutzungsart {

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("ANLAGE") 
	 * @var bool
	 */
	protected $anlage;

	/**
	 * required
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("GEWERBE") 
	 * @var bool
	 */
	protected $gewerbe;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("WAZ") 
	 * @var bool
	 */
	protected $waz;

	/**
	 * required
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("WOHNEN") 
	 * @var bool
	 */
	protected $wohnen;

	/**
	 * @param bool $wohnen Shortcut setter for wohnen
	 * @param bool $gewerbe Shortcut setter for gewerbe
	 * @param bool $anlage Shortcut setter for anlage
	 * @param bool $waz Shortcut setter for waz
	 */
	public function __construct(bool $wohnen = null, bool $gewerbe = null, bool $anlage = null, bool $waz = null) {
		$this->wohnen = $wohnen;
		$this->gewerbe = $gewerbe;
		$this->anlage = $anlage;
		$this->waz = $waz;
	}

	/**
	 * @return bool
	 */
	public function getAnlage(): ?bool {
		return $this->anlage;
	}

	/**
	 * @return bool
	 */
	public function getGewerbe(): bool {
		return $this->gewerbe;
	}

	/**
	 * @return bool
	 */
	public function getWaz(): ?bool {
		return $this->waz;
	}

	/**
	 * @return bool
	 */
	public function getWohnen(): bool {
		return $this->wohnen;
	}

	/**
	 * @param bool $anlage Setter for anlage
	 * @return Nutzungsart
	 */
	public function setAnlage(?bool $anlage) {
		$this->anlage = $anlage;
		return $this;
	}

	/**
	 * @param bool $gewerbe Setter for gewerbe
	 * @return Nutzungsart
	 */
	public function setGewerbe(bool $gewerbe) {
		$this->gewerbe = $gewerbe;
		return $this;
	}

	/**
	 * @param bool $waz Setter for waz
	 * @return Nutzungsart
	 */
	public function setWaz(?bool $waz) {
		$this->waz = $waz;
		return $this;
	}

	/**
	 * @param bool $wohnen Setter for wohnen
	 * @return Nutzungsart
	 */
	public function setWohnen(bool $wohnen) {
		$this->wohnen = $wohnen;
		return $this;
	}
}
