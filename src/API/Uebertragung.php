<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Uebertragung
 * Übertragungsangaben
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("uebertragung") 
 */
class Uebertragung {

	/**
	 */
	const ART_OFFLINE = 'OFFLINE';

	/**
	 */
	const ART_ONLINE = 'ONLINE';

	/**
	 */
	const MODUS_CHANGE = 'CHANGE';

	/**
	 */
	const MODUS_DELETE = 'DELETE';

	/**
	 */
	const MODUS_NEW = 'NEW';

	/**
	 */
	const UMFANG_TEIL = 'TEIL';

	/**
	 */
	const UMFANG_VOLL = 'VOLL';

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ART_* constants
	 * @var string
	 */
	protected $art;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see MODUS_* constants
	 * @var string
	 */
	protected $modus;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $regiId;

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $sendersoftware;

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $senderversion;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $technEmail;

	/**
	 * optional
	 *
	 * @Type("DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>") 
	 * @XmlAttribute 
	 * @var \DateTime
	 */
	protected $timestamp;

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see UMFANG_* constants
	 * @var string
	 */
	protected $umfang;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $version;

	/**
	 * @param string $art Shortcut setter for art
	 * @param string $umfang Shortcut setter for umfang
	 * @param string $modus Shortcut setter for modus
	 * @param string $version Shortcut setter for version
	 * @param string $sendersoftware Shortcut setter for sendersoftware
	 * @param string $senderversion Shortcut setter for senderversion
	 * @param string $technEmail Shortcut setter for technEmail
	 * @param string $regiId Shortcut setter for regiId
	 * @param \DateTime $timestamp Shortcut setter for timestamp
	 * @param string $value the actual value
	 */
	public function __construct(string $art = null, string $umfang = null, string $modus = null, string $version = null, string $sendersoftware = null, string $senderversion = null, string $technEmail = null, string $regiId = null, \DateTime $timestamp = null, string $value = null) {
		$this->art = $art;
		$this->umfang = $umfang;
		$this->modus = $modus;
		$this->version = $version;
		$this->sendersoftware = $sendersoftware;
		$this->senderversion = $senderversion;
		$this->technEmail = $technEmail;
		$this->regiId = $regiId;
		$this->timestamp = $timestamp;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getArt(): string {
		return $this->art;
	}

	/**
	 * @return string
	 */
	public function getModus(): ?string {
		return $this->modus;
	}

	/**
	 * @return string
	 */
	public function getRegiId(): ?string {
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
	public function getTechnEmail(): ?string {
		return $this->technEmail;
	}

	/**
	 * @return \DateTime
	 */
	public function getTimestamp(): ?\DateTime {
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
	public function getValue(): ?string {
		return $this->value;
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
	public function setModus(?string $modus) {
		$this->modus = $modus;
		return $this;
	}

	/**
	 * @param string $regiId Setter for regiId
	 * @return Uebertragung
	 */
	public function setRegiId(?string $regiId) {
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
	public function setTechnEmail(?string $technEmail) {
		$this->technEmail = $technEmail;
		return $this;
	}

	/**
	 * @param \DateTime $timestamp Setter for timestamp
	 * @return Uebertragung
	 */
	public function setTimestamp(?\DateTime $timestamp) {
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
	 * @param string $value Setter for value
	 * @return Uebertragung
	 */
	public function setValue(?string $value) {
		$this->value = $value;
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
