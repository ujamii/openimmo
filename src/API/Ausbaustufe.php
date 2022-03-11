<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausbaustufe
 *
 * @XmlRoot("ausbaustufe")
 */
class Ausbaustufe
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("BAUSATZHAUS")
     * optional
     */
    protected ?bool $bausatzhaus;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("AUSBAUHAUS")
     * optional
     */
    protected ?bool $ausbauhaus;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SCHLUESSELFERTIGMITKELLER")
     * optional
     */
    protected ?bool $schluesselfertigmitkeller;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SCHLUESSELFERTIGOHNEBODENPLATTE")
     * optional
     */
    protected ?bool $schluesselfertigohnebodenplatte;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SCHLUESSELFERTIGMITBODENPLATTE")
     * optional
     */
    protected ?bool $schluesselfertigmitbodenplatte;

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
        bool $bausatzhaus = null,
        bool $ausbauhaus = null,
        bool $schluesselfertigmitkeller = null,
        bool $schluesselfertigohnebodenplatte = null,
        bool $schluesselfertigmitbodenplatte = null
    ) {
        $this->bausatzhaus = $bausatzhaus;
        $this->ausbauhaus = $ausbauhaus;
        $this->schluesselfertigmitkeller = $schluesselfertigmitkeller;
        $this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;
        $this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;
    }
}
