<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Check
 * Angabe von Daten fÃ¼r die PrÃ¼fung auf ein Update
 * @XmlRoot("check")
 */
class Check
{
    public const CTYPE_MD5 = 'MD5';
    public const CTYPE_DATETIME = 'DATETIME';
    public const CTYPE_ETAG = 'ETAG';

    /**
     * @Type("string")
     * @XmlAttribute
     * required
     * @see CTYPE_* constants
     */
    public string $ctype = '';

    /**
     * @Inline
     * @Type("DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>")
     */
    public ?\DateTime $value = null;

    public function getCtype(): string
    {
        return $this->ctype;
    }

    public function setCtype(string $ctype): Check
    {
        $this->ctype = $ctype;
        return $this;
    }

    public function getValue(): ?\DateTime
    {
        return $this->value;
    }

    public function setValue(?\DateTime $value): Check
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(string $ctype = '', ?\DateTime $value = null)
    {
        $this->ctype = $ctype;
        $this->value = $value;
    }
}
