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
    protected ?bool $fliesen;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("STEIN")
     * optional
     */
    protected ?bool $stein;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("TEPPICH")
     * optional
     */
    protected ?bool $teppich;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PARKETT")
     * optional
     */
    protected ?bool $parkett;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FERTIGPARKETT")
     * optional
     */
    protected ?bool $fertigparkett;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("LAMINAT")
     * optional
     */
    protected ?bool $laminat;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("DIELEN")
     * optional
     */
    protected ?bool $dielen;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KUNSTSTOFF")
     * optional
     */
    protected ?bool $kunststoff;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ESTRICH")
     * optional
     */
    protected ?bool $estrich;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("DOPPELBODEN")
     * optional
     */
    protected ?bool $doppelboden;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("LINOLEUM")
     * optional
     */
    protected ?bool $linoleum;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("MARMOR")
     * optional
     */
    protected ?bool $marmor;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("TERRAKOTTA")
     * optional
     */
    protected ?bool $terrakotta;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("GRANIT")
     * optional
     */
    protected ?bool $granit;

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
