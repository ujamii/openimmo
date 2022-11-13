<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Master
 * Frei wÃ¤hlbare alphanumerische Kennung um Objekte einem Ãbergeordneten Objekt zuzuordnen.
 * Das Eltern Objekte hat in "gruppen_kennung" die gleiche ID wie "master". Anwendung z.b. in Neubau Projekten.
 * Damit die Anzeige des Master Objektes gesteuert werden kann, wird im Master ein Flag
 *  visible eingesetzt. Das Attribut ist dann zwingend anzugeben
 * @XmlRoot("master")
 */
class Master
{
    /**
     * @Type("bool")
     * @XmlAttribute
     * required
     */
    public bool $visible = false;

    /**
     * @Inline
     * @Type("string")
     */
    public ?string $value = null;

    public function getVisible(): bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): Master
    {
        $this->visible = $visible;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): Master
    {
        $this->value = $value;
        return $this;
    }

    public function __construct(bool $visible = false, ?string $value = null)
    {
        $this->visible = $visible;
        $this->value = $value;
    }
}
