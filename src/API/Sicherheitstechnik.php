<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sicherheitstechnik
 * Welche Sicherheitstechnik ist geboten, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("sicherheitstechnik") 
 */
class Sicherheitstechnik {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("ALARMANLAGE") 
	 * @var boolean
	 */
	protected $alarmanlage;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("KAMERA") 
	 * @var boolean
	 */
	protected $kamera;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("POLIZEIRUF") 
	 * @var boolean
	 */
	protected $polizeiruf;

	/**
	 * @return boolean
	 */
	public function getAlarmanlage(): bool {
		return $this->alarmanlage;
	}

	/**
	 * @return boolean
	 */
	public function getKamera(): bool {
		return $this->kamera;
	}

	/**
	 * @return boolean
	 */
	public function getPolizeiruf(): bool {
		return $this->polizeiruf;
	}

	/**
	 * @param boolean $alarmanlage Setter for alarmanlage
	 * @return Sicherheitstechnik
	 */
	public function setAlarmanlage(bool $alarmanlage) {
		$this->alarmanlage = $alarmanlage;
		return $this;
	}

	/**
	 * @param boolean $kamera Setter for kamera
	 * @return Sicherheitstechnik
	 */
	public function setKamera(bool $kamera) {
		$this->kamera = $kamera;
		return $this;
	}

	/**
	 * @param boolean $polizeiruf Setter for polizeiruf
	 * @return Sicherheitstechnik
	 */
	public function setPolizeiruf(bool $polizeiruf) {
		$this->polizeiruf = $polizeiruf;
		return $this;
	}
}
