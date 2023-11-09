<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Openimmo
 * Dokument Element
 * Root Element
 * @XmlRoot("openimmo")
 */
class Openimmo
{
    /** @Type("Ujamii\OpenImmo\API\Uebertragung") */
    protected ?Uebertragung $uebertragung = null;

    /**
     * @XmlList(inline = true, entry = "anbieter")
     * @Type("array<Ujamii\OpenImmo\API\Anbieter>")
     * @SkipWhenEmpty
     */
    protected array $anbieter = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>")
     * @SkipWhenEmpty
     */
    protected array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>")
     * @SkipWhenEmpty
     */
    protected array $userDefinedAnyfield = [];

    public function getUebertragung(): ?Uebertragung
    {
        return $this->uebertragung;
    }

    public function setUebertragung(?Uebertragung $uebertragung): Openimmo
    {
        $this->uebertragung = $uebertragung;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getAnbieter(): array
    {
        return $this->anbieter ?? [];
    }

    public function setAnbieter(array $anbieter): Openimmo
    {
        $this->anbieter = $anbieter;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Openimmo
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield ?? [];
    }

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Openimmo
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    public function __construct(
        ?Uebertragung $uebertragung = null,
        array $anbieter = [],
        array $userDefinedSimplefield = [],
        array $userDefinedAnyfield = [],
    ) {
        $this->uebertragung = $uebertragung;
        $this->anbieter = $anbieter;
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        $this->userDefinedAnyfield = $userDefinedAnyfield;
    }
}
