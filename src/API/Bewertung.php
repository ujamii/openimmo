<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bewertung
 * Container fÃ¼r detailierte Bewertungs Parmater
 * @XmlRoot("bewertung")
 */
class Bewertung
{
    /**
     * @XmlList(inline = true, entry = "feld")
     * @Type("array<Ujamii\OpenImmo\API\Feld>")
     * @SkipWhenEmpty
     */
    public array $feld = [];

    /**
     * Returns array of array
     */
    public function getFeld(): array
    {
        return $this->feld ?? [];
    }

    public function setFeld(array $feld): Bewertung
    {
        $this->feld = $feld;
        return $this;
    }

    public function __construct(array $feld = [])
    {
        $this->feld = $feld;
    }
}
