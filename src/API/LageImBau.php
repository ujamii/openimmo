<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageImBau
 * Angabe über die Lage der Immobilie im Gesamtgebäude, Optionen kombinierbar
 * @XmlRoot("lage_im_bau")
 */
class LageImBau
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("LINKS")
     * optional
     */
    protected ?bool $links;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("RECHTS")
     * optional
     */
    protected ?bool $rechts;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("VORNE")
     * optional
     */
    protected ?bool $vorne;

    /**
     * @Type("bool")
     * @XmlAttribute
     * @SerializedName("HINTEN")
     * optional
     */
    protected ?bool $hinten;

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

    public function __construct(bool $links = null, bool $rechts = null, bool $vorne = null, bool $hinten = null)
    {
        $this->links = $links;
        $this->rechts = $rechts;
        $this->vorne = $vorne;
        $this->hinten = $hinten;
    }
}
