<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausstattung
 *
 * @XmlRoot("ausstattung")
 */
class Ausstattung
{
    public const AUSSTATT_KATEGORIE_STANDARD = 'STANDARD';
    public const AUSSTATT_KATEGORIE_GEHOBEN = 'GEHOBEN';
    public const AUSSTATT_KATEGORIE_LUXUS = 'LUXUS';

    /**
     * @Type("string")
     * @see AUSSTATT_KATEGORIE_* constants
     */
    public string $ausstattKategorie = '';

    /** @Type("bool") */
    public ?bool $wgGeeignet = null;

    /** @Type("bool") */
    public ?bool $raeumeVeraenderbar = null;

    /** @Type("Ujamii\OpenImmo\API\Bad") */
    public ?Bad $bad = null;

    /** @Type("Ujamii\OpenImmo\API\Kueche") */
    public ?Kueche $kueche = null;

    /** @Type("Ujamii\OpenImmo\API\Boden") */
    public ?Boden $boden = null;

    /** @Type("bool") */
    public ?bool $kamin = null;

    /** @Type("Ujamii\OpenImmo\API\Heizungsart") */
    public ?Heizungsart $heizungsart = null;

    /** @Type("Ujamii\OpenImmo\API\Befeuerung") */
    public ?Befeuerung $befeuerung = null;

    /** @Type("bool") */
    public ?bool $klimatisiert = null;

    /** @Type("Ujamii\OpenImmo\API\Fahrstuhl") */
    public ?Fahrstuhl $fahrstuhl = null;

    /**
     * @XmlList(inline = true, entry = "stellplatzart")
     * @Type("array<Ujamii\OpenImmo\API\Stellplatzart>")
     * @SkipWhenEmpty
     */
    public array $stellplatzart = [];

    /** @Type("bool") */
    public ?bool $gartennutzung = null;

    /** @Type("Ujamii\OpenImmo\API\AusrichtBalkonTerrasse") */
    public ?AusrichtBalkonTerrasse $ausrichtBalkonTerrasse = null;

    /** @Type("Ujamii\OpenImmo\API\Moebliert") */
    public ?Moebliert $moebliert = null;

    /** @Type("bool") */
    public ?bool $rollstuhlgerecht = null;

    /** @Type("bool") */
    public ?bool $kabelSatTv = null;

    /** @Type("bool") */
    public ?bool $dvbt = null;

    /** @Type("bool") */
    public ?bool $barrierefrei = null;

    /** @Type("bool") */
    public ?bool $sauna = null;

    /** @Type("bool") */
    public ?bool $swimmingpool = null;

    /** @Type("bool") */
    public ?bool $waschTrockenraum = null;

    /** @Type("bool") */
    public ?bool $wintergarten = null;

    /** @Type("bool") */
    public ?bool $dvVerkabelung = null;

    /** @Type("bool") */
    public ?bool $rampe = null;

    /** @Type("bool") */
    public ?bool $hebebuehne = null;

    /** @Type("bool") */
    public ?bool $kran = null;

    /** @Type("bool") */
    public ?bool $gastterrasse = null;

    /** @Type("string") */
    public ?string $stromanschlusswert = null;

    /** @Type("bool") */
    public ?bool $kantineCafeteria = null;

    /** @Type("bool") */
    public ?bool $teekueche = null;

    /** @Type("float") */
    public ?float $hallenhoehe = null;

    /** @Type("Ujamii\OpenImmo\API\AngeschlGastronomie") */
    public ?AngeschlGastronomie $angeschlGastronomie = null;

    /** @Type("bool") */
    public ?bool $brauereibindung = null;

    /** @Type("bool") */
    public ?bool $sporteinrichtungen = null;

    /** @Type("bool") */
    public ?bool $wellnessbereich = null;

    /**
     * @XmlList(inline = true, entry = "serviceleistungen")
     * @Type("array<Ujamii\OpenImmo\API\Serviceleistungen>")
     * @SkipWhenEmpty
     */
    public array $serviceleistungen = [];

    /** @Type("bool") */
    public ?bool $telefonFerienimmobilie = null;

    /** @Type("Ujamii\OpenImmo\API\BreitbandZugang") */
    public ?BreitbandZugang $breitbandZugang = null;

    /** @Type("bool") */
    public ?bool $umtsEmpfang = null;

    /** @Type("Ujamii\OpenImmo\API\Sicherheitstechnik") */
    public ?Sicherheitstechnik $sicherheitstechnik = null;

    /** @Type("Ujamii\OpenImmo\API\Unterkellert") */
    public ?Unterkellert $unterkellert = null;

    /** @Type("bool") */
    public ?bool $abstellraum = null;

    /** @Type("bool") */
    public ?bool $fahrradraum = null;

    /** @Type("bool") */
    public ?bool $rolladen = null;

    /** @Type("Ujamii\OpenImmo\API\Dachform") */
    public ?Dachform $dachform = null;

    /** @Type("Ujamii\OpenImmo\API\Bauweise") */
    public ?Bauweise $bauweise = null;

    /** @Type("Ujamii\OpenImmo\API\Ausbaustufe") */
    public ?Ausbaustufe $ausbaustufe = null;

    /** @Type("Ujamii\OpenImmo\API\Energietyp") */
    public ?Energietyp $energietyp = null;

    /** @Type("bool") */
    public ?bool $bibliothek = null;

    /** @Type("bool") */
    public ?bool $dachboden = null;

    /** @Type("bool") */
    public ?bool $gaestewc = null;

    /** @Type("bool") */
    public ?bool $kabelkanaele = null;

    /** @Type("bool") */
    public ?bool $seniorengerecht = null;

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

    public function getAusstattKategorie(): ?string
    {
        return $this->ausstattKategorie;
    }

    public function setAusstattKategorie(?string $ausstattKategorie): Ausstattung
    {
        $this->ausstattKategorie = $ausstattKategorie;
        return $this;
    }

    public function getWgGeeignet(): ?bool
    {
        return $this->wgGeeignet;
    }

    public function setWgGeeignet(?bool $wgGeeignet): Ausstattung
    {
        $this->wgGeeignet = $wgGeeignet;
        return $this;
    }

    public function getRaeumeVeraenderbar(): ?bool
    {
        return $this->raeumeVeraenderbar;
    }

    public function setRaeumeVeraenderbar(?bool $raeumeVeraenderbar): Ausstattung
    {
        $this->raeumeVeraenderbar = $raeumeVeraenderbar;
        return $this;
    }

    public function getBad(): ?Bad
    {
        return $this->bad;
    }

    public function setBad(?Bad $bad): Ausstattung
    {
        $this->bad = $bad;
        return $this;
    }

    public function getKueche(): ?Kueche
    {
        return $this->kueche;
    }

    public function setKueche(?Kueche $kueche): Ausstattung
    {
        $this->kueche = $kueche;
        return $this;
    }

    public function getBoden(): ?Boden
    {
        return $this->boden;
    }

    public function setBoden(?Boden $boden): Ausstattung
    {
        $this->boden = $boden;
        return $this;
    }

    public function getKamin(): ?bool
    {
        return $this->kamin;
    }

    public function setKamin(?bool $kamin): Ausstattung
    {
        $this->kamin = $kamin;
        return $this;
    }

    public function getHeizungsart(): ?Heizungsart
    {
        return $this->heizungsart;
    }

    public function setHeizungsart(?Heizungsart $heizungsart): Ausstattung
    {
        $this->heizungsart = $heizungsart;
        return $this;
    }

    public function getBefeuerung(): ?Befeuerung
    {
        return $this->befeuerung;
    }

    public function setBefeuerung(?Befeuerung $befeuerung): Ausstattung
    {
        $this->befeuerung = $befeuerung;
        return $this;
    }

    public function getKlimatisiert(): ?bool
    {
        return $this->klimatisiert;
    }

    public function setKlimatisiert(?bool $klimatisiert): Ausstattung
    {
        $this->klimatisiert = $klimatisiert;
        return $this;
    }

    public function getFahrstuhl(): ?Fahrstuhl
    {
        return $this->fahrstuhl;
    }

    public function setFahrstuhl(?Fahrstuhl $fahrstuhl): Ausstattung
    {
        $this->fahrstuhl = $fahrstuhl;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getStellplatzart(): array
    {
        return $this->stellplatzart ?? [];
    }

    public function setStellplatzart(array $stellplatzart): Ausstattung
    {
        $this->stellplatzart = $stellplatzart;
        return $this;
    }

    public function getGartennutzung(): ?bool
    {
        return $this->gartennutzung;
    }

    public function setGartennutzung(?bool $gartennutzung): Ausstattung
    {
        $this->gartennutzung = $gartennutzung;
        return $this;
    }

    public function getAusrichtBalkonTerrasse(): ?AusrichtBalkonTerrasse
    {
        return $this->ausrichtBalkonTerrasse;
    }

    public function setAusrichtBalkonTerrasse(?AusrichtBalkonTerrasse $ausrichtBalkonTerrasse): Ausstattung
    {
        $this->ausrichtBalkonTerrasse = $ausrichtBalkonTerrasse;
        return $this;
    }

    public function getMoebliert(): ?Moebliert
    {
        return $this->moebliert;
    }

    public function setMoebliert(?Moebliert $moebliert): Ausstattung
    {
        $this->moebliert = $moebliert;
        return $this;
    }

    public function getRollstuhlgerecht(): ?bool
    {
        return $this->rollstuhlgerecht;
    }

    public function setRollstuhlgerecht(?bool $rollstuhlgerecht): Ausstattung
    {
        $this->rollstuhlgerecht = $rollstuhlgerecht;
        return $this;
    }

    public function getKabelSatTv(): ?bool
    {
        return $this->kabelSatTv;
    }

    public function setKabelSatTv(?bool $kabelSatTv): Ausstattung
    {
        $this->kabelSatTv = $kabelSatTv;
        return $this;
    }

    public function getDvbt(): ?bool
    {
        return $this->dvbt;
    }

    public function setDvbt(?bool $dvbt): Ausstattung
    {
        $this->dvbt = $dvbt;
        return $this;
    }

    public function getBarrierefrei(): ?bool
    {
        return $this->barrierefrei;
    }

    public function setBarrierefrei(?bool $barrierefrei): Ausstattung
    {
        $this->barrierefrei = $barrierefrei;
        return $this;
    }

    public function getSauna(): ?bool
    {
        return $this->sauna;
    }

    public function setSauna(?bool $sauna): Ausstattung
    {
        $this->sauna = $sauna;
        return $this;
    }

    public function getSwimmingpool(): ?bool
    {
        return $this->swimmingpool;
    }

    public function setSwimmingpool(?bool $swimmingpool): Ausstattung
    {
        $this->swimmingpool = $swimmingpool;
        return $this;
    }

    public function getWaschTrockenraum(): ?bool
    {
        return $this->waschTrockenraum;
    }

    public function setWaschTrockenraum(?bool $waschTrockenraum): Ausstattung
    {
        $this->waschTrockenraum = $waschTrockenraum;
        return $this;
    }

    public function getWintergarten(): ?bool
    {
        return $this->wintergarten;
    }

    public function setWintergarten(?bool $wintergarten): Ausstattung
    {
        $this->wintergarten = $wintergarten;
        return $this;
    }

    public function getDvVerkabelung(): ?bool
    {
        return $this->dvVerkabelung;
    }

    public function setDvVerkabelung(?bool $dvVerkabelung): Ausstattung
    {
        $this->dvVerkabelung = $dvVerkabelung;
        return $this;
    }

    public function getRampe(): ?bool
    {
        return $this->rampe;
    }

    public function setRampe(?bool $rampe): Ausstattung
    {
        $this->rampe = $rampe;
        return $this;
    }

    public function getHebebuehne(): ?bool
    {
        return $this->hebebuehne;
    }

    public function setHebebuehne(?bool $hebebuehne): Ausstattung
    {
        $this->hebebuehne = $hebebuehne;
        return $this;
    }

    public function getKran(): ?bool
    {
        return $this->kran;
    }

    public function setKran(?bool $kran): Ausstattung
    {
        $this->kran = $kran;
        return $this;
    }

    public function getGastterrasse(): ?bool
    {
        return $this->gastterrasse;
    }

    public function setGastterrasse(?bool $gastterrasse): Ausstattung
    {
        $this->gastterrasse = $gastterrasse;
        return $this;
    }

    public function getStromanschlusswert(): ?string
    {
        return $this->stromanschlusswert;
    }

    public function setStromanschlusswert(?string $stromanschlusswert): Ausstattung
    {
        $this->stromanschlusswert = $stromanschlusswert;
        return $this;
    }

    public function getKantineCafeteria(): ?bool
    {
        return $this->kantineCafeteria;
    }

    public function setKantineCafeteria(?bool $kantineCafeteria): Ausstattung
    {
        $this->kantineCafeteria = $kantineCafeteria;
        return $this;
    }

    public function getTeekueche(): ?bool
    {
        return $this->teekueche;
    }

    public function setTeekueche(?bool $teekueche): Ausstattung
    {
        $this->teekueche = $teekueche;
        return $this;
    }

    public function getHallenhoehe(): ?float
    {
        return $this->hallenhoehe;
    }

    public function setHallenhoehe(?float $hallenhoehe): Ausstattung
    {
        $this->hallenhoehe = $hallenhoehe;
        return $this;
    }

    public function getAngeschlGastronomie(): ?AngeschlGastronomie
    {
        return $this->angeschlGastronomie;
    }

    public function setAngeschlGastronomie(?AngeschlGastronomie $angeschlGastronomie): Ausstattung
    {
        $this->angeschlGastronomie = $angeschlGastronomie;
        return $this;
    }

    public function getBrauereibindung(): ?bool
    {
        return $this->brauereibindung;
    }

    public function setBrauereibindung(?bool $brauereibindung): Ausstattung
    {
        $this->brauereibindung = $brauereibindung;
        return $this;
    }

    public function getSporteinrichtungen(): ?bool
    {
        return $this->sporteinrichtungen;
    }

    public function setSporteinrichtungen(?bool $sporteinrichtungen): Ausstattung
    {
        $this->sporteinrichtungen = $sporteinrichtungen;
        return $this;
    }

    public function getWellnessbereich(): ?bool
    {
        return $this->wellnessbereich;
    }

    public function setWellnessbereich(?bool $wellnessbereich): Ausstattung
    {
        $this->wellnessbereich = $wellnessbereich;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getServiceleistungen(): array
    {
        return $this->serviceleistungen ?? [];
    }

    public function setServiceleistungen(array $serviceleistungen): Ausstattung
    {
        $this->serviceleistungen = $serviceleistungen;
        return $this;
    }

    public function getTelefonFerienimmobilie(): ?bool
    {
        return $this->telefonFerienimmobilie;
    }

    public function setTelefonFerienimmobilie(?bool $telefonFerienimmobilie): Ausstattung
    {
        $this->telefonFerienimmobilie = $telefonFerienimmobilie;
        return $this;
    }

    public function getBreitbandZugang(): ?BreitbandZugang
    {
        return $this->breitbandZugang;
    }

    public function setBreitbandZugang(?BreitbandZugang $breitbandZugang): Ausstattung
    {
        $this->breitbandZugang = $breitbandZugang;
        return $this;
    }

    public function getUmtsEmpfang(): ?bool
    {
        return $this->umtsEmpfang;
    }

    public function setUmtsEmpfang(?bool $umtsEmpfang): Ausstattung
    {
        $this->umtsEmpfang = $umtsEmpfang;
        return $this;
    }

    public function getSicherheitstechnik(): ?Sicherheitstechnik
    {
        return $this->sicherheitstechnik;
    }

    public function setSicherheitstechnik(?Sicherheitstechnik $sicherheitstechnik): Ausstattung
    {
        $this->sicherheitstechnik = $sicherheitstechnik;
        return $this;
    }

    public function getUnterkellert(): ?Unterkellert
    {
        return $this->unterkellert;
    }

    public function setUnterkellert(?Unterkellert $unterkellert): Ausstattung
    {
        $this->unterkellert = $unterkellert;
        return $this;
    }

    public function getAbstellraum(): ?bool
    {
        return $this->abstellraum;
    }

    public function setAbstellraum(?bool $abstellraum): Ausstattung
    {
        $this->abstellraum = $abstellraum;
        return $this;
    }

    public function getFahrradraum(): ?bool
    {
        return $this->fahrradraum;
    }

    public function setFahrradraum(?bool $fahrradraum): Ausstattung
    {
        $this->fahrradraum = $fahrradraum;
        return $this;
    }

    public function getRolladen(): ?bool
    {
        return $this->rolladen;
    }

    public function setRolladen(?bool $rolladen): Ausstattung
    {
        $this->rolladen = $rolladen;
        return $this;
    }

    public function getDachform(): ?Dachform
    {
        return $this->dachform;
    }

    public function setDachform(?Dachform $dachform): Ausstattung
    {
        $this->dachform = $dachform;
        return $this;
    }

    public function getBauweise(): ?Bauweise
    {
        return $this->bauweise;
    }

    public function setBauweise(?Bauweise $bauweise): Ausstattung
    {
        $this->bauweise = $bauweise;
        return $this;
    }

    public function getAusbaustufe(): ?Ausbaustufe
    {
        return $this->ausbaustufe;
    }

    public function setAusbaustufe(?Ausbaustufe $ausbaustufe): Ausstattung
    {
        $this->ausbaustufe = $ausbaustufe;
        return $this;
    }

    public function getEnergietyp(): ?Energietyp
    {
        return $this->energietyp;
    }

    public function setEnergietyp(?Energietyp $energietyp): Ausstattung
    {
        $this->energietyp = $energietyp;
        return $this;
    }

    public function getBibliothek(): ?bool
    {
        return $this->bibliothek;
    }

    public function setBibliothek(?bool $bibliothek): Ausstattung
    {
        $this->bibliothek = $bibliothek;
        return $this;
    }

    public function getDachboden(): ?bool
    {
        return $this->dachboden;
    }

    public function setDachboden(?bool $dachboden): Ausstattung
    {
        $this->dachboden = $dachboden;
        return $this;
    }

    public function getGaestewc(): ?bool
    {
        return $this->gaestewc;
    }

    public function setGaestewc(?bool $gaestewc): Ausstattung
    {
        $this->gaestewc = $gaestewc;
        return $this;
    }

    public function getKabelkanaele(): ?bool
    {
        return $this->kabelkanaele;
    }

    public function setKabelkanaele(?bool $kabelkanaele): Ausstattung
    {
        $this->kabelkanaele = $kabelkanaele;
        return $this;
    }

    public function getSeniorengerecht(): ?bool
    {
        return $this->seniorengerecht;
    }

    public function setSeniorengerecht(?bool $seniorengerecht): Ausstattung
    {
        $this->seniorengerecht = $seniorengerecht;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Ausstattung
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Ausstattung
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

    public function setUserDefinedExtend(array $userDefinedExtend): Ausstattung
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
