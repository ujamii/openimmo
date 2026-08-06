<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geokoordinaten
 * Geokoordinaten der Immobilie, Pflichtfeld, alternativ mit Ort, PLZ
 */
#[XmlRoot(name: 'geokoordinaten')]
class Geokoordinaten
{
    /** required */
    #[Type('float')]
    #[XmlAttribute]
    protected float $breitengrad = 0.0;

    /** required */
    #[Type('float')]
    #[XmlAttribute]
    protected float $laengengrad = 0.0;

    public function getBreitengrad(): float
    {
        return $this->breitengrad;
    }

    public function setBreitengrad(float $breitengrad): Geokoordinaten
    {
        $this->breitengrad = $breitengrad;
        return $this;
    }

    public function getLaengengrad(): float
    {
        return $this->laengengrad;
    }

    public function setLaengengrad(float $laengengrad): Geokoordinaten
    {
        $this->laengengrad = $laengengrad;
        return $this;
    }

    public function __construct(float $breitengrad = 0.0, float $laengengrad = 0.0)
    {
        $this->breitengrad = $breitengrad;
        $this->laengengrad = $laengengrad;
    }
}
