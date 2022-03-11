<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class TelSonstige
 *
 * @XmlRoot("tel_sonstige")
 */
class TelSonstige
{
    public const TELEFONART_TEL_ZENTRALE = 'TEL_ZENTRALE';
    public const TELEFONART_TEL_DURCHW = 'TEL_DURCHW';
    public const TELEFONART_TEL_PRIVAT = 'TEL_PRIVAT';
    public const TELEFONART_TEL_HANDY = 'TEL_HANDY';
    public const TELEFONART_TEL_FAX = 'TEL_FAX';
    public const TELEFONART_TEL_SONSTIGE = 'TEL_SONSTIGE';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see TELEFONART_* constants
     */
    protected ?string $telefonart;

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     */
    protected ?string $bemerkung;

    /**
     * @Inline
     * @Type("string")
     */
    protected ?string $value;

    public function getTelefonart(): string
    {
        return $this->telefonart;
    }

    public function setTelefonart(string $telefonart): TelSonstige
    {
        $this->telefonart = $telefonart;
        return $this;
    }

    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    public function setBemerkung(?string $bemerkung): TelSonstige
    {
        $this->bemerkung = $bemerkung;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): TelSonstige
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $telefonart = null, string $bemerkung = null, string $value = null)
    {
        $this->telefonart = $telefonart;
        $this->bemerkung = $bemerkung;
        $this->value = $value;
    }
}
