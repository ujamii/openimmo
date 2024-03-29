<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Uebertragung
 * Übertragungsangaben
 * @XmlRoot("uebertragung")
 */
class Uebertragung
{
    public const ART_ONLINE = 'ONLINE';
    public const ART_OFFLINE = 'OFFLINE';
    public const UMFANG_TEIL = 'TEIL';
    public const UMFANG_VOLL = 'VOLL';
    public const MODUS_NEW = 'NEW';
    public const MODUS_CHANGE = 'CHANGE';
    public const MODUS_DELETE = 'DELETE';

    /**
     * @Type("string")
     * @XmlAttribute
     * required
     * @see ART_* constants
     */
    protected string $art = '';

    /**
     * @Type("string")
     * @XmlAttribute
     * required
     * @see UMFANG_* constants
     */
    protected string $umfang = '';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see MODUS_* constants
     */
    protected string $modus = '';

    /**
     * @Type("string")
     * @XmlAttribute
     * required
     */
    protected string $version = '';

    /**
     * @Type("string")
     * @XmlAttribute
     * required
     */
    protected string $sendersoftware = '';

    /**
     * @Type("string")
     * @XmlAttribute
     * required
     */
    protected string $senderversion = '';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     */
    protected ?string $technEmail = null;

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     */
    protected ?string $regiId = null;

    /**
     * @Type("DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>")
     * @XmlAttribute
     * optional
     */
    protected ?\DateTime $timestamp = null;

    public function getArt(): string
    {
        return $this->art;
    }

    public function setArt(string $art): Uebertragung
    {
        $this->art = $art;
        return $this;
    }

    public function getUmfang(): string
    {
        return $this->umfang;
    }

    public function setUmfang(string $umfang): Uebertragung
    {
        $this->umfang = $umfang;
        return $this;
    }

    public function getModus(): ?string
    {
        return $this->modus;
    }

    public function setModus(?string $modus): Uebertragung
    {
        $this->modus = $modus;
        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): Uebertragung
    {
        $this->version = $version;
        return $this;
    }

    public function getSendersoftware(): string
    {
        return $this->sendersoftware;
    }

    public function setSendersoftware(string $sendersoftware): Uebertragung
    {
        $this->sendersoftware = $sendersoftware;
        return $this;
    }

    public function getSenderversion(): string
    {
        return $this->senderversion;
    }

    public function setSenderversion(string $senderversion): Uebertragung
    {
        $this->senderversion = $senderversion;
        return $this;
    }

    public function getTechnEmail(): ?string
    {
        return $this->technEmail;
    }

    public function setTechnEmail(?string $technEmail): Uebertragung
    {
        $this->technEmail = $technEmail;
        return $this;
    }

    public function getRegiId(): ?string
    {
        return $this->regiId;
    }

    public function setRegiId(?string $regiId): Uebertragung
    {
        $this->regiId = $regiId;
        return $this;
    }

    public function getTimestamp(): ?\DateTime
    {
        return $this->timestamp;
    }

    public function setTimestamp(?\DateTime $timestamp): Uebertragung
    {
        $this->timestamp = $timestamp;
        return $this;
    }
}
