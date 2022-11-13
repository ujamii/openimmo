<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geo
 *
 * @XmlRoot("geo")
 */
class Geo
{
    /** @Type("string") */
    public ?string $plz = null;

    /** @Type("string") */
    public ?string $ort = null;

    /** @Type("Ujamii\OpenImmo\API\Geokoordinaten") */
    public ?Geokoordinaten $geokoordinaten = null;

    /** @Type("string") */
    public ?string $strasse = null;

    /** @Type("string") */
    public ?string $hausnummer = null;

    /** @Type("string") */
    public ?string $bundesland = null;

    /** @Type("Ujamii\OpenImmo\API\Land") */
    public ?Land $land = null;

    /** @Type("string") */
    public ?string $gemeindecode = null;

    /** @Type("string") */
    public ?string $flur = null;

    /** @Type("string") */
    public ?string $flurstueck = null;

    /** @Type("string") */
    public ?string $gemarkung = null;

    /**
     * @Type("int")
     * Minimum value (inclusive): -2147483648
     * Maximum value (inclusive): 2147483647
     */
    public ?int $etage = null;

    /**
     * @Type("int")
     * Minimum value (inclusive): -2147483648
     * Maximum value (inclusive): 2147483647
     */
    public ?int $anzahlEtagen = null;

    /** @Type("Ujamii\OpenImmo\API\LageImBau") */
    public ?LageImBau $lageImBau = null;

    /** @Type("string") */
    public ?string $wohnungsnr = null;

    /** @Type("Ujamii\OpenImmo\API\LageGebiet") */
    public ?LageGebiet $lageGebiet = null;

    /** @Type("string") */
    public ?string $regionalerZusatz = null;

    /** @Type("bool") */
    public ?bool $kartenMakro = null;

    /** @Type("bool") */
    public ?bool $kartenMikro = null;

    /** @Type("bool") */
    public ?bool $virtuelletour = null;

    /** @Type("bool") */
    public ?bool $luftbildern = null;

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>")
     * @SkipWhenEmpty
     */
    public array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>")
     * @SkipWhenEmpty
     */
    public array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>")
     * @SkipWhenEmpty
     */
    public array $userDefinedExtend = [];

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function setPlz(?string $plz): Geo
    {
        $this->plz = $plz;
        return $this;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(?string $ort): Geo
    {
        $this->ort = $ort;
        return $this;
    }

    public function getGeokoordinaten(): ?Geokoordinaten
    {
        return $this->geokoordinaten;
    }

    public function setGeokoordinaten(?Geokoordinaten $geokoordinaten): Geo
    {
        $this->geokoordinaten = $geokoordinaten;
        return $this;
    }

    public function getStrasse(): ?string
    {
        return $this->strasse;
    }

    public function setStrasse(?string $strasse): Geo
    {
        $this->strasse = $strasse;
        return $this;
    }

    public function getHausnummer(): ?string
    {
        return $this->hausnummer;
    }

    public function setHausnummer(?string $hausnummer): Geo
    {
        $this->hausnummer = $hausnummer;
        return $this;
    }

    public function getBundesland(): ?string
    {
        return $this->bundesland;
    }

    public function setBundesland(?string $bundesland): Geo
    {
        $this->bundesland = $bundesland;
        return $this;
    }

    public function getLand(): ?Land
    {
        return $this->land;
    }

    public function setLand(?Land $land): Geo
    {
        $this->land = $land;
        return $this;
    }

    public function getGemeindecode(): ?string
    {
        return $this->gemeindecode;
    }

    public function setGemeindecode(?string $gemeindecode): Geo
    {
        $this->gemeindecode = $gemeindecode;
        return $this;
    }

    public function getFlur(): ?string
    {
        return $this->flur;
    }

    public function setFlur(?string $flur): Geo
    {
        $this->flur = $flur;
        return $this;
    }

    public function getFlurstueck(): ?string
    {
        return $this->flurstueck;
    }

    public function setFlurstueck(?string $flurstueck): Geo
    {
        $this->flurstueck = $flurstueck;
        return $this;
    }

    public function getGemarkung(): ?string
    {
        return $this->gemarkung;
    }

    public function setGemarkung(?string $gemarkung): Geo
    {
        $this->gemarkung = $gemarkung;
        return $this;
    }

    public function getEtage(): ?int
    {
        return $this->etage;
    }

    public function setEtage(?int $etage): Geo
    {
        $this->etage = $etage;
        return $this;
    }

    public function getAnzahlEtagen(): ?int
    {
        return $this->anzahlEtagen;
    }

    public function setAnzahlEtagen(?int $anzahlEtagen): Geo
    {
        $this->anzahlEtagen = $anzahlEtagen;
        return $this;
    }

    public function getLageImBau(): ?LageImBau
    {
        return $this->lageImBau;
    }

    public function setLageImBau(?LageImBau $lageImBau): Geo
    {
        $this->lageImBau = $lageImBau;
        return $this;
    }

    public function getWohnungsnr(): ?string
    {
        return $this->wohnungsnr;
    }

    public function setWohnungsnr(?string $wohnungsnr): Geo
    {
        $this->wohnungsnr = $wohnungsnr;
        return $this;
    }

    public function getLageGebiet(): ?LageGebiet
    {
        return $this->lageGebiet;
    }

    public function setLageGebiet(?LageGebiet $lageGebiet): Geo
    {
        $this->lageGebiet = $lageGebiet;
        return $this;
    }

    public function getRegionalerZusatz(): ?string
    {
        return $this->regionalerZusatz;
    }

    public function setRegionalerZusatz(?string $regionalerZusatz): Geo
    {
        $this->regionalerZusatz = $regionalerZusatz;
        return $this;
    }

    public function getKartenMakro(): ?bool
    {
        return $this->kartenMakro;
    }

    public function setKartenMakro(?bool $kartenMakro): Geo
    {
        $this->kartenMakro = $kartenMakro;
        return $this;
    }

    public function getKartenMikro(): ?bool
    {
        return $this->kartenMikro;
    }

    public function setKartenMikro(?bool $kartenMikro): Geo
    {
        $this->kartenMikro = $kartenMikro;
        return $this;
    }

    public function getVirtuelletour(): ?bool
    {
        return $this->virtuelletour;
    }

    public function setVirtuelletour(?bool $virtuelletour): Geo
    {
        $this->virtuelletour = $virtuelletour;
        return $this;
    }

    public function getLuftbildern(): ?bool
    {
        return $this->luftbildern;
    }

    public function setLuftbildern(?bool $luftbildern): Geo
    {
        $this->luftbildern = $luftbildern;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Geo
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield ?? [];
    }

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Geo
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend ?? [];
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Geo
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
