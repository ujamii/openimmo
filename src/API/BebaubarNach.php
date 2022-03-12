<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BebaubarNach
 * Bebaubar nach Bebauungsrichtlinien, Optionen nicht kombinierbar
 *
 * @XmlRoot("bebaubar_nach")
 */
class BebaubarNach
{
    /**
     */
    public const BEBAUBAR_ATTR_34_NACHBARSCHAFT = '34_NACHBARSCHAFT';

    /**
     */
    public const BEBAUBAR_ATTR_35_AUSSENGEBIET = '35_AUSSENGEBIET';

    /**
     */
    public const BEBAUBAR_ATTR_B_PLAN = 'B_PLAN';

    /**
     */
    public const BEBAUBAR_ATTR_BAUERWARTUNGSLAND = 'BAUERWARTUNGSLAND';

    /**
     */
    public const BEBAUBAR_ATTR_BAULAND_OHNE_B_PLAN = 'BAULAND_OHNE_B_PLAN';

    /**
     */
    public const BEBAUBAR_ATTR_KEIN_BAULAND = 'KEIN BAULAND';

    /**
     */
    public const BEBAUBAR_ATTR_LAENDERSPEZIFISCH = 'LAENDERSPEZIFISCH';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see BEBAUBAR_ATTR_* constants
     * @var string
     */
    protected $bebaubarAttr;

    /**
     * @param string $bebaubarAttr Shortcut setter for bebaubarAttr
     */
    public function __construct(string $bebaubarAttr = null)
    {
        $this->bebaubarAttr = $bebaubarAttr;
    }

    /**
     * @return string
     */
    public function getBebaubarAttr(): ?string
    {
        return $this->bebaubarAttr;
    }

    /**
     * @param string $bebaubarAttr Setter for bebaubarAttr
     * @return BebaubarNach
     */
    public function setBebaubarAttr(?string $bebaubarAttr)
    {
        $this->bebaubarAttr = $bebaubarAttr;
        return $this;
    }
}
