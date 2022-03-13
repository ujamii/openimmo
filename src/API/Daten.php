<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Daten
 * Anhangdaten
 * @XmlRoot("daten")
 */
class Daten
{
    /** @Type("string") */
    protected ?string $pfad = null;

    /** @Type("string") */
    protected ?string $anhanginhalt = null;

    public function getPfad(): ?string
    {
        return $this->pfad;
    }

    public function setPfad(?string $pfad): Daten
    {
        $this->pfad = $pfad;
        return $this;
    }

    public function getAnhanginhalt(): ?string
    {
        return $this->anhanginhalt;
    }

    public function setAnhanginhalt(?string $anhanginhalt): Daten
    {
        $this->anhanginhalt = $anhanginhalt;
        return $this;
    }

    public function __construct(?string $pfad = null, ?string $anhanginhalt = null)
    {
        $this->pfad = $pfad;
        $this->anhanginhalt = $anhanginhalt;
    }
}
