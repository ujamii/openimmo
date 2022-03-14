<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class EmailSonstige
 *
 * @XmlRoot("email_sonstige")
 */
class EmailSonstige
{
    public const EMAILART_EM_ZENTRALE = 'EM_ZENTRALE';
    public const EMAILART_EM_DIREKT = 'EM_DIREKT';
    public const EMAILART_EM_PRIVAT = 'EM_PRIVAT';
    public const EMAILART_EM_SONSTIGE = 'EM_SONSTIGE';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see EMAILART_* constants
     */
    protected string $emailart = '';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     */
    protected ?string $bemerkung = null;

    /**
     * @Inline
     * @Type("string")
     */
    protected ?string $value = null;

    public function getEmailart(): ?string
    {
        return $this->emailart;
    }

    public function setEmailart(?string $emailart): EmailSonstige
    {
        $this->emailart = $emailart;
        return $this;
    }

    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    public function setBemerkung(?string $bemerkung): EmailSonstige
    {
        $this->bemerkung = $bemerkung;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): EmailSonstige
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $emailart = '', ?string $bemerkung = null, ?string $value = null)
    {
        $this->emailart = $emailart;
        $this->bemerkung = $bemerkung;
        $this->value = $value;
    }
}
