<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AngeschlGastronomie
 * Welcher Art ist die angeschlossene Gastronomie, Optionen kombinierbar
 */
#[XmlRoot(name: 'angeschl_gastronomie')]
class AngeschlGastronomie
{
    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'HOTELRESTAURANT')]
    protected ?bool $hotelrestaurant = null;

    /** optional */
    #[Type('bool')]
    #[XmlAttribute]
    #[SerializedName(name: 'BAR')]
    protected ?bool $bar = null;

    public function getHotelrestaurant(): ?bool
    {
        return $this->hotelrestaurant;
    }

    public function setHotelrestaurant(?bool $hotelrestaurant): AngeschlGastronomie
    {
        $this->hotelrestaurant = $hotelrestaurant;
        return $this;
    }

    public function getBar(): ?bool
    {
        return $this->bar;
    }

    public function setBar(?bool $bar): AngeschlGastronomie
    {
        $this->bar = $bar;
        return $this;
    }

    public function __construct(?bool $hotelrestaurant = null, ?bool $bar = null)
    {
        $this->hotelrestaurant = $hotelrestaurant;
        $this->bar = $bar;
    }
}
