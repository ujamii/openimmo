<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedExtend
 */
#[XmlRoot(name: 'user_defined_extend')]
class UserDefinedExtend
{
    #[XmlList(entry: 'feld', inline: true)]
    #[Type('array<Ujamii\OpenImmo\API\Feld>')]
    #[SkipWhenEmpty]
    protected array $feld = [];

    /**
     * Returns array of array
     */
    public function getFeld(): array
    {
        return $this->feld;
    }

    public function setFeld(array $feld): UserDefinedExtend
    {
        $this->feld = $feld;
        return $this;
    }

    public function __construct(array $feld = [])
    {
        $this->feld = $feld;
    }
}
