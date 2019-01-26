<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Uebertragung
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("uebertragung") 
 */
class Uebertragung {

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $art;

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $modus;

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $regiId;

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $sendersoftware;

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $senderversion;

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $technEmail;

	/**
	 * @Type("DateTime<'Y-m-d\TH:i:s'>") 
	 * @XmlAttribute 
	 * @var \DateTime
	 */
	protected $timestamp;

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $umfang;

	/**
	 * @XmlAttribute 
	 * @var string
	 */
	protected $version;

	/**
	 * @return string
	 */
	public function getArt(): string {
		return $this->art;
	}

	/**
	 * @return string
	 */
	public function getModus(): string {
		return $this->modus;
	}

	/**
	 * @return string
	 */
	public function getRegiId(): string {
		return $this->regiId;
	}

	/**
	 * @return string
	 */
	public function getSendersoftware(): string {
		return $this->sendersoftware;
	}

	/**
	 * @return string
	 */
	public function getSenderversion(): string {
		return $this->senderversion;
	}

	/**
	 * @return string
	 */
	public function getTechnEmail(): string {
		return $this->technEmail;
	}

	/**
	 * @return \DateTime
	 */
	public function getTimestamp(): \DateTime {
		return $this->timestamp;
	}

	/**
	 * @return string
	 */
	public function getUmfang(): string {
		return $this->umfang;
	}

	/**
	 * @return string
	 */
	public function getVersion(): string {
		return $this->version;
	}

	/**
	 * @param string $art Setter for art
	 * @return Uebertragung
	 */
	public function setArt(string $art) {
		$this->art = $art;
		return $this;
	}

	/**
	 * @param string $modus Setter for modus
	 * @return Uebertragung
	 */
	public function setModus(string $modus) {
		$this->modus = $modus;
		return $this;
	}

	/**
	 * @param string $regiId Setter for regiId
	 * @return Uebertragung
	 */
	public function setRegiId(string $regiId) {
		$this->regiId = $regiId;
		return $this;
	}

	/**
	 * @param string $sendersoftware Setter for sendersoftware
	 * @return Uebertragung
	 */
	public function setSendersoftware(string $sendersoftware) {
		$this->sendersoftware = $sendersoftware;
		return $this;
	}

	/**
	 * @param string $senderversion Setter for senderversion
	 * @return Uebertragung
	 */
	public function setSenderversion(string $senderversion) {
		$this->senderversion = $senderversion;
		return $this;
	}

	/**
	 * @param string $technEmail Setter for technEmail
	 * @return Uebertragung
	 */
	public function setTechnEmail(string $technEmail) {
		$this->technEmail = $technEmail;
		return $this;
	}

	/**
	 * @param \DateTime $timestamp Setter for timestamp
	 * @return Uebertragung
	 */
	public function setTimestamp(\DateTime $timestamp) {
		$this->timestamp = $timestamp;
		return $this;
	}

	/**
	 * @param string $umfang Setter for umfang
	 * @return Uebertragung
	 */
	public function setUmfang(string $umfang) {
		$this->umfang = $umfang;
		return $this;
	}

	/**
	 * @param string $version Setter for version
	 * @return Uebertragung
	 */
	public function setVersion(string $version) {
		$this->version = $version;
		return $this;
	}
}
