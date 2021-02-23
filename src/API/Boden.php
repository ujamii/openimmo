<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Boden
 * Welche Eigenschaft besitzt der Bodenbelag, Optionen kombinierbar
 *
 * @XmlRoot("boden")
 */
class Boden
{
    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("DIELEN")
     * @var bool
     */
    protected $dielen;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("DOPPELBODEN")
     * @var bool
     */
    protected $doppelboden;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("ESTRICH")
     * @var bool
     */
    protected $estrich;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FERTIGPARKETT")
     * @var bool
     */
    protected $fertigparkett;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("FLIESEN")
     * @var bool
     */
    protected $fliesen;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("GRANIT")
     * @var bool
     */
    protected $granit;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("KUNSTSTOFF")
     * @var bool
     */
    protected $kunststoff;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("LAMINAT")
     * @var bool
     */
    protected $laminat;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("LINOLEUM")
     * @var bool
     */
    protected $linoleum;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("MARMOR")
     * @var bool
     */
    protected $marmor;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("PARKETT")
     * @var bool
     */
    protected $parkett;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("STEIN")
     * @var bool
     */
    protected $stein;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("TEPPICH")
     * @var bool
     */
    protected $teppich;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("TERRAKOTTA")
     * @var bool
     */
    protected $terrakotta;

    /**
     * @return bool
     */
    public function getDielen(): ?bool
    {
        return $this->dielen;
    }

    /**
     * @return bool
     */
    public function getDoppelboden(): ?bool
    {
        return $this->doppelboden;
    }

    /**
     * @return bool
     */
    public function getEstrich(): ?bool
    {
        return $this->estrich;
    }

    /**
     * @return bool
     */
    public function getFertigparkett(): ?bool
    {
        return $this->fertigparkett;
    }

    /**
     * @return bool
     */
    public function getFliesen(): ?bool
    {
        return $this->fliesen;
    }

    /**
     * @return bool
     */
    public function getGranit(): ?bool
    {
        return $this->granit;
    }

    /**
     * @return bool
     */
    public function getKunststoff(): ?bool
    {
        return $this->kunststoff;
    }

    /**
     * @return bool
     */
    public function getLaminat(): ?bool
    {
        return $this->laminat;
    }

    /**
     * @return bool
     */
    public function getLinoleum(): ?bool
    {
        return $this->linoleum;
    }

    /**
     * @return bool
     */
    public function getMarmor(): ?bool
    {
        return $this->marmor;
    }

    /**
     * @return bool
     */
    public function getParkett(): ?bool
    {
        return $this->parkett;
    }

    /**
     * @return bool
     */
    public function getStein(): ?bool
    {
        return $this->stein;
    }

    /**
     * @return bool
     */
    public function getTeppich(): ?bool
    {
        return $this->teppich;
    }

    /**
     * @return bool
     */
    public function getTerrakotta(): ?bool
    {
        return $this->terrakotta;
    }

    /**
     * @param bool $dielen Setter for dielen
     * @return Boden
     */
    public function setDielen(?bool $dielen)
    {
        $this->dielen = $dielen;
        return $this;
    }

    /**
     * @param bool $doppelboden Setter for doppelboden
     * @return Boden
     */
    public function setDoppelboden(?bool $doppelboden)
    {
        $this->doppelboden = $doppelboden;
        return $this;
    }

    /**
     * @param bool $estrich Setter for estrich
     * @return Boden
     */
    public function setEstrich(?bool $estrich)
    {
        $this->estrich = $estrich;
        return $this;
    }

    /**
     * @param bool $fertigparkett Setter for fertigparkett
     * @return Boden
     */
    public function setFertigparkett(?bool $fertigparkett)
    {
        $this->fertigparkett = $fertigparkett;
        return $this;
    }

    /**
     * @param bool $fliesen Setter for fliesen
     * @return Boden
     */
    public function setFliesen(?bool $fliesen)
    {
        $this->fliesen = $fliesen;
        return $this;
    }

    /**
     * @param bool $granit Setter for granit
     * @return Boden
     */
    public function setGranit(?bool $granit)
    {
        $this->granit = $granit;
        return $this;
    }

    /**
     * @param bool $kunststoff Setter for kunststoff
     * @return Boden
     */
    public function setKunststoff(?bool $kunststoff)
    {
        $this->kunststoff = $kunststoff;
        return $this;
    }

    /**
     * @param bool $laminat Setter for laminat
     * @return Boden
     */
    public function setLaminat(?bool $laminat)
    {
        $this->laminat = $laminat;
        return $this;
    }

    /**
     * @param bool $linoleum Setter for linoleum
     * @return Boden
     */
    public function setLinoleum(?bool $linoleum)
    {
        $this->linoleum = $linoleum;
        return $this;
    }

    /**
     * @param bool $marmor Setter for marmor
     * @return Boden
     */
    public function setMarmor(?bool $marmor)
    {
        $this->marmor = $marmor;
        return $this;
    }

    /**
     * @param bool $parkett Setter for parkett
     * @return Boden
     */
    public function setParkett(?bool $parkett)
    {
        $this->parkett = $parkett;
        return $this;
    }

    /**
     * @param bool $stein Setter for stein
     * @return Boden
     */
    public function setStein(?bool $stein)
    {
        $this->stein = $stein;
        return $this;
    }

    /**
     * @param bool $teppich Setter for teppich
     * @return Boden
     */
    public function setTeppich(?bool $teppich)
    {
        $this->teppich = $teppich;
        return $this;
    }

    /**
     * @param bool $terrakotta Setter for terrakotta
     * @return Boden
     */
    public function setTerrakotta(?bool $terrakotta)
    {
        $this->terrakotta = $terrakotta;
        return $this;
    }
}
