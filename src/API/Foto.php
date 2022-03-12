<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Foto
 * Foto bei der Kontaktperson. Datentyp ähnlich "Anhang"
 * foto from the kontakt person of the sender
 *
 * @XmlRoot("foto")
 */
class Foto
{
    /**
     */
    public const LOCATION_EXTERN = 'EXTERN';

    /**
     */
    public const LOCATION_REMOTE = 'REMOTE';

    /**
     * @Type("Ujamii\OpenImmo\API\Daten")
     * @var Daten
     */
    protected $daten;

    /**
     * @Type("string")
     * @SkipWhenEmpty
     * @var string
     */
    protected $format = '';

    /**
     * required
     *
     * @Type("string")
     * @XmlAttribute
     * @see LOCATION_* constants
     * @var string
     */
    protected $location;

    /**
     * @param string $location Shortcut setter for location
     * @param string $format Shortcut setter for format
     * @param Daten $daten Shortcut setter for daten
     */
    public function __construct(string $location = null, string $format = '', Daten $daten = null)
    {
        $this->location = $location;
        $this->format = $format;
        $this->daten = $daten;
    }

    /**
     * @return Daten
     */
    public function getDaten(): ?Daten
    {
        return $this->daten;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param Daten $daten Setter for daten
     * @return Foto
     */
    public function setDaten(?Daten $daten)
    {
        $this->daten = $daten;
        return $this;
    }

    /**
     * @param string $format Setter for format
     * @return Foto
     */
    public function setFormat(string $format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @param string $location Setter for location
     * @return Foto
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
        return $this;
    }
}
