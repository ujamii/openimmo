<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Foto
 * Foto bei der Kontaktperson. Datentyp Ã¤hnlich "Anhang"
 * foto from the kontakt person of the sender
 * @XmlRoot("foto")
 */
class Foto
{
    public const LOCATION_EXTERN = 'EXTERN';
    public const LOCATION_REMOTE = 'REMOTE';

    /**
     * @Type("string")
     * @XmlAttribute
     * required
     * @see LOCATION_* constants
     */
    public string $location = '';

    /**
     * @Type("string")
     * @SkipWhenEmpty
     */
    public string $format = '';

    /** @Type("Ujamii\OpenImmo\API\Daten") */
    public ?Daten $daten = null;

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): Foto
    {
        $this->location = $location;
        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): Foto
    {
        $this->format = $format;
        return $this;
    }

    public function getDaten(): ?Daten
    {
        return $this->daten;
    }

    public function setDaten(?Daten $daten): Foto
    {
        $this->daten = $daten;
        return $this;
    }

    public function __construct(string $location = '', string $format = '', ?Daten $daten = null)
    {
        $this->location = $location;
        $this->format = $format;
        $this->daten = $daten;
    }
}
