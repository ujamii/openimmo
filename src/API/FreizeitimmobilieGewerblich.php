<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class FreizeitimmobilieGewerblich
 * Objektart / Typ f. gew. Freizeitimmobilen
 */
#[XmlRoot(name: 'freizeitimmobilie_gewerblich')]
class FreizeitimmobilieGewerblich
{
    public const FREIZEIT_TYP_SPORTANLAGEN = 'SPORTANLAGEN';
    public const FREIZEIT_TYP_VERGNUEGUNGSPARKS_UND_CENTER = 'VERGNUEGUNGSPARKS_UND_CENTER';
    public const FREIZEIT_TYP_FREIZEITANLAGE = 'FREIZEITANLAGE';

    /**
     * optional
     * @see FREIZEIT_TYP_* constants
     */
    #[Type('string')]
    #[XmlAttribute]
    protected string $freizeitTyp = '';

    public function getFreizeitTyp(): ?string
    {
        return $this->freizeitTyp;
    }

    public function setFreizeitTyp(?string $freizeitTyp): FreizeitimmobilieGewerblich
    {
        $this->freizeitTyp = $freizeitTyp;
        return $this;
    }

    public function __construct(string $freizeitTyp = '')
    {
        $this->freizeitTyp = $freizeitTyp;
    }
}
