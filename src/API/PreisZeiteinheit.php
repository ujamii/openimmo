<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PreisZeiteinheit
 * Zeiteinheit für die der Preis gilt, vorrangig bei Ferienobjekten
 *
 * @XmlRoot("preis_zeiteinheit")
 */
class PreisZeiteinheit
{
    /**
     */
    public const ZEITEINHEIT_JAHR = 'JAHR';

    /**
     */
    public const ZEITEINHEIT_MONAT = 'MONAT';

    /**
     */
    public const ZEITEINHEIT_TAG = 'TAG';

    /**
     */
    public const ZEITEINHEIT_WOCHE = 'WOCHE';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see ZEITEINHEIT_* constants
     * @var string
     */
    protected $zeiteinheit;

    /**
     * @param string $zeiteinheit Shortcut setter for zeiteinheit
     */
    public function __construct(string $zeiteinheit = null)
    {
        $this->zeiteinheit = $zeiteinheit;
    }

    /**
     * @return string
     */
    public function getZeiteinheit(): ?string
    {
        return $this->zeiteinheit;
    }

    /**
     * @param string $zeiteinheit Setter for zeiteinheit
     * @return PreisZeiteinheit
     */
    public function setZeiteinheit(?string $zeiteinheit)
    {
        $this->zeiteinheit = $zeiteinheit;
        return $this;
    }
}
