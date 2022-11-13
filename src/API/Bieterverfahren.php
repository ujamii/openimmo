<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bieterverfahren
 * Angaben zum Bieterverfahren
 * @XmlRoot("bieterverfahren")
 */
class Bieterverfahren
{
    /** @Type("DateTime<'Y-m-d'>") */
    public ?\DateTime $beginnAngebotsphase = null;

    /** @Type("DateTime<'Y-m-d'>") */
    public ?\DateTime $besichtigungstermin = null;

    /** @Type("DateTime<'Y-m-d'>") */
    public ?\DateTime $besichtigungstermin2 = null;

    /** @Type("DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>") */
    public ?\DateTime $beginnBietzeit = null;

    /** @Type("DateTime<'Y-m-d'>") */
    public ?\DateTime $endeBietzeit = null;

    /** @Type("bool") */
    public ?bool $hoechstgebotZeigen = null;

    /** @Type("float") */
    public ?float $mindestpreis = null;

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>")
     * @SkipWhenEmpty
     */
    public array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>")
     * @SkipWhenEmpty
     */
    public array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>")
     * @SkipWhenEmpty
     */
    public array $userDefinedExtend = [];

    public function getBeginnAngebotsphase(): ?\DateTime
    {
        return $this->beginnAngebotsphase;
    }

    public function setBeginnAngebotsphase(?\DateTime $beginnAngebotsphase): Bieterverfahren
    {
        $this->beginnAngebotsphase = $beginnAngebotsphase;
        return $this;
    }

    public function getBesichtigungstermin(): ?\DateTime
    {
        return $this->besichtigungstermin;
    }

    public function setBesichtigungstermin(?\DateTime $besichtigungstermin): Bieterverfahren
    {
        $this->besichtigungstermin = $besichtigungstermin;
        return $this;
    }

    public function getBesichtigungstermin2(): ?\DateTime
    {
        return $this->besichtigungstermin2;
    }

    public function setBesichtigungstermin2(?\DateTime $besichtigungstermin2): Bieterverfahren
    {
        $this->besichtigungstermin2 = $besichtigungstermin2;
        return $this;
    }

    public function getBeginnBietzeit(): ?\DateTime
    {
        return $this->beginnBietzeit;
    }

    public function setBeginnBietzeit(?\DateTime $beginnBietzeit): Bieterverfahren
    {
        $this->beginnBietzeit = $beginnBietzeit;
        return $this;
    }

    public function getEndeBietzeit(): ?\DateTime
    {
        return $this->endeBietzeit;
    }

    public function setEndeBietzeit(?\DateTime $endeBietzeit): Bieterverfahren
    {
        $this->endeBietzeit = $endeBietzeit;
        return $this;
    }

    public function getHoechstgebotZeigen(): ?bool
    {
        return $this->hoechstgebotZeigen;
    }

    public function setHoechstgebotZeigen(?bool $hoechstgebotZeigen): Bieterverfahren
    {
        $this->hoechstgebotZeigen = $hoechstgebotZeigen;
        return $this;
    }

    public function getMindestpreis(): ?float
    {
        return $this->mindestpreis;
    }

    public function setMindestpreis(?float $mindestpreis): Bieterverfahren
    {
        $this->mindestpreis = $mindestpreis;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Bieterverfahren
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Bieterverfahren
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend ?? [];
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Bieterverfahren
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
