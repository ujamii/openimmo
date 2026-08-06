<?php

declare(strict_types=1);

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Alter
 * Ist es ein Neu- oder Altbau, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'alter')]
class Alter
{
    public const ALTER_ATTR_ALTBAU = 'ALTBAU';
    public const ALTER_ATTR_NEUBAU = 'NEUBAU';

    /**
     * optional
     * @see ALTER_ATTR_* constants
     */
    #[Type('string')]
    #[XmlAttribute]
    protected string $alterAttr = '';

    public function getAlterAttr(): ?string
    {
        return $this->alterAttr;
    }

    public function setAlterAttr(?string $alterAttr): Alter
    {
        $this->alterAttr = $alterAttr;
        return $this;
    }

    public function __construct(string $alterAttr = '')
    {
        $this->alterAttr = $alterAttr;
    }
}
