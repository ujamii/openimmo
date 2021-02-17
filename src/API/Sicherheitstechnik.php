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
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("ALARMANLAGE") 
	 * @var bool
	 */
	protected $alarmanlage;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("KAMERA") 
	 * @var bool
	 */
	protected $kamera;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("POLIZEIRUF") 
	 * @var bool
	 */
	protected $polizeiruf;

	/**
	 * @param bool $alarmanlage Shortcut setter for alarmanlage
	 * @param bool $kamera Shortcut setter for kamera
	 * @param bool $polizeiruf Shortcut setter for polizeiruf
	 */
	public function __construct(bool $alarmanlage = null, bool $kamera = null, bool $polizeiruf = null) {
		$this->alarmanlage = $alarmanlage;
		$this->kamera = $kamera;
		$this->polizeiruf = $polizeiruf;
	}

	/**
	 * @return bool
	 */
	public function getAlarmanlage(): ?bool {
		return $this->alarmanlage;
	}

	/**
	 * @return bool
	 */
	public function getKamera(): ?bool {
		return $this->kamera;
	}

	/**
	 * @return bool
	 */
	public function getPolizeiruf(): ?bool {
		return $this->polizeiruf;
	}

	/**
	 * @param bool $alarmanlage Setter for alarmanlage
	 * @return Sicherheitstechnik
	 */
	public function setAlarmanlage(?bool $alarmanlage) {
		$this->alarmanlage = $alarmanlage;
		return $this;
	}

	/**
	 * @param bool $kamera Setter for kamera
	 * @return Sicherheitstechnik
	 */
	public function setKamera(?bool $kamera) {
		$this->kamera = $kamera;
		return $this;
	}

	/**
	 * @param bool $polizeiruf Setter for polizeiruf
	 * @return Sicherheitstechnik
	 */
	public function setPolizeiruf(?bool $polizeiruf) {
		$this->polizeiruf = $polizeiruf;
		return $this;
	}
}
