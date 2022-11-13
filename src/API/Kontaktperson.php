<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kontaktperson
 *
 * @XmlRoot("kontaktperson")
 */
class Kontaktperson
{
    /**
     * @Type("string")
     * Minimum length: 1
     */
    public ?string $emailZentrale = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    public ?string $emailDirekt = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    public ?string $telZentrale = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    public ?string $telDurchw = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    public ?string $telFax = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    public ?string $telHandy = null;

    /**
     * @Type("string")
     * @SkipWhenEmpty
     */
    public string $name = '';

    /** @Type("string") */
    public ?string $vorname = null;

    /** @Type("string") */
    public ?string $titel = null;

    /** @Type("string") */
    public ?string $anrede = null;

    /** @Type("string") */
    public ?string $position = null;

    /** @Type("string") */
    public ?string $anredeBrief = null;

    /** @Type("string") */
    public ?string $firma = null;

    /** @Type("string") */
    public ?string $zusatzfeld = null;

    /** @Type("string") */
    public ?string $strasse = null;

    /** @Type("string") */
    public ?string $hausnummer = null;

    /** @Type("string") */
    public ?string $plz = null;

    /** @Type("string") */
    public ?string $ort = null;

    /** @Type("string") */
    public ?string $postfach = null;

    /** @Type("string") */
    public ?string $postfPlz = null;

    /** @Type("string") */
    public ?string $postfOrt = null;

    /** @Type("Ujamii\OpenImmo\API\Land") */
    public ?Land $land = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    public ?string $emailPrivat = null;

    /**
     * @XmlList(inline = true, entry = "email_sonstige")
     * @Type("array<Ujamii\OpenImmo\API\EmailSonstige>")
     * @SkipWhenEmpty
     */
    public array $emailSonstige = [];

    /**
     * @Type("string")
     * Minimum length: 1
     */
    public ?string $emailFeedback = null;

    /**
     * @Type("string")
     * Minimum length: 1
     */
    public ?string $telPrivat = null;

    /**
     * @XmlList(inline = true, entry = "tel_sonstige")
     * @Type("array<Ujamii\OpenImmo\API\TelSonstige>")
     * @SkipWhenEmpty
     */
    public array $telSonstige = [];

    /** @Type("string") */
    public ?string $url = null;

    /** @Type("bool") */
    public ?bool $adressfreigabe = null;

    /** @Type("string") */
    public ?string $personennummer = null;

    /** @Type("string") */
    public ?string $immobilientreuhaenderid = null;

    /** @Type("Ujamii\OpenImmo\API\Foto") */
    public ?Foto $foto = null;

    /** @Type("string") */
    public ?string $referenzId = null;

    /** @Type("string") */
    public ?string $freitextfeld = null;

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

    public function getEmailZentrale(): ?string
    {
        return $this->emailZentrale;
    }

    public function setEmailZentrale(?string $emailZentrale): Kontaktperson
    {
        $this->emailZentrale = $emailZentrale;
        return $this;
    }

    public function getEmailDirekt(): ?string
    {
        return $this->emailDirekt;
    }

    public function setEmailDirekt(?string $emailDirekt): Kontaktperson
    {
        $this->emailDirekt = $emailDirekt;
        return $this;
    }

    public function getTelZentrale(): ?string
    {
        return $this->telZentrale;
    }

    public function setTelZentrale(?string $telZentrale): Kontaktperson
    {
        $this->telZentrale = $telZentrale;
        return $this;
    }

    public function getTelDurchw(): ?string
    {
        return $this->telDurchw;
    }

    public function setTelDurchw(?string $telDurchw): Kontaktperson
    {
        $this->telDurchw = $telDurchw;
        return $this;
    }

    public function getTelFax(): ?string
    {
        return $this->telFax;
    }

    public function setTelFax(?string $telFax): Kontaktperson
    {
        $this->telFax = $telFax;
        return $this;
    }

    public function getTelHandy(): ?string
    {
        return $this->telHandy;
    }

    public function setTelHandy(?string $telHandy): Kontaktperson
    {
        $this->telHandy = $telHandy;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Kontaktperson
    {
        $this->name = $name;
        return $this;
    }

    public function getVorname(): ?string
    {
        return $this->vorname;
    }

    public function setVorname(?string $vorname): Kontaktperson
    {
        $this->vorname = $vorname;
        return $this;
    }

    public function getTitel(): ?string
    {
        return $this->titel;
    }

    public function setTitel(?string $titel): Kontaktperson
    {
        $this->titel = $titel;
        return $this;
    }

    public function getAnrede(): ?string
    {
        return $this->anrede;
    }

    public function setAnrede(?string $anrede): Kontaktperson
    {
        $this->anrede = $anrede;
        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): Kontaktperson
    {
        $this->position = $position;
        return $this;
    }

    public function getAnredeBrief(): ?string
    {
        return $this->anredeBrief;
    }

    public function setAnredeBrief(?string $anredeBrief): Kontaktperson
    {
        $this->anredeBrief = $anredeBrief;
        return $this;
    }

    public function getFirma(): ?string
    {
        return $this->firma;
    }

    public function setFirma(?string $firma): Kontaktperson
    {
        $this->firma = $firma;
        return $this;
    }

    public function getZusatzfeld(): ?string
    {
        return $this->zusatzfeld;
    }

    public function setZusatzfeld(?string $zusatzfeld): Kontaktperson
    {
        $this->zusatzfeld = $zusatzfeld;
        return $this;
    }

    public function getStrasse(): ?string
    {
        return $this->strasse;
    }

    public function setStrasse(?string $strasse): Kontaktperson
    {
        $this->strasse = $strasse;
        return $this;
    }

    public function getHausnummer(): ?string
    {
        return $this->hausnummer;
    }

    public function setHausnummer(?string $hausnummer): Kontaktperson
    {
        $this->hausnummer = $hausnummer;
        return $this;
    }

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function setPlz(?string $plz): Kontaktperson
    {
        $this->plz = $plz;
        return $this;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(?string $ort): Kontaktperson
    {
        $this->ort = $ort;
        return $this;
    }

    public function getPostfach(): ?string
    {
        return $this->postfach;
    }

    public function setPostfach(?string $postfach): Kontaktperson
    {
        $this->postfach = $postfach;
        return $this;
    }

    public function getPostfPlz(): ?string
    {
        return $this->postfPlz;
    }

    public function setPostfPlz(?string $postfPlz): Kontaktperson
    {
        $this->postfPlz = $postfPlz;
        return $this;
    }

    public function getPostfOrt(): ?string
    {
        return $this->postfOrt;
    }

    public function setPostfOrt(?string $postfOrt): Kontaktperson
    {
        $this->postfOrt = $postfOrt;
        return $this;
    }

    public function getLand(): ?Land
    {
        return $this->land;
    }

    public function setLand(?Land $land): Kontaktperson
    {
        $this->land = $land;
        return $this;
    }

    public function getEmailPrivat(): ?string
    {
        return $this->emailPrivat;
    }

    public function setEmailPrivat(?string $emailPrivat): Kontaktperson
    {
        $this->emailPrivat = $emailPrivat;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getEmailSonstige(): array
    {
        return $this->emailSonstige ?? [];
    }

    public function setEmailSonstige(array $emailSonstige): Kontaktperson
    {
        $this->emailSonstige = $emailSonstige;
        return $this;
    }

    public function getEmailFeedback(): ?string
    {
        return $this->emailFeedback;
    }

    public function setEmailFeedback(?string $emailFeedback): Kontaktperson
    {
        $this->emailFeedback = $emailFeedback;
        return $this;
    }

    public function getTelPrivat(): ?string
    {
        return $this->telPrivat;
    }

    public function setTelPrivat(?string $telPrivat): Kontaktperson
    {
        $this->telPrivat = $telPrivat;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getTelSonstige(): array
    {
        return $this->telSonstige ?? [];
    }

    public function setTelSonstige(array $telSonstige): Kontaktperson
    {
        $this->telSonstige = $telSonstige;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): Kontaktperson
    {
        $this->url = $url;
        return $this;
    }

    public function getAdressfreigabe(): ?bool
    {
        return $this->adressfreigabe;
    }

    public function setAdressfreigabe(?bool $adressfreigabe): Kontaktperson
    {
        $this->adressfreigabe = $adressfreigabe;
        return $this;
    }

    public function getPersonennummer(): ?string
    {
        return $this->personennummer;
    }

    public function setPersonennummer(?string $personennummer): Kontaktperson
    {
        $this->personennummer = $personennummer;
        return $this;
    }

    public function getImmobilientreuhaenderid(): ?string
    {
        return $this->immobilientreuhaenderid;
    }

    public function setImmobilientreuhaenderid(?string $immobilientreuhaenderid): Kontaktperson
    {
        $this->immobilientreuhaenderid = $immobilientreuhaenderid;
        return $this;
    }

    public function getFoto(): ?Foto
    {
        return $this->foto;
    }

    public function setFoto(?Foto $foto): Kontaktperson
    {
        $this->foto = $foto;
        return $this;
    }

    public function getReferenzId(): ?string
    {
        return $this->referenzId;
    }

    public function setReferenzId(?string $referenzId): Kontaktperson
    {
        $this->referenzId = $referenzId;
        return $this;
    }

    public function getFreitextfeld(): ?string
    {
        return $this->freitextfeld;
    }

    public function setFreitextfeld(?string $freitextfeld): Kontaktperson
    {
        $this->freitextfeld = $freitextfeld;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Kontaktperson
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Kontaktperson
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

    public function setUserDefinedExtend(array $userDefinedExtend): Kontaktperson
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
