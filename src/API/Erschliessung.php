<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Erschliessung
 * Stand der Erschließung, Optionen nicht kombinierbar
 * @XmlRoot("erschliessung")
 */
class Erschliessung
{
    public const ERSCHL_ATTR_UNERSCHLOSSEN = 'UNERSCHLOSSEN';
    public const ERSCHL_ATTR_TEILERSCHLOSSEN = 'TEILERSCHLOSSEN';
    public const ERSCHL_ATTR_VOLLERSCHLOSSEN = 'VOLLERSCHLOSSEN';
    public const ERSCHL_ATTR_ORTSUEBLICHERSCHLOSSEN = 'ORTSUEBLICHERSCHLOSSEN';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see ERSCHL_ATTR_* constants
     */
    protected string $erschlAttr = '';

    public function getErschlAttr(): ?string
    {
        return $this->erschlAttr;
    }

    public function setErschlAttr(?string $erschlAttr): Erschliessung
    {
        $this->erschlAttr = $erschlAttr;
        return $this;
    }

    public function __construct(string $erschlAttr = '')
    {
        $this->erschlAttr = $erschlAttr;
    }
}
