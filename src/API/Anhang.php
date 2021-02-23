<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anhang
 * Element für Anhänge
 *
 * @XmlRoot("anhang")
 */
class Anhang
{
    /**
     */
    public const GRUPPE_ANBIETERLOGO = 'ANBIETERLOGO';

    /**
     */
    public const GRUPPE_ANBOBJURL = 'ANBOBJURL';

    /**
     */
    public const GRUPPE_AUSSENANSICHTEN = 'AUSSENANSICHTEN';

    /**
     */
    public const GRUPPE_BILD = 'BILD';

    /**
     */
    public const GRUPPE_DOKUMENTE = 'DOKUMENTE';

    /**
     */
    public const GRUPPE_EPASS_SKALA = 'EPASS-SKALA';

    /**
     */
    public const GRUPPE_FILM = 'FILM';

    /**
     */
    public const GRUPPE_FILMLINK = 'FILMLINK';

    /**
     */
    public const GRUPPE_GRUNDRISS = 'GRUNDRISS';

    /**
     */
    public const GRUPPE_INNENANSICHTEN = 'INNENANSICHTEN';

    /**
     */
    public const GRUPPE_KARTEN_LAGEPLAN = 'KARTEN_LAGEPLAN';

    /**
     */
    public const GRUPPE_LINKS = 'LINKS';

    /**
     */
    public const GRUPPE_PANORAMA = 'PANORAMA';

    /**
     */
    public const GRUPPE_QRCODE = 'QRCODE';

    /**
     */
    public const GRUPPE_TITELBILD = 'TITELBILD';

    /**
     */
    public const LOCATION_EXTERN = 'EXTERN';

    /**
     */
    public const LOCATION_INTERN = 'INTERN';

    /**
     */
    public const LOCATION_REMOTE = 'REMOTE';

    /**
     * @Type("string")
     * @var string
     */
    protected $anhangtitel;

    /**
     * @Type("Ujamii\OpenImmo\API\Check")
     * @var Check
     */
    protected $check;

    /**
     * @Type("Ujamii\OpenImmo\API\Daten")
     * @var Daten
     */
    protected $daten;

    /**
     * @Type("string")
     * @var string
     */
    protected $format;

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see GRUPPE_* constants
     * @var string
     */
    protected $gruppe;

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
     * @param string $gruppe Shortcut setter for gruppe
     * @param string $anhangtitel Shortcut setter for anhangtitel
     * @param string $format Shortcut setter for format
     * @param Check $check Shortcut setter for check
     * @param Daten $daten Shortcut setter for daten
     */
    public function __construct(string $location = null, string $gruppe = null, string $anhangtitel = null, string $format = null, Check $check = null, Daten $daten = null)
    {
        $this->location = $location;
        $this->gruppe = $gruppe;
        $this->anhangtitel = $anhangtitel;
        $this->format = $format;
        $this->check = $check;
        $this->daten = $daten;
    }

    /**
     * @return string
     */
    public function getAnhangtitel(): ?string
    {
        return $this->anhangtitel;
    }

    /**
     * @return Check
     */
    public function getCheck(): ?Check
    {
        return $this->check;
    }

    /**
     * @return Daten
     */
    public function getDaten(): Daten
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
    public function getGruppe(): ?string
    {
        return $this->gruppe;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $anhangtitel Setter for anhangtitel
     * @return Anhang
     */
    public function setAnhangtitel(?string $anhangtitel)
    {
        $this->anhangtitel = $anhangtitel;
        return $this;
    }

    /**
     * @param Check $check Setter for check
     * @return Anhang
     */
    public function setCheck(?Check $check)
    {
        $this->check = $check;
        return $this;
    }

    /**
     * @param Daten $daten Setter for daten
     * @return Anhang
     */
    public function setDaten(Daten $daten)
    {
        $this->daten = $daten;
        return $this;
    }

    /**
     * @param string $format Setter for format
     * @return Anhang
     */
    public function setFormat(string $format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @param string $gruppe Setter for gruppe
     * @return Anhang
     */
    public function setGruppe(?string $gruppe)
    {
        $this->gruppe = $gruppe;
        return $this;
    }

    /**
     * @param string $location Setter for location
     * @return Anhang
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
        return $this;
    }
}
