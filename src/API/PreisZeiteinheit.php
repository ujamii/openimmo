<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PreisZeiteinheit
 * Zeiteinheit für die der Preis gilt, vorrangig bei Ferienobjekten
 */
#[XmlRoot(name: 'preis_zeiteinheit')]
class PreisZeiteinheit
{
    public const ZEITEINHEIT_TAG = 'TAG';
    public const ZEITEINHEIT_WOCHE = 'WOCHE';
    public const ZEITEINHEIT_MONAT = 'MONAT';
    public const ZEITEINHEIT_JAHR = 'JAHR';

    /**
     * optional
     * @see ZEITEINHEIT_* constants
     */
    #[Type('string')]
    #[XmlAttribute]
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
