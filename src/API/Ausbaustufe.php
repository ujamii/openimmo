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
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("AUSBAUHAUS")
     * @var bool
     */
    protected $ausbauhaus;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("BAUSATZHAUS")
     * @var bool
     */
    protected $bausatzhaus;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SCHLUESSELFERTIGMITBODENPLATTE")
     * @var bool
     */
    protected $schluesselfertigmitbodenplatte;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SCHLUESSELFERTIGMITKELLER")
     * @var bool
     */
    protected $schluesselfertigmitkeller;

    /**
     * optional
     *
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("SCHLUESSELFERTIGOHNEBODENPLATTE")
     * @var bool
     */
    protected $schluesselfertigohnebodenplatte;

    /**
     * @param bool $bausatzhaus Shortcut setter for bausatzhaus
     * @param bool $ausbauhaus Shortcut setter for ausbauhaus
     * @param bool $schluesselfertigmitkeller Shortcut setter for schluesselfertigmitkeller
     * @param bool $schluesselfertigohnebodenplatte Shortcut setter for schluesselfertigohnebodenplatte
     * @param bool $schluesselfertigmitbodenplatte Shortcut setter for schluesselfertigmitbodenplatte
     */
    public function __construct(bool $bausatzhaus = null, bool $ausbauhaus = null, bool $schluesselfertigmitkeller = null, bool $schluesselfertigohnebodenplatte = null, bool $schluesselfertigmitbodenplatte = null)
    {
        $this->bausatzhaus = $bausatzhaus;
        $this->ausbauhaus = $ausbauhaus;
        $this->schluesselfertigmitkeller = $schluesselfertigmitkeller;
        $this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;
        $this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;
    }

    /**
     * @return bool
     */
    public function getAusbauhaus(): ?bool
    {
        return $this->ausbauhaus;
    }

    /**
     * @return bool
     */
    public function getBausatzhaus(): ?bool
    {
        return $this->bausatzhaus;
    }

    /**
     * @return bool
     */
    public function getSchluesselfertigmitbodenplatte(): ?bool
    {
        return $this->schluesselfertigmitbodenplatte;
    }

    /**
     * @return bool
     */
    public function getSchluesselfertigmitkeller(): ?bool
    {
        return $this->schluesselfertigmitkeller;
    }

    /**
     * @return bool
     */
    public function getSchluesselfertigohnebodenplatte(): ?bool
    {
        return $this->schluesselfertigohnebodenplatte;
    }

    /**
     * @param bool $ausbauhaus Setter for ausbauhaus
     * @return Ausbaustufe
     */
    public function setAusbauhaus(?bool $ausbauhaus)
    {
        $this->ausbauhaus = $ausbauhaus;
        return $this;
    }

    /**
     * @param bool $bausatzhaus Setter for bausatzhaus
     * @return Ausbaustufe
     */
    public function setBausatzhaus(?bool $bausatzhaus)
    {
        $this->bausatzhaus = $bausatzhaus;
        return $this;
    }

    /**
     * @param bool $schluesselfertigmitbodenplatte Setter for schluesselfertigmitbodenplatte
     * @return Ausbaustufe
     */
    public function setSchluesselfertigmitbodenplatte(?bool $schluesselfertigmitbodenplatte)
    {
        $this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;
        return $this;
    }

    /**
     * @param bool $schluesselfertigmitkeller Setter for schluesselfertigmitkeller
     * @return Ausbaustufe
     */
    public function setSchluesselfertigmitkeller(?bool $schluesselfertigmitkeller)
    {
        $this->schluesselfertigmitkeller = $schluesselfertigmitkeller;
        return $this;
    }

    /**
     * @param bool $schluesselfertigohnebodenplatte Setter for schluesselfertigohnebodenplatte
     * @return Ausbaustufe
     */
    public function setSchluesselfertigohnebodenplatte(?bool $schluesselfertigohnebodenplatte)
    {
        $this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;
        return $this;
    }
}
