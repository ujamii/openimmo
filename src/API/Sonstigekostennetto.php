<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstigekostennetto
 * Anganen bei Miet-Objekten, UmSt. im Attribut.
 */
#[XmlRoot(name: 'sonstigekostennetto')]
class Sonstigekostennetto
{
    /** optional */
    #[Type('float')]
    #[XmlAttribute]
    protected ?float $sonstigekostenust = null;

    #[Inline]
    #[Type('float')]
    protected ?float $value = null;

    public function getSonstigekostenust(): ?float
    {
        return $this->sonstigekostenust;
    }

    public function setSonstigekostenust(?float $sonstigekostenust): Sonstigekostennetto
    {
        $this->sonstigekostenust = $sonstigekostenust;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Sonstigekostennetto
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(?float $sonstigekostenust = null, ?float $value = null)
    {
        $this->sonstigekostenust = $sonstigekostenust;
        $this->value = $value;
    }
}
