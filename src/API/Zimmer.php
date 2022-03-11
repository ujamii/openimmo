<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Zimmer
 * Objekart / Typ f. Zimmer
 * @XmlRoot("zimmer")
 */
class Zimmer
{
    public const ZIMMERTYP_ZIMMER = 'ZIMMER';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see ZIMMERTYP_* constants
     */
    protected ?string $zimmertyp;

    public function getZimmertyp(): string
    {
        return $this->zimmertyp;
    }

    public function setZimmertyp(string $zimmertyp): Zimmer
    {
        $this->zimmertyp = $zimmertyp;
        return $this;
    }

    public function __construct(string $zimmertyp = null)
    {
        $this->zimmertyp = $zimmertyp;
    }
}
