<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausbaustufe
 */
#[XmlRoot(name: 'ausbaustufe')]
class Ausbaustufe
{
    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'BAUSATZHAUS')]
    protected ?bool $bausatzhaus = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'AUSBAUHAUS')]
    protected ?bool $ausbauhaus = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'SCHLUESSELFERTIGMITKELLER')]
    protected ?bool $schluesselfertigmitkeller = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'SCHLUESSELFERTIGOHNEBODENPLATTE')]
    protected ?bool $schluesselfertigohnebodenplatte = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'SCHLUESSELFERTIGMITBODENPLATTE')]
    protected ?bool $schluesselfertigmitbodenplatte = null;

    public function getBausatzhaus(): ?bool
    {
        return $this->bausatzhaus;
    }

    public function setBausatzhaus(?bool $bausatzhaus): Ausbaustufe
    {
        $this->bausatzhaus = $bausatzhaus;
        return $this;
    }

    public function getAusbauhaus(): ?bool
    {
        return $this->ausbauhaus;
    }

    public function setAusbauhaus(?bool $ausbauhaus): Ausbaustufe
    {
        $this->ausbauhaus = $ausbauhaus;
        return $this;
    }

    public function getSchluesselfertigmitkeller(): ?bool
    {
        return $this->schluesselfertigmitkeller;
    }

    public function setSchluesselfertigmitkeller(?bool $schluesselfertigmitkeller): Ausbaustufe
    {
        $this->schluesselfertigmitkeller = $schluesselfertigmitkeller;
        return $this;
    }

    public function getSchluesselfertigohnebodenplatte(): ?bool
    {
        return $this->schluesselfertigohnebodenplatte;
    }

    public function setSchluesselfertigohnebodenplatte(?bool $schluesselfertigohnebodenplatte): Ausbaustufe
    {
        $this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;
        return $this;
    }

    public function getSchluesselfertigmitbodenplatte(): ?bool
    {
        return $this->schluesselfertigmitbodenplatte;
    }

    public function setSchluesselfertigmitbodenplatte(?bool $schluesselfertigmitbodenplatte): Ausbaustufe
    {
        $this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;
        return $this;
    }

    public function __construct(
        ?bool $bausatzhaus = null,
        ?bool $ausbauhaus = null,
        ?bool $schluesselfertigmitkeller = null,
        ?bool $schluesselfertigohnebodenplatte = null,
        ?bool $schluesselfertigmitbodenplatte = null,
    ) {
        $this->bausatzhaus = $bausatzhaus;
        $this->ausbauhaus = $ausbauhaus;
        $this->schluesselfertigmitkeller = $schluesselfertigmitkeller;
        $this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;
        $this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;
    }
}
