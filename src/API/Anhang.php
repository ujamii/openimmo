<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anhang
 * Element für Anhänge
 * @XmlRoot("anhang")
 */
class Anhang
{
    public const LOCATION_INTERN = 'INTERN';
    public const LOCATION_EXTERN = 'EXTERN';
    public const LOCATION_REMOTE = 'REMOTE';
    public const GRUPPE_TITELBILD = 'TITELBILD';
    public const GRUPPE_INNENANSICHTEN = 'INNENANSICHTEN';
    public const GRUPPE_AUSSENANSICHTEN = 'AUSSENANSICHTEN';
    public const GRUPPE_GRUNDRISS = 'GRUNDRISS';
    public const GRUPPE_KARTEN_LAGEPLAN = 'KARTEN_LAGEPLAN';
    public const GRUPPE_ANBIETERLOGO = 'ANBIETERLOGO';
    public const GRUPPE_BILD = 'BILD';
    public const GRUPPE_DOKUMENTE = 'DOKUMENTE';
    public const GRUPPE_LINKS = 'LINKS';
    public const GRUPPE_PANORAMA = 'PANORAMA';
    public const GRUPPE_QRCODE = 'QRCODE';
    public const GRUPPE_FILM = 'FILM';
    public const GRUPPE_FILMLINK = 'FILMLINK';
    public const GRUPPE_EPASS_SKALA = 'EPASS-SKALA';
    public const GRUPPE_ANBOBJURL = 'ANBOBJURL';

    /**
     * @Type("string")
     * @XmlAttribute
     * required
     * @see LOCATION_* constants
     */
    protected ?string $location;

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see GRUPPE_* constants
     */
    protected ?string $gruppe;

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $anhangtitel = null;

    /**
     * @Type("string")
     * @var string
     * @SkipWhenEmpty
     */
    protected string $format = '';

    /**
     * @Type("Ujamii\OpenImmo\API\Check")
     * @var ?\Ujamii\OpenImmo\API\Check
     */
    protected ?Check $check = null;

    /**
     * @Type("Ujamii\OpenImmo\API\Daten")
     * @var ?\Ujamii\OpenImmo\API\Daten
     */
    protected ?Daten $daten = null;

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): Anhang
    {
        $this->location = $location;
        return $this;
    }

    public function getGruppe(): string
    {
        return $this->gruppe;
    }

    public function setGruppe(string $gruppe): Anhang
    {
        $this->gruppe = $gruppe;
        return $this;
    }

    public function getAnhangtitel(): ?string
    {
        return $this->anhangtitel;
    }

    public function setAnhangtitel(?string $anhangtitel): Anhang
    {
        $this->anhangtitel = $anhangtitel;
        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): Anhang
    {
        $this->format = $format;
        return $this;
    }

    public function getCheck(): ?Check
    {
        return $this->check;
    }

    public function setCheck(?Check $check): Anhang
    {
        $this->check = $check;
        return $this;
    }

    public function getDaten(): ?Daten
    {
        return $this->daten;
    }

    public function setDaten(?Daten $daten): Anhang
    {
        $this->daten = $daten;
        return $this;
    }

    public function __construct(
        string $location = null,
        string $gruppe = null,
        string $anhangtitel = null,
        string $format = null,
        \Ujamii\OpenImmo\API\Check $check = null,
        \Ujamii\OpenImmo\API\Daten $daten = null
    ) {
        $this->location = $location;
        $this->gruppe = $gruppe;
        $this->anhangtitel = $anhangtitel;
        $this->format = $format;
        $this->check = $check;
        $this->daten = $daten;
    }
}
