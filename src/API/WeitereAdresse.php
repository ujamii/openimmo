<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class WeitereAdresse
 *
 * @XmlRoot("weitere_adresse")
 */
class WeitereAdresse
{
    /**
     * @Type("string")
     * @XmlAttribute
     * required
     */
    protected string $adressart = '';

    /** @Type("string") */
    protected ?string $vorname = null;

    /** @Type("string") */
    protected ?string $name = null;

    /** @Type("string") */
    protected ?string $titel = null;

    /** @Type("string") */
    protected ?string $anrede = null;

    /** @Type("string") */
    protected ?string $anredeBrief = null;

    /** @Type("string") */
    protected ?string $firma = null;

    /** @Type("string") */
    protected ?string $zusatzfeld = null;

    /** @Type("string") */
    protected ?string $strasse = null;

    /** @Type("string") */
    protected ?string $hausnummer = null;

    /** @Type("string") */
    protected ?string $plz = null;

    /** @Type("string") */
    protected ?string $ort = null;

    /** @Type("string") */
    protected ?string $postfach = null;

    /** @Type("string") */
    protected ?string $postfPlz = null;

    /** @Type("string") */
    protected ?string $postfOrt = null;

    /** @Type("Ujamii\OpenImmo\API\Land") */
    protected ?Land $land = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    protected ?string $emailZentrale = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    protected ?string $emailDirekt = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    protected ?string $emailPrivat = null;

    /**
     * @XmlList(inline = true, entry = "email_sonstige")
     * @Type("array<Ujamii\OpenImmo\API\EmailSonstige>")
     * @SkipWhenEmpty
     */
    protected array $emailSonstige = [];

    /**
     * @Type("string")
     * Minimum length: 1
     */
    protected ?string $telDurchw = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    protected ?string $telZentrale = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    protected ?string $telHandy = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    protected ?string $telFax = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    protected ?string $telPrivat = null;

    /**
     * @XmlList(inline = true, entry = "tel_sonstige")
     * @Type("array<Ujamii\OpenImmo\API\TelSonstige>")
     * @SkipWhenEmpty
     */
    protected array $telSonstige = [];

    /** @Type("string") */
    protected ?string $url = null;

    /** @Type("bool") */
    protected ?bool $adressfreigabe = null;

    /** @Type("string") */
    protected ?string $personennummer = null;

    /** @Type("string") */
    protected ?string $freitextfeld = null;

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

    public function getAdressart(): string
    {
        return $this->adressart;
    }

    public function setAdressart(string $adressart): WeitereAdresse
    {
        $this->adressart = $adressart;
        return $this;
    }

    public function getVorname(): ?string
    {
        return $this->vorname;
    }

    public function setVorname(?string $vorname): WeitereAdresse
    {
        $this->vorname = $vorname;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): WeitereAdresse
    {
        $this->name = $name;
        return $this;
    }

    public function getTitel(): ?string
    {
        return $this->titel;
    }

    public function setTitel(?string $titel): WeitereAdresse
    {
        $this->titel = $titel;
        return $this;
    }

    public function getAnrede(): ?string
    {
        return $this->anrede;
    }

    public function setAnrede(?string $anrede): WeitereAdresse
    {
        $this->anrede = $anrede;
        return $this;
    }

    public function getAnredeBrief(): ?string
    {
        return $this->anredeBrief;
    }

    public function setAnredeBrief(?string $anredeBrief): WeitereAdresse
    {
        $this->anredeBrief = $anredeBrief;
        return $this;
    }

    public function getFirma(): ?string
    {
        return $this->firma;
    }

    public function setFirma(?string $firma): WeitereAdresse
    {
        $this->firma = $firma;
        return $this;
    }

    public function getZusatzfeld(): ?string
    {
        return $this->zusatzfeld;
    }

    public function setZusatzfeld(?string $zusatzfeld): WeitereAdresse
    {
        $this->zusatzfeld = $zusatzfeld;
        return $this;
    }

    public function getStrasse(): ?string
    {
        return $this->strasse;
    }

    public function setStrasse(?string $strasse): WeitereAdresse
    {
        $this->strasse = $strasse;
        return $this;
    }

    public function getHausnummer(): ?string
    {
        return $this->hausnummer;
    }

    public function setHausnummer(?string $hausnummer): WeitereAdresse
    {
        $this->hausnummer = $hausnummer;
        return $this;
    }

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function setPlz(?string $plz): WeitereAdresse
    {
        $this->plz = $plz;
        return $this;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(?string $ort): WeitereAdresse
    {
        $this->ort = $ort;
        return $this;
    }

    public function getPostfach(): ?string
    {
        return $this->postfach;
    }

    public function setPostfach(?string $postfach): WeitereAdresse
    {
        $this->postfach = $postfach;
        return $this;
    }

    public function getPostfPlz(): ?string
    {
        return $this->postfPlz;
    }

    public function setPostfPlz(?string $postfPlz): WeitereAdresse
    {
        $this->postfPlz = $postfPlz;
        return $this;
    }

    public function getPostfOrt(): ?string
    {
        return $this->postfOrt;
    }

    public function setPostfOrt(?string $postfOrt): WeitereAdresse
    {
        $this->postfOrt = $postfOrt;
        return $this;
    }

    public function getLand(): ?Land
    {
        return $this->land;
    }

    public function setLand(?Land $land): WeitereAdresse
    {
        $this->land = $land;
        return $this;
    }

    public function getEmailZentrale(): ?string
    {
        return $this->emailZentrale;
    }

    public function setEmailZentrale(?string $emailZentrale): WeitereAdresse
    {
        $this->emailZentrale = $emailZentrale;
        return $this;
    }

    public function getEmailDirekt(): ?string
    {
        return $this->emailDirekt;
    }

    public function setEmailDirekt(?string $emailDirekt): WeitereAdresse
    {
        $this->emailDirekt = $emailDirekt;
        return $this;
    }

    public function getEmailPrivat(): ?string
    {
        return $this->emailPrivat;
    }

    public function setEmailPrivat(?string $emailPrivat): WeitereAdresse
    {
        $this->emailPrivat = $emailPrivat;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getEmailSonstige(): array
    {
        return $this->emailSonstige;
    }

    public function setEmailSonstige(array $emailSonstige): WeitereAdresse
    {
        $this->emailSonstige = $emailSonstige;
        return $this;
    }

    public function getTelDurchw(): ?string
    {
        return $this->telDurchw;
    }

    public function setTelDurchw(?string $telDurchw): WeitereAdresse
    {
        $this->telDurchw = $telDurchw;
        return $this;
    }

    public function getTelZentrale(): ?string
    {
        return $this->telZentrale;
    }

    public function setTelZentrale(?string $telZentrale): WeitereAdresse
    {
        $this->telZentrale = $telZentrale;
        return $this;
    }

    public function getTelHandy(): ?string
    {
        return $this->telHandy;
    }

    public function setTelHandy(?string $telHandy): WeitereAdresse
    {
        $this->telHandy = $telHandy;
        return $this;
    }

    public function getTelFax(): ?string
    {
        return $this->telFax;
    }

    public function setTelFax(?string $telFax): WeitereAdresse
    {
        $this->telFax = $telFax;
        return $this;
    }

    public function getTelPrivat(): ?string
    {
        return $this->telPrivat;
    }

    public function setTelPrivat(?string $telPrivat): WeitereAdresse
    {
        $this->telPrivat = $telPrivat;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getTelSonstige(): array
    {
        return $this->telSonstige;
    }

    public function setTelSonstige(array $telSonstige): WeitereAdresse
    {
        $this->telSonstige = $telSonstige;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): WeitereAdresse
    {
        $this->url = $url;
        return $this;
    }

    public function getAdressfreigabe(): ?bool
    {
        return $this->adressfreigabe;
    }

    public function setAdressfreigabe(?bool $adressfreigabe): WeitereAdresse
    {
        $this->adressfreigabe = $adressfreigabe;
        return $this;
    }

    public function getPersonennummer(): ?string
    {
        return $this->personennummer;
    }

    public function setPersonennummer(?string $personennummer): WeitereAdresse
    {
        $this->personennummer = $personennummer;
        return $this;
    }

    public function getFreitextfeld(): ?string
    {
        return $this->freitextfeld;
    }

    public function setFreitextfeld(?string $freitextfeld): WeitereAdresse
    {
        $this->freitextfeld = $freitextfeld;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): WeitereAdresse
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): WeitereAdresse
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

    public function setUserDefinedExtend(array $userDefinedExtend): WeitereAdresse
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
