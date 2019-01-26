<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Uebertragung {

	/**
	 * @var string
	 */
	protected $art;

	/**
	 * @var string
	 */
	protected $modus;

	/**
	 * @var string
	 */
	protected $regiId;

	/**
	 * @var string
	 */
	protected $sendersoftware;

	/**
	 * @var string
	 */
	protected $senderversion;

	/**
	 * @var string
	 */
	protected $technEmail;

	/**
	 * @var dateTime
	 */
	protected $timestamp;

	/**
	 * @var string
	 */
	protected $umfang;

	/**
	 * @var string
	 */
	protected $version;

	/**
	 * @return string
	 */
	public function getArt() {
		return $this->art;
	}

	/**
	 * @return string
	 */
	public function getModus() {
		return $this->modus;
	}

	/**
	 * @return string
	 */
	public function getRegiId() {
		return $this->regiId;
	}

	/**
	 * @return string
	 */
	public function getSendersoftware() {
		return $this->sendersoftware;
	}

	/**
	 * @return string
	 */
	public function getSenderversion() {
		return $this->senderversion;
	}

	/**
	 * @return string
	 */
	public function getTechnEmail() {
		return $this->technEmail;
	}

	/**
	 * @return dateTime
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}

	/**
	 * @return string
	 */
	public function getUmfang() {
		return $this->umfang;
	}

	/**
	 * @return string
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * @param string $art Setter for art
	 * @return Uebertragung
	 */
	public function setArt($art) {
		$this->art = $art;
		return $this;
	}

	/**
	 * @param string $modus Setter for modus
	 * @return Uebertragung
	 */
	public function setModus($modus) {
		$this->modus = $modus;
		return $this;
	}

	/**
	 * @param string $regiId Setter for regiId
	 * @return Uebertragung
	 */
	public function setRegiId($regiId) {
		$this->regiId = $regiId;
		return $this;
	}

	/**
	 * @param string $sendersoftware Setter for sendersoftware
	 * @return Uebertragung
	 */
	public function setSendersoftware($sendersoftware) {
		$this->sendersoftware = $sendersoftware;
		return $this;
	}

	/**
	 * @param string $senderversion Setter for senderversion
	 * @return Uebertragung
	 */
	public function setSenderversion($senderversion) {
		$this->senderversion = $senderversion;
		return $this;
	}

	/**
	 * @param string $technEmail Setter for technEmail
	 * @return Uebertragung
	 */
	public function setTechnEmail($technEmail) {
		$this->technEmail = $technEmail;
		return $this;
	}

	/**
	 * @param dateTime $timestamp Setter for timestamp
	 * @return Uebertragung
	 */
	public function setTimestamp(dateTime $timestamp) {
		$this->timestamp = $timestamp;
		return $this;
	}

	/**
	 * @param string $umfang Setter for umfang
	 * @return Uebertragung
	 */
	public function setUmfang($umfang) {
		$this->umfang = $umfang;
		return $this;
	}

	/**
	 * @param string $version Setter for version
	 * @return Uebertragung
	 */
	public function setVersion($version) {
		$this->version = $version;
		return $this;
	}
}
