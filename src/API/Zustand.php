<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Zustand
 * Zustand des Objektes, Optionen nicht kombinierbar
 * @XmlRoot("zustand")
 */
class Zustand
{
    public const ZUSTAND_ART_ERSTBEZUG = 'ERSTBEZUG';
    public const ZUSTAND_ART_TEIL_VOLLRENOVIERUNGSBED = 'TEIL_VOLLRENOVIERUNGSBED';
    public const ZUSTAND_ART_NEUWERTIG = 'NEUWERTIG';
    public const ZUSTAND_ART_TEIL_VOLLSANIERT = 'TEIL_VOLLSANIERT';
    public const ZUSTAND_ART_TEIL_VOLLRENOVIERT = 'TEIL_VOLLRENOVIERT';
    public const ZUSTAND_ART_TEIL_SANIERT = 'TEIL_SANIERT';
    public const ZUSTAND_ART_VOLL_SANIERT = 'VOLL_SANIERT';
    public const ZUSTAND_ART_SANIERUNGSBEDUERFTIG = 'SANIERUNGSBEDUERFTIG';
    public const ZUSTAND_ART_BAUFAELLIG = 'BAUFAELLIG';
    public const ZUSTAND_ART_NACH_VEREINBARUNG = 'NACH_VEREINBARUNG';
    public const ZUSTAND_ART_MODERNISIERT = 'MODERNISIERT';
    public const ZUSTAND_ART_GEPFLEGT = 'GEPFLEGT';
    public const ZUSTAND_ART_ROHBAU = 'ROHBAU';
    public const ZUSTAND_ART_ENTKERNT = 'ENTKERNT';
    public const ZUSTAND_ART_ABRISSOBJEKT = 'ABRISSOBJEKT';
    public const ZUSTAND_ART_PROJEKTIERT = 'PROJEKTIERT';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see ZUSTAND_ART_* constants
     */
    protected ?string $zustandArt;

    public function getZustandArt(): ?string
    {
        return $this->zustandArt;
    }

    public function setZustandArt(?string $zustandArt): Zustand
    {
        $this->zustandArt = $zustandArt;
        return $this;
    }

    public function __construct(string $zustandArt = null)
    {
        $this->zustandArt = $zustandArt;
    }
}
