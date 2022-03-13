<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Objektart
 * Objektarten
 * @XmlRoot("objektart")
 */
class Objektart
{
    /**
     * @XmlList(inline = true, entry = "zimmer")
     * @Type("array<Ujamii\OpenImmo\API\Zimmer>")
     * @SkipWhenEmpty
     */
    protected array $zimmer = [];

    /**
     * @XmlList(inline = true, entry = "wohnung")
     * @Type("array<Ujamii\OpenImmo\API\Wohnung>")
     * @SkipWhenEmpty
     */
    protected array $wohnung = [];

    /**
     * @XmlList(inline = true, entry = "haus")
     * @Type("array<Ujamii\OpenImmo\API\Haus>")
     * @SkipWhenEmpty
     */
    protected array $haus = [];

    /**
     * @XmlList(inline = true, entry = "grundstueck")
     * @Type("array<Ujamii\OpenImmo\API\Grundstueck>")
     * @SkipWhenEmpty
     */
    protected array $grundstueck = [];

    /**
     * @XmlList(inline = true, entry = "buero_praxen")
     * @Type("array<Ujamii\OpenImmo\API\BueroPraxen>")
     * @SkipWhenEmpty
     */
    protected array $bueroPraxen = [];

    /**
     * @XmlList(inline = true, entry = "einzelhandel")
     * @Type("array<Ujamii\OpenImmo\API\Einzelhandel>")
     * @SkipWhenEmpty
     */
    protected array $einzelhandel = [];

    /**
     * @XmlList(inline = true, entry = "gastgewerbe")
     * @Type("array<Ujamii\OpenImmo\API\Gastgewerbe>")
     * @SkipWhenEmpty
     */
    protected array $gastgewerbe = [];

    /**
     * @XmlList(inline = true, entry = "hallen_lager_prod")
     * @Type("array<Ujamii\OpenImmo\API\HallenLagerProd>")
     * @SkipWhenEmpty
     */
    protected array $hallenLagerProd = [];

    /**
     * @XmlList(inline = true, entry = "land_und_forstwirtschaft")
     * @Type("array<Ujamii\OpenImmo\API\LandUndForstwirtschaft>")
     * @SkipWhenEmpty
     */
    protected array $landUndForstwirtschaft = [];

    /**
     * @XmlList(inline = true, entry = "parken")
     * @Type("array<Ujamii\OpenImmo\API\Parken>")
     * @SkipWhenEmpty
     */
    protected array $parken = [];

    /**
     * @XmlList(inline = true, entry = "sonstige")
     * @Type("array<Ujamii\OpenImmo\API\Sonstige>")
     * @SkipWhenEmpty
     */
    protected array $sonstige = [];

    /**
     * @XmlList(inline = true, entry = "freizeitimmobilie_gewerblich")
     * @Type("array<Ujamii\OpenImmo\API\FreizeitimmobilieGewerblich>")
     * @SkipWhenEmpty
     */
    protected array $freizeitimmobilieGewerblich = [];

    /**
     * @XmlList(inline = true, entry = "zinshaus_renditeobjekt")
     * @Type("array<Ujamii\OpenImmo\API\ZinshausRenditeobjekt>")
     * @SkipWhenEmpty
     */
    protected array $zinshausRenditeobjekt = [];

    /**
     * @XmlList(inline = true, entry = "objektart_zusatz")
     * @Type("array<string>")
     * @SkipWhenEmpty
     */
    protected array $objektartZusatz = [];

    /**
     * Returns array of array
     */
    public function getZimmer(): array
    {
        return $this->zimmer ?? [];
    }

    public function setZimmer(array $zimmer): Objektart
    {
        $this->zimmer = $zimmer;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getWohnung(): array
    {
        return $this->wohnung ?? [];
    }

    public function setWohnung(array $wohnung): Objektart
    {
        $this->wohnung = $wohnung;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getHaus(): array
    {
        return $this->haus ?? [];
    }

    public function setHaus(array $haus): Objektart
    {
        $this->haus = $haus;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getGrundstueck(): array
    {
        return $this->grundstueck ?? [];
    }

    public function setGrundstueck(array $grundstueck): Objektart
    {
        $this->grundstueck = $grundstueck;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getBueroPraxen(): array
    {
        return $this->bueroPraxen ?? [];
    }

    public function setBueroPraxen(array $bueroPraxen): Objektart
    {
        $this->bueroPraxen = $bueroPraxen;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getEinzelhandel(): array
    {
        return $this->einzelhandel ?? [];
    }

    public function setEinzelhandel(array $einzelhandel): Objektart
    {
        $this->einzelhandel = $einzelhandel;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getGastgewerbe(): array
    {
        return $this->gastgewerbe ?? [];
    }

    public function setGastgewerbe(array $gastgewerbe): Objektart
    {
        $this->gastgewerbe = $gastgewerbe;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getHallenLagerProd(): array
    {
        return $this->hallenLagerProd ?? [];
    }

    public function setHallenLagerProd(array $hallenLagerProd): Objektart
    {
        $this->hallenLagerProd = $hallenLagerProd;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getLandUndForstwirtschaft(): array
    {
        return $this->landUndForstwirtschaft ?? [];
    }

    public function setLandUndForstwirtschaft(array $landUndForstwirtschaft): Objektart
    {
        $this->landUndForstwirtschaft = $landUndForstwirtschaft;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getParken(): array
    {
        return $this->parken ?? [];
    }

    public function setParken(array $parken): Objektart
    {
        $this->parken = $parken;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getSonstige(): array
    {
        return $this->sonstige ?? [];
    }

    public function setSonstige(array $sonstige): Objektart
    {
        $this->sonstige = $sonstige;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getFreizeitimmobilieGewerblich(): array
    {
        return $this->freizeitimmobilieGewerblich ?? [];
    }

    public function setFreizeitimmobilieGewerblich(array $freizeitimmobilieGewerblich): Objektart
    {
        $this->freizeitimmobilieGewerblich = $freizeitimmobilieGewerblich;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getZinshausRenditeobjekt(): array
    {
        return $this->zinshausRenditeobjekt ?? [];
    }

    public function setZinshausRenditeobjekt(array $zinshausRenditeobjekt): Objektart
    {
        $this->zinshausRenditeobjekt = $zinshausRenditeobjekt;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getObjektartZusatz(): array
    {
        return $this->objektartZusatz ?? [];
    }

    public function setObjektartZusatz(array $objektartZusatz): Objektart
    {
        $this->objektartZusatz = $objektartZusatz;
        return $this;
    }
}
