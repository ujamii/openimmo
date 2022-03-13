<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ProvisionTeilen
 * Aufteilen der provision bei Partnergeschäften. Auch "A Meta" Geschäft. Attribut zeigt, wie der Wert angegeben wird: fester wert, prozent, oder Text Information
 * @XmlRoot("provision_teilen")
 */
class ProvisionTeilen
{
    public const WERT_ABSOLUT = 'absolut';
    public const WERT_PROZENT = 'prozent';
    public const WERT_TEXT = 'text';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see WERT_* constants
     */
    protected string $wert = '';

    /**
     * @Inline
     * @Type("string")
     */
    protected ?string $value = null;

    public function getWert(): ?string
    {
        return $this->wert;
    }

    public function setWert(?string $wert): ProvisionTeilen
    {
        $this->wert = $wert;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): ProvisionTeilen
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $wert = '', ?string $value = null)
    {
        $this->wert = $wert;
        $this->value = $value;
    }
}
