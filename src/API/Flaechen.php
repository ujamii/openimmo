<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Flaechen
 *
 * @XmlRoot("flaechen")
 */
class Flaechen
{
    /** @Type("float") */
    protected ?float $wohnflaeche = null;

    /** @Type("float") */
    protected ?float $nutzflaeche = null;

    /** @Type("float") */
    protected ?float $gesamtflaeche = null;

    /** @Type("float") */
    protected ?float $ladenflaeche = null;

    /** @Type("float") */
    protected ?float $lagerflaeche = null;

    /** @Type("float") */
    protected ?float $verkaufsflaeche = null;

    /** @Type("float") */
    protected ?float $freiflaeche = null;

    /** @Type("float") */
    protected ?float $bueroflaeche = null;

    /** @Type("float") */
    protected ?float $bueroteilflaeche = null;

    /** @Type("float") */
    protected ?float $fensterfront = null;

    /** @Type("float") */
    protected ?float $verwaltungsflaeche = null;

    /** @Type("float") */
    protected ?float $gastroflaeche = null;

    /** @Type("string") */
    protected ?string $grz = null;

    /** @Type("string") */
    protected ?string $gfz = null;

    /** @Type("string") */
    protected ?string $bmz = null;

    /** @Type("string") */
    protected ?string $bgf = null;

    /** @Type("float") */
    protected ?float $grundstuecksflaeche = null;

    /** @Type("float") */
    protected ?float $sonstflaeche = null;

    /** @Type("float") */
    protected ?float $anzahlZimmer = null;

    /** @Type("float") */
    protected ?float $anzahlSchlafzimmer = null;

    /** @Type("float") */
    protected ?float $anzahlBadezimmer = null;

    /** @Type("float") */
    protected ?float $anzahlSepWc = null;

    /** @Type("float") */
    protected ?float $anzahlBalkone = null;

    /** @Type("float") */
    protected ?float $anzahlTerrassen = null;

    /** @Type("float") */
    protected ?float $anzahlLogia = null;

    /** @Type("float") */
    protected ?float $balkonTerrasseFlaeche = null;

    /** @Type("float") */
    protected ?float $anzahlWohnSchlafzimmer = null;

    /** @Type("float") */
    protected ?float $gartenflaeche = null;

    /** @Type("float") */
    protected ?float $kellerflaeche = null;

    /** @Type("float") */
    protected ?float $fensterfrontQm = null;

    /** @Type("float") */
    protected ?float $grundstuecksfront = null;

    /** @Type("float") */
    protected ?float $dachbodenflaeche = null;

    /** @Type("float") */
    protected ?float $teilbarAb = null;

    /** @Type("float") */
    protected ?float $beheizbareFlaeche = null;

    /**
     * @Type("int")
     * Minimum value (inclusive): 1
     */
    protected ?int $anzahlStellplaetze = null;

    /** @Type("float") */
    protected ?float $plaetzeGastraum = null;

    /** @Type("float") */
    protected ?float $anzahlBetten = null;

    /** @Type("float") */
    protected ?float $anzahlTagungsraeume = null;

    /** @Type("float") */
    protected ?float $vermietbareFlaeche = null;

    /** @Type("float") */
    protected ?float $anzahlWohneinheiten = null;

    /** @Type("float") */
    protected ?float $anzahlGewerbeeinheiten = null;

    /** @Type("bool") */
    protected ?bool $einliegerwohnung = null;

    /** @Type("float") */
    protected ?float $kubatur = null;

    /** @Type("float") */
    protected ?float $ausnuetzungsziffer = null;

    /** @Type("float") */
    protected ?float $flaechevon = null;

    /** @Type("float") */
    protected ?float $flaechebis = null;

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>")
     * @SkipWhenEmpty
     */
    protected array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>")
     * @SkipWhenEmpty
     */
    protected array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>")
     * @SkipWhenEmpty
     */
    protected array $userDefinedExtend = [];

    public function getWohnflaeche(): ?float
    {
        return $this->wohnflaeche;
    }

    public function setWohnflaeche(?float $wohnflaeche): Flaechen
    {
        $this->wohnflaeche = $wohnflaeche;
        return $this;
    }

    public function getNutzflaeche(): ?float
    {
        return $this->nutzflaeche;
    }

    public function setNutzflaeche(?float $nutzflaeche): Flaechen
    {
        $this->nutzflaeche = $nutzflaeche;
        return $this;
    }

    public function getGesamtflaeche(): ?float
    {
        return $this->gesamtflaeche;
    }

    public function setGesamtflaeche(?float $gesamtflaeche): Flaechen
    {
        $this->gesamtflaeche = $gesamtflaeche;
        return $this;
    }

    public function getLadenflaeche(): ?float
    {
        return $this->ladenflaeche;
    }

    public function setLadenflaeche(?float $ladenflaeche): Flaechen
    {
        $this->ladenflaeche = $ladenflaeche;
        return $this;
    }

    public function getLagerflaeche(): ?float
    {
        return $this->lagerflaeche;
    }

    public function setLagerflaeche(?float $lagerflaeche): Flaechen
    {
        $this->lagerflaeche = $lagerflaeche;
        return $this;
    }

    public function getVerkaufsflaeche(): ?float
    {
        return $this->verkaufsflaeche;
    }

    public function setVerkaufsflaeche(?float $verkaufsflaeche): Flaechen
    {
        $this->verkaufsflaeche = $verkaufsflaeche;
        return $this;
    }

    public function getFreiflaeche(): ?float
    {
        return $this->freiflaeche;
    }

    public function setFreiflaeche(?float $freiflaeche): Flaechen
    {
        $this->freiflaeche = $freiflaeche;
        return $this;
    }

    public function getBueroflaeche(): ?float
    {
        return $this->bueroflaeche;
    }

    public function setBueroflaeche(?float $bueroflaeche): Flaechen
    {
        $this->bueroflaeche = $bueroflaeche;
        return $this;
    }

    public function getBueroteilflaeche(): ?float
    {
        return $this->bueroteilflaeche;
    }

    public function setBueroteilflaeche(?float $bueroteilflaeche): Flaechen
    {
        $this->bueroteilflaeche = $bueroteilflaeche;
        return $this;
    }

    public function getFensterfront(): ?float
    {
        return $this->fensterfront;
    }

    public function setFensterfront(?float $fensterfront): Flaechen
    {
        $this->fensterfront = $fensterfront;
        return $this;
    }

    public function getVerwaltungsflaeche(): ?float
    {
        return $this->verwaltungsflaeche;
    }

    public function setVerwaltungsflaeche(?float $verwaltungsflaeche): Flaechen
    {
        $this->verwaltungsflaeche = $verwaltungsflaeche;
        return $this;
    }

    public function getGastroflaeche(): ?float
    {
        return $this->gastroflaeche;
    }

    public function setGastroflaeche(?float $gastroflaeche): Flaechen
    {
        $this->gastroflaeche = $gastroflaeche;
        return $this;
    }

    public function getGrz(): ?string
    {
        return $this->grz;
    }

    public function setGrz(?string $grz): Flaechen
    {
        $this->grz = $grz;
        return $this;
    }

    public function getGfz(): ?string
    {
        return $this->gfz;
    }

    public function setGfz(?string $gfz): Flaechen
    {
        $this->gfz = $gfz;
        return $this;
    }

    public function getBmz(): ?string
    {
        return $this->bmz;
    }

    public function setBmz(?string $bmz): Flaechen
    {
        $this->bmz = $bmz;
        return $this;
    }

    public function getBgf(): ?string
    {
        return $this->bgf;
    }

    public function setBgf(?string $bgf): Flaechen
    {
        $this->bgf = $bgf;
        return $this;
    }

    public function getGrundstuecksflaeche(): ?float
    {
        return $this->grundstuecksflaeche;
    }

    public function setGrundstuecksflaeche(?float $grundstuecksflaeche): Flaechen
    {
        $this->grundstuecksflaeche = $grundstuecksflaeche;
        return $this;
    }

    public function getSonstflaeche(): ?float
    {
        return $this->sonstflaeche;
    }

    public function setSonstflaeche(?float $sonstflaeche): Flaechen
    {
        $this->sonstflaeche = $sonstflaeche;
        return $this;
    }

    public function getAnzahlZimmer(): ?float
    {
        return $this->anzahlZimmer;
    }

    public function setAnzahlZimmer(?float $anzahlZimmer): Flaechen
    {
        $this->anzahlZimmer = $anzahlZimmer;
        return $this;
    }

    public function getAnzahlSchlafzimmer(): ?float
    {
        return $this->anzahlSchlafzimmer;
    }

    public function setAnzahlSchlafzimmer(?float $anzahlSchlafzimmer): Flaechen
    {
        $this->anzahlSchlafzimmer = $anzahlSchlafzimmer;
        return $this;
    }

    public function getAnzahlBadezimmer(): ?float
    {
        return $this->anzahlBadezimmer;
    }

    public function setAnzahlBadezimmer(?float $anzahlBadezimmer): Flaechen
    {
        $this->anzahlBadezimmer = $anzahlBadezimmer;
        return $this;
    }

    public function getAnzahlSepWc(): ?float
    {
        return $this->anzahlSepWc;
    }

    public function setAnzahlSepWc(?float $anzahlSepWc): Flaechen
    {
        $this->anzahlSepWc = $anzahlSepWc;
        return $this;
    }

    public function getAnzahlBalkone(): ?float
    {
        return $this->anzahlBalkone;
    }

    public function setAnzahlBalkone(?float $anzahlBalkone): Flaechen
    {
        $this->anzahlBalkone = $anzahlBalkone;
        return $this;
    }

    public function getAnzahlTerrassen(): ?float
    {
        return $this->anzahlTerrassen;
    }

    public function setAnzahlTerrassen(?float $anzahlTerrassen): Flaechen
    {
        $this->anzahlTerrassen = $anzahlTerrassen;
        return $this;
    }

    public function getAnzahlLogia(): ?float
    {
        return $this->anzahlLogia;
    }

    public function setAnzahlLogia(?float $anzahlLogia): Flaechen
    {
        $this->anzahlLogia = $anzahlLogia;
        return $this;
    }

    public function getBalkonTerrasseFlaeche(): ?float
    {
        return $this->balkonTerrasseFlaeche;
    }

    public function setBalkonTerrasseFlaeche(?float $balkonTerrasseFlaeche): Flaechen
    {
        $this->balkonTerrasseFlaeche = $balkonTerrasseFlaeche;
        return $this;
    }

    public function getAnzahlWohnSchlafzimmer(): ?float
    {
        return $this->anzahlWohnSchlafzimmer;
    }

    public function setAnzahlWohnSchlafzimmer(?float $anzahlWohnSchlafzimmer): Flaechen
    {
        $this->anzahlWohnSchlafzimmer = $anzahlWohnSchlafzimmer;
        return $this;
    }

    public function getGartenflaeche(): ?float
    {
        return $this->gartenflaeche;
    }

    public function setGartenflaeche(?float $gartenflaeche): Flaechen
    {
        $this->gartenflaeche = $gartenflaeche;
        return $this;
    }

    public function getKellerflaeche(): ?float
    {
        return $this->kellerflaeche;
    }

    public function setKellerflaeche(?float $kellerflaeche): Flaechen
    {
        $this->kellerflaeche = $kellerflaeche;
        return $this;
    }

    public function getFensterfrontQm(): ?float
    {
        return $this->fensterfrontQm;
    }

    public function setFensterfrontQm(?float $fensterfrontQm): Flaechen
    {
        $this->fensterfrontQm = $fensterfrontQm;
        return $this;
    }

    public function getGrundstuecksfront(): ?float
    {
        return $this->grundstuecksfront;
    }

    public function setGrundstuecksfront(?float $grundstuecksfront): Flaechen
    {
        $this->grundstuecksfront = $grundstuecksfront;
        return $this;
    }

    public function getDachbodenflaeche(): ?float
    {
        return $this->dachbodenflaeche;
    }

    public function setDachbodenflaeche(?float $dachbodenflaeche): Flaechen
    {
        $this->dachbodenflaeche = $dachbodenflaeche;
        return $this;
    }

    public function getTeilbarAb(): ?float
    {
        return $this->teilbarAb;
    }

    public function setTeilbarAb(?float $teilbarAb): Flaechen
    {
        $this->teilbarAb = $teilbarAb;
        return $this;
    }

    public function getBeheizbareFlaeche(): ?float
    {
        return $this->beheizbareFlaeche;
    }

    public function setBeheizbareFlaeche(?float $beheizbareFlaeche): Flaechen
    {
        $this->beheizbareFlaeche = $beheizbareFlaeche;
        return $this;
    }

    public function getAnzahlStellplaetze(): ?int
    {
        return $this->anzahlStellplaetze;
    }

    public function setAnzahlStellplaetze(?int $anzahlStellplaetze): Flaechen
    {
        $this->anzahlStellplaetze = $anzahlStellplaetze;
        return $this;
    }

    public function getPlaetzeGastraum(): ?float
    {
        return $this->plaetzeGastraum;
    }

    public function setPlaetzeGastraum(?float $plaetzeGastraum): Flaechen
    {
        $this->plaetzeGastraum = $plaetzeGastraum;
        return $this;
    }

    public function getAnzahlBetten(): ?float
    {
        return $this->anzahlBetten;
    }

    public function setAnzahlBetten(?float $anzahlBetten): Flaechen
    {
        $this->anzahlBetten = $anzahlBetten;
        return $this;
    }

    public function getAnzahlTagungsraeume(): ?float
    {
        return $this->anzahlTagungsraeume;
    }

    public function setAnzahlTagungsraeume(?float $anzahlTagungsraeume): Flaechen
    {
        $this->anzahlTagungsraeume = $anzahlTagungsraeume;
        return $this;
    }

    public function getVermietbareFlaeche(): ?float
    {
        return $this->vermietbareFlaeche;
    }

    public function setVermietbareFlaeche(?float $vermietbareFlaeche): Flaechen
    {
        $this->vermietbareFlaeche = $vermietbareFlaeche;
        return $this;
    }

    public function getAnzahlWohneinheiten(): ?float
    {
        return $this->anzahlWohneinheiten;
    }

    public function setAnzahlWohneinheiten(?float $anzahlWohneinheiten): Flaechen
    {
        $this->anzahlWohneinheiten = $anzahlWohneinheiten;
        return $this;
    }

    public function getAnzahlGewerbeeinheiten(): ?float
    {
        return $this->anzahlGewerbeeinheiten;
    }

    public function setAnzahlGewerbeeinheiten(?float $anzahlGewerbeeinheiten): Flaechen
    {
        $this->anzahlGewerbeeinheiten = $anzahlGewerbeeinheiten;
        return $this;
    }

    public function getEinliegerwohnung(): ?bool
    {
        return $this->einliegerwohnung;
    }

    public function setEinliegerwohnung(?bool $einliegerwohnung): Flaechen
    {
        $this->einliegerwohnung = $einliegerwohnung;
        return $this;
    }

    public function getKubatur(): ?float
    {
        return $this->kubatur;
    }

    public function setKubatur(?float $kubatur): Flaechen
    {
        $this->kubatur = $kubatur;
        return $this;
    }

    public function getAusnuetzungsziffer(): ?float
    {
        return $this->ausnuetzungsziffer;
    }

    public function setAusnuetzungsziffer(?float $ausnuetzungsziffer): Flaechen
    {
        $this->ausnuetzungsziffer = $ausnuetzungsziffer;
        return $this;
    }

    public function getFlaechevon(): ?float
    {
        return $this->flaechevon;
    }

    public function setFlaechevon(?float $flaechevon): Flaechen
    {
        $this->flaechevon = $flaechevon;
        return $this;
    }

    public function getFlaechebis(): ?float
    {
        return $this->flaechebis;
    }

    public function setFlaechebis(?float $flaechebis): Flaechen
    {
        $this->flaechebis = $flaechebis;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Flaechen
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Flaechen
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Flaechen
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
