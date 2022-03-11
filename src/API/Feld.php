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
     * @var string
     * @SkipWhenEmpty
     */
    protected string $name = '';

    /**
     * @Type("string")
     * @var string
     * @SkipWhenEmpty
     */
    protected string $wert = '';

    /**
     * @XmlList(inline = true, entry = "typ")
     * @Type("array<string>")
     * @var ?\Ujamii\OpenImmo\API\string[]
     */
    protected ?array $typ = [];

    /**
     * @XmlList(inline = true, entry = "modus")
     * @Type("array<string>")
     * @var ?\Ujamii\OpenImmo\API\string[]
     */
    protected ?array $modus = [];

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

    public function getTyp(): ?array
    {
        return $this->typ;
    }

    public function setTyp(?array $typ): Feld
    {
        $this->typ = $typ;
        return $this;
    }

    public function getModus(): ?array
    {
        return $this->modus;
    }

    public function setModus(?array $modus): Feld
    {
        $this->modus = $modus;
        return $this;
    }

    public function __construct(string $name = null, string $wert = null, array $typ = null, array $modus = null)
    {
        $this->name = $name;
        $this->wert = $wert;
        $this->typ = $typ;
        $this->modus = $modus;
    }
}
