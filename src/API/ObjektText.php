<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ObjektText
 * Beschreibung in anderer Sprache. "lang" Attribut muss dann vorhanden sein. W3- Language Code
 * Description in other Languages
 * @XmlRoot("objekt_text")
 */
class ObjektText
{
    /**
     * @Type("string")
     * @XmlAttribute
     * required
     */
    public string $lang = '';

    /**
     * @Inline
     * @Type("string")
     */
    public ?string $value = null;

    public function getLang(): string
    {
        return $this->lang;
    }

    public function setLang(string $lang): ObjektText
    {
        $this->lang = $lang;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): ObjektText
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $lang = '', ?string $value = null)
    {
        $this->lang = $lang;
        $this->value = $value;
    }
}
