<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Vermarktungsart
 * Vermarktungsart, Optionen kombinierbar, Kauf + Miete
 * @XmlRoot("vermarktungsart")
 */
class Vermarktungsart
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KAUF")
     * required
     */
    public bool $kauf = false;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("MIETE_PACHT")
     * required
     */
    public bool $mietePacht = false;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ERBPACHT")
     * optional
     */
    public ?bool $erbpacht = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("LEASING")
     * optional
     */
    public ?bool $leasing = null;

    public function getKauf(): bool
    {
        return $this->kauf;
    }

    public function setKauf(bool $kauf): Vermarktungsart
    {
        $this->kauf = $kauf;
        return $this;
    }

    public function getMietePacht(): bool
    {
        return $this->mietePacht;
    }

    public function setMietePacht(bool $mietePacht): Vermarktungsart
    {
        $this->mietePacht = $mietePacht;
        return $this;
    }

    public function getErbpacht(): ?bool
    {
        return $this->erbpacht;
    }

    public function setErbpacht(?bool $erbpacht): Vermarktungsart
    {
        $this->erbpacht = $erbpacht;
        return $this;
    }

    public function getLeasing(): ?bool
    {
        return $this->leasing;
    }

    public function setLeasing(?bool $leasing): Vermarktungsart
    {
        $this->leasing = $leasing;
        return $this;
    }

    public function __construct(
        bool $kauf = false,
        bool $mietePacht = false,
        ?bool $erbpacht = null,
        ?bool $leasing = null,
    ) {
        $this->kauf = $kauf;
        $this->mietePacht = $mietePacht;
        $this->erbpacht = $erbpacht;
        $this->leasing = $leasing;
    }
}
