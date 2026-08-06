<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AusrichtBalkonTerrasse
 * Ausrichtung der Balkone bzw. der Terrassen, Optionen kombinierbar
 */
#[XmlRoot(name: 'ausricht_balkon_terrasse')]
class AusrichtBalkonTerrasse
{
    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'NORD')]
    protected ?bool $nord = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'OST')]
    protected ?bool $ost = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'SUED')]
    protected ?bool $sued = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'WEST')]
    protected ?bool $west = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'NORDOST')]
    protected ?bool $nordost = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'NORDWEST')]
    protected ?bool $nordwest = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'SUEDOST')]
    protected ?bool $suedost = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'SUEDWEST')]
    protected ?bool $suedwest = null;

    public function getNord(): ?bool
    {
        return $this->nord;
    }

    public function setNord(?bool $nord): AusrichtBalkonTerrasse
    {
        $this->nord = $nord;
        return $this;
    }

    public function getOst(): ?bool
    {
        return $this->ost;
    }

    public function setOst(?bool $ost): AusrichtBalkonTerrasse
    {
        $this->ost = $ost;
        return $this;
    }

    public function getSued(): ?bool
    {
        return $this->sued;
    }

    public function setSued(?bool $sued): AusrichtBalkonTerrasse
    {
        $this->sued = $sued;
        return $this;
    }

    public function getWest(): ?bool
    {
        return $this->west;
    }

    public function setWest(?bool $west): AusrichtBalkonTerrasse
    {
        $this->west = $west;
        return $this;
    }

    public function getNordost(): ?bool
    {
        return $this->nordost;
    }

    public function setNordost(?bool $nordost): AusrichtBalkonTerrasse
    {
        $this->nordost = $nordost;
        return $this;
    }

    public function getNordwest(): ?bool
    {
        return $this->nordwest;
    }

    public function setNordwest(?bool $nordwest): AusrichtBalkonTerrasse
    {
        $this->nordwest = $nordwest;
        return $this;
    }

    public function getSuedost(): ?bool
    {
        return $this->suedost;
    }

    public function setSuedost(?bool $suedost): AusrichtBalkonTerrasse
    {
        $this->suedost = $suedost;
        return $this;
    }

    public function getSuedwest(): ?bool
    {
        return $this->suedwest;
    }

    public function setSuedwest(?bool $suedwest): AusrichtBalkonTerrasse
    {
        $this->suedwest = $suedwest;
        return $this;
    }
}
