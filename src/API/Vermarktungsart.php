<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Vermarktungsart
 * Vermarktungsart, Optionen kombinierbar, Kauf + Miete
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("vermarktungsart") 
 */
class Vermarktungsart {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("ERBPACHT") 
	 * @var boolean
	 */
	protected $erbpacht;

	/**
	 * required
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("KAUF") 
	 * @var boolean
	 */
	protected $kauf;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("LEASING") 
	 * @var boolean
	 */
	protected $leasing;

	/**
	 * required
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("MIETE_PACHT") 
	 * @var boolean
	 */
	protected $mietePacht;

	/**
	 * @param boolean $kauf Shortcut setter for kauf
	 * @param boolean $mietePacht Shortcut setter for mietePacht
	 * @param boolean $erbpacht Shortcut setter for erbpacht
	 * @param boolean $leasing Shortcut setter for leasing
	 */
	public function __construct(bool $kauf = null, bool $mietePacht = null, bool $erbpacht = null, bool $leasing = null) {
		$this->kauf = $kauf;
		$this->mietePacht = $mietePacht;
		$this->erbpacht = $erbpacht;
		$this->leasing = $leasing;
	}

	/**
	 * @return boolean
	 */
	public function getErbpacht(): ?bool {
		return $this->erbpacht;
	}

	/**
	 * @return boolean
	 */
	public function getKauf(): bool {
		return $this->kauf;
	}

	/**
	 * @return boolean
	 */
	public function getLeasing(): ?bool {
		return $this->leasing;
	}

	/**
	 * @return boolean
	 */
	public function getMietePacht(): bool {
		return $this->mietePacht;
	}

	/**
	 * @param boolean $erbpacht Setter for erbpacht
	 * @return Vermarktungsart
	 */
	public function setErbpacht(?bool $erbpacht) {
		$this->erbpacht = $erbpacht;
		return $this;
	}

	/**
	 * @param boolean $kauf Setter for kauf
	 * @return Vermarktungsart
	 */
	public function setKauf(bool $kauf) {
		$this->kauf = $kauf;
		return $this;
	}

	/**
	 * @param boolean $leasing Setter for leasing
	 * @return Vermarktungsart
	 */
	public function setLeasing(?bool $leasing) {
		$this->leasing = $leasing;
		return $this;
	}

	/**
	 * @param boolean $mietePacht Setter for mietePacht
	 * @return Vermarktungsart
	 */
	public function setMietePacht(bool $mietePacht) {
		$this->mietePacht = $mietePacht;
		return $this;
	}
}
