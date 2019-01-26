<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Sicherheitstechnik {

	/**
	 * @var boolean
	 */
	protected $alarmanlage;

	/**
	 * @var boolean
	 */
	protected $kamera;

	/**
	 * @var boolean
	 */
	protected $polizeiruf;

	/**
	 * @return boolean
	 */
	public function getAlarmanlage() {
		return $this->alarmanlage;
	}

	/**
	 * @return boolean
	 */
	public function getKamera() {
		return $this->kamera;
	}

	/**
	 * @return boolean
	 */
	public function getPolizeiruf() {
		return $this->polizeiruf;
	}

	/**
	 * @param boolean $alarmanlage Setter for alarmanlage
	 * @return Sicherheitstechnik
	 */
	public function setAlarmanlage($alarmanlage) {
		$this->alarmanlage = $alarmanlage;
		return $this;
	}

	/**
	 * @param boolean $kamera Setter for kamera
	 * @return Sicherheitstechnik
	 */
	public function setKamera($kamera) {
		$this->kamera = $kamera;
		return $this;
	}

	/**
	 * @param boolean $polizeiruf Setter for polizeiruf
	 * @return Sicherheitstechnik
	 */
	public function setPolizeiruf($polizeiruf) {
		$this->polizeiruf = $polizeiruf;
		return $this;
	}
}
