<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Haus
 * Objektart / Typ f. Haus
 *
 * @XmlRoot("haus")
 */
class Haus
{
    /**
     */
    public const HAUSTYP_APARTMENTHAUS = 'APARTMENTHAUS';

    /**
     */
    public const HAUSTYP_BAUERNHAUS = 'BAUERNHAUS';

    /**
     */
    public const HAUSTYP_BERGHUETTE = 'BERGHUETTE';

    /**
     */
    public const HAUSTYP_BUNGALOW = 'BUNGALOW';

    /**
     */
    public const HAUSTYP_BURG = 'BURG';

    /**
     */
    public const HAUSTYP_CHALET = 'CHALET';

    /**
     */
    public const HAUSTYP_DOPPELHAUSHAELFTE = 'DOPPELHAUSHAELFTE';

    /**
     */
    public const HAUSTYP_EINFAMILIENHAUS = 'EINFAMILIENHAUS';

    /**
     */
    public const HAUSTYP_FERIENHAUS = 'FERIENHAUS';

    /**
     */
    public const HAUSTYP_FERTIGHAUS = 'FERTIGHAUS';

    /**
     */
    public const HAUSTYP_FINCA = 'FINCA';

    /**
     */
    public const HAUSTYP_HERRENHAUS = 'HERRENHAUS';

    /**
     */
    public const HAUSTYP_KEINE_ANGABE = 'KEINE_ANGABE';

    /**
     */
    public const HAUSTYP_LANDHAUS = 'LANDHAUS';

    /**
     */
    public const HAUSTYP_LAUBE_DATSCHE_GARTENHAUS = 'LAUBE-DATSCHE-GARTENHAUS';

    /**
     */
    public const HAUSTYP_MEHRFAMILIENHAUS = 'MEHRFAMILIENHAUS';

    /**
     */
    public const HAUSTYP_REIHENECK = 'REIHENECK';

    /**
     */
    public const HAUSTYP_REIHENEND = 'REIHENEND';

    /**
     */
    public const HAUSTYP_REIHENHAUS = 'REIHENHAUS';

    /**
     */
    public const HAUSTYP_REIHENMITTEL = 'REIHENMITTEL';

    /**
     */
    public const HAUSTYP_RESTHOF = 'RESTHOF';

    /**
     */
    public const HAUSTYP_RUSTICO = 'RUSTICO';

    /**
     */
    public const HAUSTYP_SCHLOSS = 'SCHLOSS';

    /**
     */
    public const HAUSTYP_STADTHAUS = 'STADTHAUS';

    /**
     */
    public const HAUSTYP_STRANDHAUS = 'STRANDHAUS';

    /**
     */
    public const HAUSTYP_VILLA = 'VILLA';

    /**
     */
    public const HAUSTYP_ZWEIFAMILIENHAUS = 'ZWEIFAMILIENHAUS';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see HAUSTYP_* constants
     * @var string
     */
    protected $haustyp;

    /**
     * @param string $haustyp Shortcut setter for haustyp
     */
    public function __construct(string $haustyp = null)
    {
        $this->haustyp = $haustyp;
    }

    /**
     * @return string
     */
    public function getHaustyp(): ?string
    {
        return $this->haustyp;
    }

    /**
     * @param string $haustyp Setter for haustyp
     * @return Haus
     */
    public function setHaustyp(?string $haustyp)
    {
        $this->haustyp = $haustyp;
        return $this;
    }
}
