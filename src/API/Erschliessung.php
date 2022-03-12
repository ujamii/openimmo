<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Erschliessung
 * Stand der Erschließung, Optionen nicht kombinierbar
 *
 * @XmlRoot("erschliessung")
 */
class Erschliessung
{
    /**
     */
    public const ERSCHL_ATTR_ORTSUEBLICHERSCHLOSSEN = 'ORTSUEBLICHERSCHLOSSEN';

    /**
     */
    public const ERSCHL_ATTR_TEILERSCHLOSSEN = 'TEILERSCHLOSSEN';

    /**
     */
    public const ERSCHL_ATTR_UNERSCHLOSSEN = 'UNERSCHLOSSEN';

    /**
     */
    public const ERSCHL_ATTR_VOLLERSCHLOSSEN = 'VOLLERSCHLOSSEN';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see ERSCHL_ATTR_* constants
     * @var string
     */
    protected $erschlAttr;

    /**
     * @param string $erschlAttr Shortcut setter for erschlAttr
     */
    public function __construct(string $erschlAttr = null)
    {
        $this->erschlAttr = $erschlAttr;
    }

    /**
     * @return string
     */
    public function getErschlAttr(): ?string
    {
        return $this->erschlAttr;
    }

    /**
     * @param string $erschlAttr Setter for erschlAttr
     * @return Erschliessung
     */
    public function setErschlAttr(?string $erschlAttr)
    {
        $this->erschlAttr = $erschlAttr;
        return $this;
    }
}
