<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ErschliessungUmfang
 * Detailbeschreibung der Massnahmen
 */
#[XmlRoot(name: 'erschliessung_umfang')]
class ErschliessungUmfang
{
    public const ERSCHL_ATTR_GAS = 'GAS';
    public const ERSCHL_ATTR_WASSER = 'WASSER';
    public const ERSCHL_ATTR_STROM = 'STROM';
    public const ERSCHL_ATTR_TK = 'TK';

    /**
     * optional
     * @see ERSCHL_ATTR_* constants
     */
    #[Type('string')]
    #[XmlAttribute]
    protected string $erschlAttr = '';

    public function getErschlAttr(): ?string
    {
        return $this->erschlAttr;
    }

    public function setErschlAttr(?string $erschlAttr): ErschliessungUmfang
    {
        $this->erschlAttr = $erschlAttr;
        return $this;
    }

    public function __construct(string $erschlAttr = '')
    {
        $this->erschlAttr = $erschlAttr;
    }
}
