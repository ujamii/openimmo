<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Aktion
 * Aktion fÃ¼r Objekt. Wenn nicht vorhanden, dann "ADD", als neu.
 *  Change= Update der Objektdaten, Delete = LÃ¶schen des Objektes
 *  Referenz= Die MÃ¶glichkeit Objekte in Portalen als ÂVerkauftÂ oder ÂArchivÂ zu definieren.
 * @XmlRoot("aktion")
 */
class Aktion
{
    public const AKTIONART_CHANGE = 'CHANGE';
    public const AKTIONART_DELETE = 'DELETE';
    public const AKTIONART_REFERENZ = 'REFERENZ';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see AKTIONART_* constants
     */
    public string $aktionart = '';

    public function getAktionart(): ?string
    {
        return $this->aktionart;
    }

    public function setAktionart(?string $aktionart): Aktion
    {
        $this->aktionart = $aktionart;
        return $this;
    }

    public function __construct(string $aktionart = '')
    {
        $this->aktionart = $aktionart;
    }
}
