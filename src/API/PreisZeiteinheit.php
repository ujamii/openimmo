<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PreisZeiteinheit
 * Zeiteinheit für die der Preis gilt, vorrangig bei Ferienobjekten
 * @XmlRoot("preis_zeiteinheit")
 */
class PreisZeiteinheit
{
    public const ZEITEINHEIT_TAG = 'TAG';
    public const ZEITEINHEIT_WOCHE = 'WOCHE';
    public const ZEITEINHEIT_MONAT = 'MONAT';
    public const ZEITEINHEIT_JAHR = 'JAHR';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see ZEITEINHEIT_* constants
     */
    protected string $zeiteinheit = '';

    public function getZeiteinheit(): ?string
    {
        return $this->zeiteinheit;
    }

    public function setZeiteinheit(?string $zeiteinheit): PreisZeiteinheit
    {
        $this->zeiteinheit = $zeiteinheit;
        return $this;
    }

    public function __construct(string $zeiteinheit = '')
    {
        $this->zeiteinheit = $zeiteinheit;
    }
}
