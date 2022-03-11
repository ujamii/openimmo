<?php

namespace Ujamii\OpenImmo\API;

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
    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $plz = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $ort = null;

    /**
     * @Type("Ujamii\OpenImmo\API\Geokoordinaten")
     * @var ?\Ujamii\OpenImmo\API\Geokoordinaten
     */
    protected ?Geokoordinaten $geokoordinaten = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $strasse = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $hausnummer = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $bundesland = null;

    /**
     * @Type("Ujamii\OpenImmo\API\Land")
     * @var ?\Ujamii\OpenImmo\API\Land
     */
    protected ?Land $land = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $gemeindecode = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $flur = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $flurstueck = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $gemarkung = null;

    /**
     * @Type("int")
     * @var ?int
     * Minimum value (inclusive): -2147483648
     * Maximum value (inclusive): 2147483647
     */
    protected ?int $etage = null;

    /**
     * @Type("int")
     * @var ?int
     * Minimum value (inclusive): -2147483648
     * Maximum value (inclusive): 2147483647
     */
    protected ?int $anzahlEtagen = null;

    /**
     * @Type("Ujamii\OpenImmo\API\LageImBau")
     * @var ?\Ujamii\OpenImmo\API\LageImBau
     */
    protected ?LageImBau $lageImBau = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $wohnungsnr = null;

    /**
     * @Type("Ujamii\OpenImmo\API\LageGebiet")
     * @var ?\Ujamii\OpenImmo\API\LageGebiet
     */
    protected ?LageGebiet $lageGebiet = null;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $regionalerZusatz = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $kartenMakro = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $kartenMikro = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $virtuelletour = null;

    /**
     * @Type("bool")
     * @var ?bool
     */
    protected ?bool $luftbildern = null;

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>")
     * @var ?\Ujamii\OpenImmo\API\UserDefinedSimplefield[]
     */
    protected ?array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>")
     * @var ?\Ujamii\OpenImmo\API\UserDefinedAnyfield[]
     */
    protected ?array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>")
     * @var ?\Ujamii\OpenImmo\API\UserDefinedExtend[]
     */
    protected ?array $userDefinedExtend = [];

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

    public function getUserDefinedSimplefield(): ?array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(?array $userDefinedSimplefield): Geo
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    public function getUserDefinedAnyfield(): ?array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(?array $userDefinedAnyfield): Geo
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    public function getUserDefinedExtend(): ?array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(?array $userDefinedExtend): Geo
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
