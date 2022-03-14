<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Energiepass
 * Energiepass/Ausweis ab 7/2008 vorgeschrieben
 * @XmlRoot("energiepass")
 */
class Energiepass
{
    public const EPART_BEDARF = 'BEDARF';
    public const EPART_VERBRAUCH = 'VERBRAUCH';
    public const JAHRGANG_2008 = '2008';
    public const JAHRGANG_2014 = '2014';
    public const JAHRGANG_OHNE = 'ohne';
    public const JAHRGANG_NICHT_NOETIG = 'nicht_noetig';
    public const JAHRGANG_BEI_BESICHTIGUNG = 'bei_besichtigung';
    public const GEBAEUDEART_WOHN = 'wohn';
    public const GEBAEUDEART_NICHTWOHN = 'nichtwohn';

    /**
     * @Type("string")
     * @see EPART_* constants
     */
    protected string $epart = '';

    /** @Type("string") */
    protected ?string $gueltigBis = null;

    /** @Type("string") */
    protected ?string $energieverbrauchkennwert = null;

    /** @Type("bool") */
    protected ?bool $mitwarmwasser = null;

    /** @Type("string") */
    protected ?string $endenergiebedarf = null;

    /** @Type("string") */
    protected ?string $primaerenergietraeger = null;

    /** @Type("string") */
    protected ?string $stromwert = null;

    /** @Type("string") */
    protected ?string $waermewert = null;

    /** @Type("string") */
    protected ?string $wertklasse = null;

    /** @Type("string") */
    protected ?string $baujahr = null;

    /** @Type("DateTime<'Y-m-d'>") */
    protected ?\DateTime $ausstelldatum = null;

    /**
     * @Type("string")
     * @see JAHRGANG_* constants
     */
    protected string $jahrgang = '';

    /**
     * @Type("string")
     * @see GEBAEUDEART_* constants
     */
    protected string $gebaeudeart = '';

    /** @Type("string") */
    protected ?string $epasstext = null;

    /** @Type("string") */
    protected ?string $geg2018 = null;

    /** @Type("string") */
    protected ?string $hwbwert = null;

    /** @Type("string") */
    protected ?string $hwbklasse = null;

    /** @Type("string") */
    protected ?string $fgeewert = null;

    /** @Type("string") */
    protected ?string $fgeeklasse = null;

    public function getEpart(): ?string
    {
        return $this->epart;
    }

    public function setEpart(?string $epart): Energiepass
    {
        $this->epart = $epart;
        return $this;
    }

    public function getGueltigBis(): ?string
    {
        return $this->gueltigBis;
    }

    public function setGueltigBis(?string $gueltigBis): Energiepass
    {
        $this->gueltigBis = $gueltigBis;
        return $this;
    }

    public function getEnergieverbrauchkennwert(): ?string
    {
        return $this->energieverbrauchkennwert;
    }

    public function setEnergieverbrauchkennwert(?string $energieverbrauchkennwert): Energiepass
    {
        $this->energieverbrauchkennwert = $energieverbrauchkennwert;
        return $this;
    }

    public function getMitwarmwasser(): ?bool
    {
        return $this->mitwarmwasser;
    }

    public function setMitwarmwasser(?bool $mitwarmwasser): Energiepass
    {
        $this->mitwarmwasser = $mitwarmwasser;
        return $this;
    }

    public function getEndenergiebedarf(): ?string
    {
        return $this->endenergiebedarf;
    }

    public function setEndenergiebedarf(?string $endenergiebedarf): Energiepass
    {
        $this->endenergiebedarf = $endenergiebedarf;
        return $this;
    }

    public function getPrimaerenergietraeger(): ?string
    {
        return $this->primaerenergietraeger;
    }

    public function setPrimaerenergietraeger(?string $primaerenergietraeger): Energiepass
    {
        $this->primaerenergietraeger = $primaerenergietraeger;
        return $this;
    }

    public function getStromwert(): ?string
    {
        return $this->stromwert;
    }

    public function setStromwert(?string $stromwert): Energiepass
    {
        $this->stromwert = $stromwert;
        return $this;
    }

    public function getWaermewert(): ?string
    {
        return $this->waermewert;
    }

    public function setWaermewert(?string $waermewert): Energiepass
    {
        $this->waermewert = $waermewert;
        return $this;
    }

    public function getWertklasse(): ?string
    {
        return $this->wertklasse;
    }

    public function setWertklasse(?string $wertklasse): Energiepass
    {
        $this->wertklasse = $wertklasse;
        return $this;
    }

    public function getBaujahr(): ?string
    {
        return $this->baujahr;
    }

    public function setBaujahr(?string $baujahr): Energiepass
    {
        $this->baujahr = $baujahr;
        return $this;
    }

    public function getAusstelldatum(): ?\DateTime
    {
        return $this->ausstelldatum;
    }

    public function setAusstelldatum(?\DateTime $ausstelldatum): Energiepass
    {
        $this->ausstelldatum = $ausstelldatum;
        return $this;
    }

    public function getJahrgang(): ?string
    {
        return $this->jahrgang;
    }

    public function setJahrgang(?string $jahrgang): Energiepass
    {
        $this->jahrgang = $jahrgang;
        return $this;
    }

    public function getGebaeudeart(): ?string
    {
        return $this->gebaeudeart;
    }

    public function setGebaeudeart(?string $gebaeudeart): Energiepass
    {
        $this->gebaeudeart = $gebaeudeart;
        return $this;
    }

    public function getEpasstext(): ?string
    {
        return $this->epasstext;
    }

    public function setEpasstext(?string $epasstext): Energiepass
    {
        $this->epasstext = $epasstext;
        return $this;
    }

    public function getGeg2018(): ?string
    {
        return $this->geg2018;
    }

    public function setGeg2018(?string $geg2018): Energiepass
    {
        $this->geg2018 = $geg2018;
        return $this;
    }

    public function getHwbwert(): ?string
    {
        return $this->hwbwert;
    }

    public function setHwbwert(?string $hwbwert): Energiepass
    {
        $this->hwbwert = $hwbwert;
        return $this;
    }

    public function getHwbklasse(): ?string
    {
        return $this->hwbklasse;
    }

    public function setHwbklasse(?string $hwbklasse): Energiepass
    {
        $this->hwbklasse = $hwbklasse;
        return $this;
    }

    public function getFgeewert(): ?string
    {
        return $this->fgeewert;
    }

    public function setFgeewert(?string $fgeewert): Energiepass
    {
        $this->fgeewert = $fgeewert;
        return $this;
    }

    public function getFgeeklasse(): ?string
    {
        return $this->fgeeklasse;
    }

    public function setFgeeklasse(?string $fgeeklasse): Energiepass
    {
        $this->fgeeklasse = $fgeeklasse;
        return $this;
    }
}
