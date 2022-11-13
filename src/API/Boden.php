<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Boden
 * Welche Eigenschaft besitzt der Bodenbelag, Optionen kombinierbar
 * @XmlRoot("boden")
 */
class Boden
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FLIESEN")
     * optional
     */
    public ?bool $fliesen = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("STEIN")
     * optional
     */
    public ?bool $stein = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("TEPPICH")
     * optional
     */
    public ?bool $teppich = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PARKETT")
     * optional
     */
    public ?bool $parkett = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FERTIGPARKETT")
     * optional
     */
    public ?bool $fertigparkett = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("LAMINAT")
     * optional
     */
    public ?bool $laminat = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("DIELEN")
     * optional
     */
    public ?bool $dielen = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KUNSTSTOFF")
     * optional
     */
    public ?bool $kunststoff = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ESTRICH")
     * optional
     */
    public ?bool $estrich = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("DOPPELBODEN")
     * optional
     */
    public ?bool $doppelboden = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("LINOLEUM")
     * optional
     */
    public ?bool $linoleum = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("MARMOR")
     * optional
     */
    public ?bool $marmor = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("TERRAKOTTA")
     * optional
     */
    public ?bool $terrakotta = null;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("GRANIT")
     * optional
     */
    public ?bool $granit = null;

    public function getFliesen(): ?bool
    {
        return $this->fliesen;
    }

    public function setFliesen(?bool $fliesen): Boden
    {
        $this->fliesen = $fliesen;
        return $this;
    }

    public function getStein(): ?bool
    {
        return $this->stein;
    }

    public function setStein(?bool $stein): Boden
    {
        $this->stein = $stein;
        return $this;
    }

    public function getTeppich(): ?bool
    {
        return $this->teppich;
    }

    public function setTeppich(?bool $teppich): Boden
    {
        $this->teppich = $teppich;
        return $this;
    }

    public function getParkett(): ?bool
    {
        return $this->parkett;
    }

    public function setParkett(?bool $parkett): Boden
    {
        $this->parkett = $parkett;
        return $this;
    }

    public function getFertigparkett(): ?bool
    {
        return $this->fertigparkett;
    }

    public function setFertigparkett(?bool $fertigparkett): Boden
    {
        $this->fertigparkett = $fertigparkett;
        return $this;
    }

    public function getLaminat(): ?bool
    {
        return $this->laminat;
    }

    public function setLaminat(?bool $laminat): Boden
    {
        $this->laminat = $laminat;
        return $this;
    }

    public function getDielen(): ?bool
    {
        return $this->dielen;
    }

    public function setDielen(?bool $dielen): Boden
    {
        $this->dielen = $dielen;
        return $this;
    }

    public function getKunststoff(): ?bool
    {
        return $this->kunststoff;
    }

    public function setKunststoff(?bool $kunststoff): Boden
    {
        $this->kunststoff = $kunststoff;
        return $this;
    }

    public function getEstrich(): ?bool
    {
        return $this->estrich;
    }

    public function setEstrich(?bool $estrich): Boden
    {
        $this->estrich = $estrich;
        return $this;
    }

    public function getDoppelboden(): ?bool
    {
        return $this->doppelboden;
    }

    public function setDoppelboden(?bool $doppelboden): Boden
    {
        $this->doppelboden = $doppelboden;
        return $this;
    }

    public function getLinoleum(): ?bool
    {
        return $this->linoleum;
    }

    public function setLinoleum(?bool $linoleum): Boden
    {
        $this->linoleum = $linoleum;
        return $this;
    }

    public function getMarmor(): ?bool
    {
        return $this->marmor;
    }

    public function setMarmor(?bool $marmor): Boden
    {
        $this->marmor = $marmor;
        return $this;
    }

    public function getTerrakotta(): ?bool
    {
        return $this->terrakotta;
    }

    public function setTerrakotta(?bool $terrakotta): Boden
    {
        $this->terrakotta = $terrakotta;
        return $this;
    }

    public function getGranit(): ?bool
    {
        return $this->granit;
    }

    public function setGranit(?bool $granit): Boden
    {
        $this->granit = $granit;
        return $this;
    }
}
