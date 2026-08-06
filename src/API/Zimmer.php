<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Zimmer
 * Objekart / Typ f. Zimmer
 */
#[XmlRoot(name: 'zimmer')]
class Zimmer
{
    public const ZIMMERTYP_ZIMMER = 'ZIMMER';

    /**
     * optional
     * @see ZIMMERTYP_* constants
     */
    #[Type('string')]
    #[XmlAttribute]
    protected string $zimmertyp = '';

    public function getZimmertyp(): ?string
    {
        return $this->zimmertyp;
    }

    public function setZimmertyp(?string $zimmertyp): Zimmer
    {
        $this->zimmertyp = $zimmertyp;
        return $this;
    }

    public function __construct(string $zimmertyp = '')
    {
        $this->zimmertyp = $zimmertyp;
    }
}
