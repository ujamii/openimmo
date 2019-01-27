<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Energietyp
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("energietyp") 
 */
class Energietyp {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("KFW40") 
	 * @var boolean
	 */
	protected $kfw40;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("KFW55") 
	 * @var boolean
	 */
	protected $kfw55;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("KFW60") 
	 * @var boolean
	 */
	protected $kfw60;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("KFW70") 
	 * @var boolean
	 */
	protected $kfw70;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("MINERGIEBAUWEISE") 
	 * @var boolean
	 */
	protected $minergiebauweise;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("MINERGIE_ZERTIFIZIERT") 
	 * @var boolean
	 */
	protected $minergieZertifiziert;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("NEUBAUSTANDARD") 
	 * @var boolean
	 */
	protected $neubaustandard;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("NIEDRIGENERGIE") 
	 * @var boolean
	 */
	protected $niedrigenergie;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("PASSIVHAUS") 
	 * @var boolean
	 */
	protected $passivhaus;

	/**
	 * @return boolean
	 */
	public function getKfw40(): bool {
		return $this->kfw40;
	}

	/**
	 * @return boolean
	 */
	public function getKfw55(): bool {
		return $this->kfw55;
	}

	/**
	 * @return boolean
	 */
	public function getKfw60(): bool {
		return $this->kfw60;
	}

	/**
	 * @return boolean
	 */
	public function getKfw70(): bool {
		return $this->kfw70;
	}

	/**
	 * @return boolean
	 */
	public function getMinergiebauweise(): bool {
		return $this->minergiebauweise;
	}

	/**
	 * @return boolean
	 */
	public function getMinergieZertifiziert(): bool {
		return $this->minergieZertifiziert;
	}

	/**
	 * @return boolean
	 */
	public function getNeubaustandard(): bool {
		return $this->neubaustandard;
	}

	/**
	 * @return boolean
	 */
	public function getNiedrigenergie(): bool {
		return $this->niedrigenergie;
	}

	/**
	 * @return boolean
	 */
	public function getPassivhaus(): bool {
		return $this->passivhaus;
	}

	/**
	 * @param boolean $kfw40 Setter for kfw40
	 * @return Energietyp
	 */
	public function setKfw40(bool $kfw40) {
		$this->kfw40 = $kfw40;
		return $this;
	}

	/**
	 * @param boolean $kfw55 Setter for kfw55
	 * @return Energietyp
	 */
	public function setKfw55(bool $kfw55) {
		$this->kfw55 = $kfw55;
		return $this;
	}

	/**
	 * @param boolean $kfw60 Setter for kfw60
	 * @return Energietyp
	 */
	public function setKfw60(bool $kfw60) {
		$this->kfw60 = $kfw60;
		return $this;
	}

	/**
	 * @param boolean $kfw70 Setter for kfw70
	 * @return Energietyp
	 */
	public function setKfw70(bool $kfw70) {
		$this->kfw70 = $kfw70;
		return $this;
	}

	/**
	 * @param boolean $minergiebauweise Setter for minergiebauweise
	 * @return Energietyp
	 */
	public function setMinergiebauweise(bool $minergiebauweise) {
		$this->minergiebauweise = $minergiebauweise;
		return $this;
	}

	/**
	 * @param boolean $minergieZertifiziert Setter for minergieZertifiziert
	 * @return Energietyp
	 */
	public function setMinergieZertifiziert(bool $minergieZertifiziert) {
		$this->minergieZertifiziert = $minergieZertifiziert;
		return $this;
	}

	/**
	 * @param boolean $neubaustandard Setter for neubaustandard
	 * @return Energietyp
	 */
	public function setNeubaustandard(bool $neubaustandard) {
		$this->neubaustandard = $neubaustandard;
		return $this;
	}

	/**
	 * @param boolean $niedrigenergie Setter for niedrigenergie
	 * @return Energietyp
	 */
	public function setNiedrigenergie(bool $niedrigenergie) {
		$this->niedrigenergie = $niedrigenergie;
		return $this;
	}

	/**
	 * @param boolean $passivhaus Setter for passivhaus
	 * @return Energietyp
	 */
	public function setPassivhaus(bool $passivhaus) {
		$this->passivhaus = $passivhaus;
		return $this;
	}
}
