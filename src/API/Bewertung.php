<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bewertung
 * Container für detailierte Bewertungs Parmater
 * @XmlRoot("bewertung")
 */
class Bewertung
{
    /**
     * @XmlList(inline = true, entry = "feld")
     * @Type("array<Ujamii\OpenImmo\API\Feld>")
     * @var ?\Ujamii\OpenImmo\API\Feld[]
     */
    protected ?array $feld = [];

    public function getFeld(): ?array
    {
        return $this->feld;
    }

    public function setFeld(?array $feld): Bewertung
    {
        $this->feld = $feld;
        return $this;
    }

    public function __construct(array $feld = null)
    {
        $this->feld = $feld;
    }
}
