<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kueche
 * Welche Eigenschaften besitzt die Küche, Optionen kombinierbar
 *
 * @XmlRoot("kueche")
 */
class Kueche
{
    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("EBK")
     * @var bool
     */
    protected $ebk;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("OFFEN")
     * @var bool
     */
    protected $offen;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PANTRY")
     * @var bool
     */
    protected $pantry;

    /**
     * @param bool $ebk Shortcut setter for ebk
     * @param bool $offen Shortcut setter for offen
     * @param bool $pantry Shortcut setter for pantry
     */
    public function __construct(bool $ebk = null, bool $offen = null, bool $pantry = null)
    {
        $this->ebk = $ebk;
        $this->offen = $offen;
        $this->pantry = $pantry;
    }

    /**
     * @return bool
     */
    public function getEbk(): ?bool
    {
        return $this->ebk;
    }

    /**
     * @return bool
     */
    public function getOffen(): ?bool
    {
        return $this->offen;
    }

    /**
     * @return bool
     */
    public function getPantry(): ?bool
    {
        return $this->pantry;
    }

    /**
     * @param bool $ebk Setter for ebk
     * @return Kueche
     */
    public function setEbk(?bool $ebk)
    {
        $this->ebk = $ebk;
        return $this;
    }

    /**
     * @param bool $offen Setter for offen
     * @return Kueche
     */
    public function setOffen(?bool $offen)
    {
        $this->offen = $offen;
        return $this;
    }

    /**
     * @param bool $pantry Setter for pantry
     * @return Kueche
     */
    public function setPantry(?bool $pantry)
    {
        $this->pantry = $pantry;
        return $this;
    }
}
