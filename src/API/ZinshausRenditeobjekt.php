<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ZinshausRenditeobjekt
 * Objektyp / Typ f. Zins und Renditehäuser
 *
 * @XmlRoot("zinshaus_renditeobjekt")
 */
class ZinshausRenditeobjekt
{
    /**
     */
    public const ZINS_TYP_BETREUTES_WOHNEN = 'BETREUTES-WOHNEN';

    /**
     */
    public const ZINS_TYP_BUEROGEBAEUDE = 'BUEROGEBAEUDE';

    /**
     */
    public const ZINS_TYP_EINKAUFSCENTREN = 'EINKAUFSCENTREN';

    /**
     */
    public const ZINS_TYP_GESCHAEFTSHAUS = 'GESCHAEFTSHAUS';

    /**
     */
    public const ZINS_TYP_INDUSTRIEANLAGEN = 'INDUSTRIEANLAGEN';

    /**
     */
    public const ZINS_TYP_MEHRFAMILIENHAUS = 'MEHRFAMILIENHAUS';

    /**
     */
    public const ZINS_TYP_PFLEGEHEIM = 'PFLEGEHEIM';

    /**
     */
    public const ZINS_TYP_SANATORIUM = 'SANATORIUM';

    /**
     */
    public const ZINS_TYP_SB_MAERKTE = 'SB_MAERKTE';

    /**
     */
    public const ZINS_TYP_SENIORENHEIM = 'SENIORENHEIM';

    /**
     */
    public const ZINS_TYP_VERBRAUCHERMAERKTE = 'VERBRAUCHERMAERKTE';

    /**
     */
    public const ZINS_TYP_WOHN_UND_GESCHAEFTSHAUS = 'WOHN_UND_GESCHAEFTSHAUS';

    /**
     */
    public const ZINS_TYP_WOHNANLAGEN = 'WOHNANLAGEN';

    /**
     * optional
     *
     * @Type("string")
     * @XmlAttribute
     * @see ZINS_TYP_* constants
     * @var string
     */
    protected $zinsTyp;

    /**
     * @param string $zinsTyp Shortcut setter for zinsTyp
     */
    public function __construct(string $zinsTyp = null)
    {
        $this->zinsTyp = $zinsTyp;
    }

    /**
     * @return string
     */
    public function getZinsTyp(): ?string
    {
        return $this->zinsTyp;
    }

    /**
     * @param string $zinsTyp Setter for zinsTyp
     * @return ZinshausRenditeobjekt
     */
    public function setZinsTyp(?string $zinsTyp)
    {
        $this->zinsTyp = $zinsTyp;
        return $this;
    }
}
