<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Einzelhandel
 * Objektart / Typ f. Handel
 * @XmlRoot("einzelhandel")
 */
class Einzelhandel
{
    public const HANDEL_TYP_LADENLOKAL = 'LADENLOKAL';
    public const HANDEL_TYP_EINZELHANDELSLADEN = 'EINZELHANDELSLADEN';
    public const HANDEL_TYP_VERBRAUCHERMARKT = 'VERBRAUCHERMARKT';
    public const HANDEL_TYP_EINKAUFSZENTRUM = 'EINKAUFSZENTRUM';
    public const HANDEL_TYP_KAUFHAUS = 'KAUFHAUS';
    public const HANDEL_TYP_FACTORY_OUTLET = 'FACTORY_OUTLET';
    public const HANDEL_TYP_KIOSK = 'KIOSK';
    public const HANDEL_TYP_VERKAUFSFLAECHE = 'VERKAUFSFLAECHE';
    public const HANDEL_TYP_AUSSTELLUNGSFLAECHE = 'AUSSTELLUNGSFLAECHE';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see HANDEL_TYP_* constants
     */
    public string $handelTyp = '';

    public function getHandelTyp(): ?string
    {
        return $this->handelTyp;
    }

    public function setHandelTyp(?string $handelTyp): Einzelhandel
    {
        $this->handelTyp = $handelTyp;
        return $this;
    }

    public function __construct(string $handelTyp = '')
    {
        $this->handelTyp = $handelTyp;
    }
}
