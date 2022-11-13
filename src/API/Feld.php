<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Feld
 *
 * @XmlRoot("feld")
 */
class Feld
{
    /**
     * @Type("string")
     * @SkipWhenEmpty
     */
    public string $name = '';

    /**
     * @Type("string")
     * @SkipWhenEmpty
     */
    public string $wert = '';

    /**
     * @XmlList(inline = true, entry = "typ")
     * @Type("array<string>")
     * @SkipWhenEmpty
     */
    public array $typ = [];

    /**
     * @XmlList(inline = true, entry = "modus")
     * @Type("array<string>")
     * @SkipWhenEmpty
     */
    public array $modus = [];

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Feld
    {
        $this->name = $name;
        return $this;
    }

    public function getWert(): string
    {
        return $this->wert;
    }

    public function setWert(string $wert): Feld
    {
        $this->wert = $wert;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getTyp(): array
    {
        return $this->typ ?? [];
    }

    public function setTyp(array $typ): Feld
    {
        $this->typ = $typ;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getModus(): array
    {
        return $this->modus ?? [];
    }

    public function setModus(array $modus): Feld
    {
        $this->modus = $modus;
        return $this;
    }

    public function __construct(string $name = '', string $wert = '', array $typ = [], array $modus = [])
    {
        $this->name = $name;
        $this->wert = $wert;
        $this->typ = $typ;
        $this->modus = $modus;
    }
}
