<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Dachform
 *
 * @XmlRoot("dachform")
 */
class Dachform
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KRUEPPELWALMDACH")
     * optional
     */
    public ?bool $krueppelwalmdach = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("MANSARDDACH")
     * optional
     */
    public ?bool $mansarddach = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PULTDACH")
     * optional
     */
    public ?bool $pultdach = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SATTELDACH")
     * optional
     */
    public ?bool $satteldach = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("WALMDACH")
     * optional
     */
    public ?bool $walmdach = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FLACHDACH")
     * optional
     */
    public ?bool $flachdach = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PYRAMIDENDACH")
     * optional
     */
    public ?bool $pyramidendach = null;

    public function getKrueppelwalmdach(): ?bool
    {
        return $this->krueppelwalmdach;
    }

    public function setKrueppelwalmdach(?bool $krueppelwalmdach): Dachform
    {
        $this->krueppelwalmdach = $krueppelwalmdach;
        return $this;
    }

    public function getMansarddach(): ?bool
    {
        return $this->mansarddach;
    }

    public function setMansarddach(?bool $mansarddach): Dachform
    {
        $this->mansarddach = $mansarddach;
        return $this;
    }

    public function getPultdach(): ?bool
    {
        return $this->pultdach;
    }

    public function setPultdach(?bool $pultdach): Dachform
    {
        $this->pultdach = $pultdach;
        return $this;
    }

    public function getSatteldach(): ?bool
    {
        return $this->satteldach;
    }

    public function setSatteldach(?bool $satteldach): Dachform
    {
        $this->satteldach = $satteldach;
        return $this;
    }

    public function getWalmdach(): ?bool
    {
        return $this->walmdach;
    }

    public function setWalmdach(?bool $walmdach): Dachform
    {
        $this->walmdach = $walmdach;
        return $this;
    }

    public function getFlachdach(): ?bool
    {
        return $this->flachdach;
    }

    public function setFlachdach(?bool $flachdach): Dachform
    {
        $this->flachdach = $flachdach;
        return $this;
    }

    public function getPyramidendach(): ?bool
    {
        return $this->pyramidendach;
    }

    public function setPyramidendach(?bool $pyramidendach): Dachform
    {
        $this->pyramidendach = $pyramidendach;
        return $this;
    }
}
