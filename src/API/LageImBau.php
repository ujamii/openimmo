<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageImBau
 * Angabe über die Lage der Immobilie im Gesamtgebäude, Optionen kombinierbar
 */
#[XmlRoot(name: 'lage_im_bau')]
class LageImBau
{
    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'LINKS')]
    protected ?bool $links = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'RECHTS')]
    protected ?bool $rechts = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'VORNE')]
    protected ?bool $vorne = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'HINTEN')]
    protected ?bool $hinten = null;

    public function getLinks(): ?bool
    {
        return $this->links;
    }

    public function setLinks(?bool $links): LageImBau
    {
        $this->links = $links;
        return $this;
    }

    public function getRechts(): ?bool
    {
        return $this->rechts;
    }

    public function setRechts(?bool $rechts): LageImBau
    {
        $this->rechts = $rechts;
        return $this;
    }

    public function getVorne(): ?bool
    {
        return $this->vorne;
    }

    public function setVorne(?bool $vorne): LageImBau
    {
        $this->vorne = $vorne;
        return $this;
    }

    public function getHinten(): ?bool
    {
        return $this->hinten;
    }

    public function setHinten(?bool $hinten): LageImBau
    {
        $this->hinten = $hinten;
        return $this;
    }

    public function __construct(?bool $links = null, ?bool $rechts = null, ?bool $vorne = null, ?bool $hinten = null)
    {
        $this->links = $links;
        $this->rechts = $rechts;
        $this->vorne = $vorne;
        $this->hinten = $hinten;
    }
}
