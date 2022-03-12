<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Check
 * Angabe von Daten für die Prüfung auf ein Update
 *
 * @XmlRoot("check")
 */
class Check
{
    /**
     */
    public const CTYPE_DATETIME = 'DATETIME';

    /**
     */
    public const CTYPE_ETAG = 'ETAG';

    /**
     */
    public const CTYPE_MD5 = 'MD5';

    /**
     * required
     *
     * @Type("string")
     * @XmlAttribute
     * @see CTYPE_* constants
     * @var string
     */
    protected $ctype;

    /**
     * @Inline
     * @Type("DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>")
     * @var \DateTime
     */
    protected $value;

    /**
     * @param string $ctype Shortcut setter for ctype
     * @param \DateTime $value Shortcut setter for value
     */
    public function __construct(string $ctype = null, \DateTime $value = null)
    {
        $this->ctype = $ctype;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getCtype(): string
    {
        return $this->ctype;
    }

    /**
     * @return \DateTime
     */
    public function getValue(): ?\DateTime
    {
        return $this->value;
    }

    /**
     * @param string $ctype Setter for ctype
     * @return Check
     */
    public function setCtype(string $ctype)
    {
        $this->ctype = $ctype;
        return $this;
    }

    /**
     * @param \DateTime $value Setter for value
     * @return Check
     */
    public function setValue(?\DateTime $value)
    {
        $this->value = $value;
        return $this;
    }
}
