<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BebaubarNach
 * Bebaubar nach Bebauungsrichtlinien, Optionen nicht kombinierbar
 * @XmlRoot("bebaubar_nach")
 */
class BebaubarNach
{
    public const BEBAUBAR_ATTR_34_NACHBARSCHAFT = '34_NACHBARSCHAFT';
    public const BEBAUBAR_ATTR_35_AUSSENGEBIET = '35_AUSSENGEBIET';
    public const BEBAUBAR_ATTR_B_PLAN = 'B_PLAN';
    public const BEBAUBAR_ATTR_KEIN_BAULAND = 'KEIN BAULAND';
    public const BEBAUBAR_ATTR_BAUERWARTUNGSLAND = 'BAUERWARTUNGSLAND';
    public const BEBAUBAR_ATTR_LAENDERSPEZIFISCH = 'LAENDERSPEZIFISCH';
    public const BEBAUBAR_ATTR_BAULAND_OHNE_B_PLAN = 'BAULAND_OHNE_B_PLAN';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see BEBAUBAR_ATTR_* constants
     */
    public string $bebaubarAttr = '';

    public function getBebaubarAttr(): ?string
    {
        return $this->bebaubarAttr;
    }

    public function setBebaubarAttr(?string $bebaubarAttr): BebaubarNach
    {
        $this->bebaubarAttr = $bebaubarAttr;
        return $this;
    }

    public function __construct(string $bebaubarAttr = '')
    {
        $this->bebaubarAttr = $bebaubarAttr;
    }
}
