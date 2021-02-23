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
 *
 * @XmlRoot("objekt_text")
 */
class ObjektText
{
    /**
     * required
     *
     * @Type("string")
     * @XmlAttribute
     * @var string
     */
    protected $lang;

    /**
     * @Inline
     * @Type("string")
     * @var string
     */
    protected $value;

    /**
     * @param string $lang Shortcut setter for lang
     * @param string $value Shortcut setter for value
     */
    public function __construct(string $lang = null, string $value = null)
    {
        $this->lang = $lang;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $lang Setter for lang
     * @return ObjektText
     */
    public function setLang(string $lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @param string $value Setter for value
     * @return ObjektText
     */
    public function setValue(?string $value)
    {
        $this->value = $value;
        return $this;
    }
}
