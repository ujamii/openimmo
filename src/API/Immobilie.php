<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Immobilie
 * Angaben einer einzelnen Immobile
 * @XmlRoot("immobilie")
 */
class Immobilie
{
    /** @Type("Ujamii\OpenImmo\API\Objektkategorie") */
    protected ?Objektkategorie $objektkategorie = null;

    /** @Type("Ujamii\OpenImmo\API\Geo") */
    protected ?Geo $geo = null;

    /** @Type("Ujamii\OpenImmo\API\Kontaktperson") */
    protected ?Kontaktperson $kontaktperson = null;

    /**
     * @XmlList(inline = true, entry = "weitere_adresse")
     * @Type("array<Ujamii\OpenImmo\API\WeitereAdresse>")
     * @SkipWhenEmpty
     */
    protected array $weitereAdresse = [];

    /** @Type("Ujamii\OpenImmo\API\Preise") */
    protected ?Preise $preise = null;

    /** @Type("Ujamii\OpenImmo\API\Bieterverfahren") */
    protected ?Bieterverfahren $bieterverfahren = null;

    /** @Type("Ujamii\OpenImmo\API\Versteigerung") */
    protected ?Versteigerung $versteigerung = null;

    /** @Type("Ujamii\OpenImmo\API\Flaechen") */
    protected ?Flaechen $flaechen = null;

    /** @Type("Ujamii\OpenImmo\API\Ausstattung") */
    protected ?Ausstattung $ausstattung = null;

    /** @Type("Ujamii\OpenImmo\API\ZustandAngaben") */
    protected ?ZustandAngaben $zustandAngaben = null;

    /** @Type("Ujamii\OpenImmo\API\Bewertung") */
    protected ?Bewertung $bewertung = null;

    /** @Type("Ujamii\OpenImmo\API\Infrastruktur") */
    protected ?Infrastruktur $infrastruktur = null;

    /** @Type("Ujamii\OpenImmo\API\Freitexte") */
    protected ?Freitexte $freitexte = null;

    /** @Type("Ujamii\OpenImmo\API\Anhaenge") */
    protected ?Anhaenge $anhaenge = null;

    /** @Type("Ujamii\OpenImmo\API\VerwaltungObjekt") */
    protected ?VerwaltungObjekt $verwaltungObjekt = null;

    /** @Type("Ujamii\OpenImmo\API\VerwaltungTechn") */
    protected ?VerwaltungTechn $verwaltungTechn = null;

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

    public function getObjektkategorie(): ?Objektkategorie
    {
        return $this->objektkategorie;
    }

    public function setObjektkategorie(?Objektkategorie $objektkategorie): Immobilie
    {
        $this->objektkategorie = $objektkategorie;
        return $this;
    }

    public function getGeo(): ?Geo
    {
        return $this->geo;
    }

    public function setGeo(?Geo $geo): Immobilie
    {
        $this->geo = $geo;
        return $this;
    }

    public function getKontaktperson(): ?Kontaktperson
    {
        return $this->kontaktperson;
    }

    public function setKontaktperson(?Kontaktperson $kontaktperson): Immobilie
    {
        $this->kontaktperson = $kontaktperson;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getWeitereAdresse(): array
    {
        return $this->weitereAdresse;
    }

    public function setWeitereAdresse(array $weitereAdresse): Immobilie
    {
        $this->weitereAdresse = $weitereAdresse;
        return $this;
    }

    public function getPreise(): ?Preise
    {
        return $this->preise;
    }

    public function setPreise(?Preise $preise): Immobilie
    {
        $this->preise = $preise;
        return $this;
    }

    public function getBieterverfahren(): ?Bieterverfahren
    {
        return $this->bieterverfahren;
    }

    public function setBieterverfahren(?Bieterverfahren $bieterverfahren): Immobilie
    {
        $this->bieterverfahren = $bieterverfahren;
        return $this;
    }

    public function getVersteigerung(): ?Versteigerung
    {
        return $this->versteigerung;
    }

    public function setVersteigerung(?Versteigerung $versteigerung): Immobilie
    {
        $this->versteigerung = $versteigerung;
        return $this;
    }

    public function getFlaechen(): ?Flaechen
    {
        return $this->flaechen;
    }

    public function setFlaechen(?Flaechen $flaechen): Immobilie
    {
        $this->flaechen = $flaechen;
        return $this;
    }

    public function getAusstattung(): ?Ausstattung
    {
        return $this->ausstattung;
    }

    public function setAusstattung(?Ausstattung $ausstattung): Immobilie
    {
        $this->ausstattung = $ausstattung;
        return $this;
    }

    public function getZustandAngaben(): ?ZustandAngaben
    {
        return $this->zustandAngaben;
    }

    public function setZustandAngaben(?ZustandAngaben $zustandAngaben): Immobilie
    {
        $this->zustandAngaben = $zustandAngaben;
        return $this;
    }

    public function getBewertung(): ?Bewertung
    {
        return $this->bewertung;
    }

    public function setBewertung(?Bewertung $bewertung): Immobilie
    {
        $this->bewertung = $bewertung;
        return $this;
    }

    public function getInfrastruktur(): ?Infrastruktur
    {
        return $this->infrastruktur;
    }

    public function setInfrastruktur(?Infrastruktur $infrastruktur): Immobilie
    {
        $this->infrastruktur = $infrastruktur;
        return $this;
    }

    public function getFreitexte(): ?Freitexte
    {
        return $this->freitexte;
    }

    public function setFreitexte(?Freitexte $freitexte): Immobilie
    {
        $this->freitexte = $freitexte;
        return $this;
    }

    public function getAnhaenge(): ?Anhaenge
    {
        return $this->anhaenge;
    }

    public function setAnhaenge(?Anhaenge $anhaenge): Immobilie
    {
        $this->anhaenge = $anhaenge;
        return $this;
    }

    public function getVerwaltungObjekt(): ?VerwaltungObjekt
    {
        return $this->verwaltungObjekt;
    }

    public function setVerwaltungObjekt(?VerwaltungObjekt $verwaltungObjekt): Immobilie
    {
        $this->verwaltungObjekt = $verwaltungObjekt;
        return $this;
    }

    public function getVerwaltungTechn(): ?VerwaltungTechn
    {
        return $this->verwaltungTechn;
    }

    public function setVerwaltungTechn(?VerwaltungTechn $verwaltungTechn): Immobilie
    {
        $this->verwaltungTechn = $verwaltungTechn;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Immobilie
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Immobilie
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

    public function setUserDefinedExtend(array $userDefinedExtend): Immobilie
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
