<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bad
 * Welche Eigenschaft besitzt das Bad, Optionen kombinierbar
 */
#[XmlRoot(name: 'bad')]
class Bad
{
    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'DUSCHE')]
    protected ?bool $dusche = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'WANNE')]
    protected ?bool $wanne = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'FENSTER')]
    protected ?bool $fenster = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'BIDET')]
    protected ?bool $bidet = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'PISSOIR')]
    protected ?bool $pissoir = null;

    public function getDusche(): ?bool
    {
        return $this->dusche;
    }

    public function setDusche(?bool $dusche): Bad
    {
        $this->dusche = $dusche;
        return $this;
    }

    public function getWanne(): ?bool
    {
        return $this->wanne;
    }

    public function setWanne(?bool $wanne): Bad
    {
        $this->wanne = $wanne;
        return $this;
    }

    public function getFenster(): ?bool
    {
        return $this->fenster;
    }

    public function setFenster(?bool $fenster): Bad
    {
        $this->fenster = $fenster;
        return $this;
    }

    public function getBidet(): ?bool
    {
        return $this->bidet;
    }

    public function setBidet(?bool $bidet): Bad
    {
        $this->bidet = $bidet;
        return $this;
    }

    public function getPissoir(): ?bool
    {
        return $this->pissoir;
    }

    public function setPissoir(?bool $pissoir): Bad
    {
        $this->pissoir = $pissoir;
        return $this;
    }

    public function __construct(
        ?bool $dusche = null,
        ?bool $wanne = null,
        ?bool $fenster = null,
        ?bool $bidet = null,
        ?bool $pissoir = null,
    ) {
        $this->dusche = $dusche;
        $this->wanne = $wanne;
        $this->fenster = $fenster;
        $this->bidet = $bidet;
        $this->pissoir = $pissoir;
    }
}
