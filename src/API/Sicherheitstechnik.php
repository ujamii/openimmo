<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sicherheitstechnik
 * Welche Sicherheitstechnik ist geboten, Optionen kombinierbar
 * @XmlRoot("sicherheitstechnik")
 */
class Sicherheitstechnik
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ALARMANLAGE")
     * optional
     */
    protected ?bool $alarmanlage = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KAMERA")
     * optional
     */
    protected ?bool $kamera = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("POLIZEIRUF")
     * optional
     */
    protected ?bool $polizeiruf = null;

    public function getAlarmanlage(): ?bool
    {
        return $this->alarmanlage;
    }

    public function setAlarmanlage(?bool $alarmanlage): Sicherheitstechnik
    {
        $this->alarmanlage = $alarmanlage;
        return $this;
    }

    public function getKamera(): ?bool
    {
        return $this->kamera;
    }

    public function setKamera(?bool $kamera): Sicherheitstechnik
    {
        $this->kamera = $kamera;
        return $this;
    }

    public function getPolizeiruf(): ?bool
    {
        return $this->polizeiruf;
    }

    public function setPolizeiruf(?bool $polizeiruf): Sicherheitstechnik
    {
        $this->polizeiruf = $polizeiruf;
        return $this;
    }

    public function __construct(?bool $alarmanlage = null, ?bool $kamera = null, ?bool $polizeiruf = null)
    {
        $this->alarmanlage = $alarmanlage;
        $this->kamera = $kamera;
        $this->polizeiruf = $polizeiruf;
    }
}
