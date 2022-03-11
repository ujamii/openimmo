<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Land
 * Land
 * @XmlRoot("land")
 */
class Land
{
    public const ISO_LAND_AFG = 'AFG';
    public const ISO_LAND_ALB = 'ALB';
    public const ISO_LAND_DZA = 'DZA';
    public const ISO_LAND_ASM = 'ASM';
    public const ISO_LAND_AND = 'AND';
    public const ISO_LAND_AGO = 'AGO';
    public const ISO_LAND_AIA = 'AIA';
    public const ISO_LAND_ATG = 'ATG';
    public const ISO_LAND_ARG = 'ARG';
    public const ISO_LAND_ARM = 'ARM';
    public const ISO_LAND_ABW = 'ABW';
    public const ISO_LAND_AUS = 'AUS';
    public const ISO_LAND_AUT = 'AUT';
    public const ISO_LAND_AZE = 'AZE';
    public const ISO_LAND_BHS = 'BHS';
    public const ISO_LAND_BHR = 'BHR';
    public const ISO_LAND_BGD = 'BGD';
    public const ISO_LAND_BRB = 'BRB';
    public const ISO_LAND_BLR = 'BLR';
    public const ISO_LAND_BEL = 'BEL';
    public const ISO_LAND_BLZ = 'BLZ';
    public const ISO_LAND_BEN = 'BEN';
    public const ISO_LAND_BMU = 'BMU';
    public const ISO_LAND_BTN = 'BTN';
    public const ISO_LAND_BOL = 'BOL';
    public const ISO_LAND_BIH = 'BIH';
    public const ISO_LAND_BWA = 'BWA';
    public const ISO_LAND_BRA = 'BRA';
    public const ISO_LAND_VGB = 'VGB';
    public const ISO_LAND_BRN = 'BRN';
    public const ISO_LAND_BGR = 'BGR';
    public const ISO_LAND_BFA = 'BFA';
    public const ISO_LAND_BDI = 'BDI';
    public const ISO_LAND_KHM = 'KHM';
    public const ISO_LAND_CMR = 'CMR';
    public const ISO_LAND_CAN = 'CAN';
    public const ISO_LAND_CPV = 'CPV';
    public const ISO_LAND_CYM = 'CYM';
    public const ISO_LAND_CAF = 'CAF';
    public const ISO_LAND_TCD = 'TCD';
    public const ISO_LAND_CHL = 'CHL';
    public const ISO_LAND_CHN = 'CHN';
    public const ISO_LAND_HKG = 'HKG';
    public const ISO_LAND_MAC = 'MAC';
    public const ISO_LAND_COL = 'COL';
    public const ISO_LAND_COM = 'COM';
    public const ISO_LAND_COG = 'COG';
    public const ISO_LAND_COK = 'COK';
    public const ISO_LAND_CRI = 'CRI';
    public const ISO_LAND_CIV = 'CIV';
    public const ISO_LAND_HRV = 'HRV';
    public const ISO_LAND_CUB = 'CUB';
    public const ISO_LAND_CYP = 'CYP';
    public const ISO_LAND_CZE = 'CZE';
    public const ISO_LAND_PRK = 'PRK';
    public const ISO_LAND_COD = 'COD';
    public const ISO_LAND_DNK = 'DNK';
    public const ISO_LAND_DJI = 'DJI';
    public const ISO_LAND_DMA = 'DMA';
    public const ISO_LAND_DOM = 'DOM';
    public const ISO_LAND_TMP = 'TMP';
    public const ISO_LAND_ECU = 'ECU';
    public const ISO_LAND_EGY = 'EGY';
    public const ISO_LAND_SLV = 'SLV';
    public const ISO_LAND_GNQ = 'GNQ';
    public const ISO_LAND_ERI = 'ERI';
    public const ISO_LAND_EST = 'EST';
    public const ISO_LAND_ETH = 'ETH';
    public const ISO_LAND_FRO = 'FRO';
    public const ISO_LAND_FLK = 'FLK';
    public const ISO_LAND_FJI = 'FJI';
    public const ISO_LAND_FIN = 'FIN';
    public const ISO_LAND_FRA = 'FRA';
    public const ISO_LAND_GUF = 'GUF';
    public const ISO_LAND_PYF = 'PYF';
    public const ISO_LAND_GAB = 'GAB';
    public const ISO_LAND_GMB = 'GMB';
    public const ISO_LAND_GEO = 'GEO';
    public const ISO_LAND_DEU = 'DEU';
    public const ISO_LAND_GHA = 'GHA';
    public const ISO_LAND_GIB = 'GIB';
    public const ISO_LAND_GRC = 'GRC';
    public const ISO_LAND_GRL = 'GRL';
    public const ISO_LAND_GRD = 'GRD';
    public const ISO_LAND_GLP = 'GLP';
    public const ISO_LAND_GUM = 'GUM';
    public const ISO_LAND_GTM = 'GTM';
    public const ISO_LAND_GIN = 'GIN';
    public const ISO_LAND_GNB = 'GNB';
    public const ISO_LAND_GUY = 'GUY';
    public const ISO_LAND_HTI = 'HTI';
    public const ISO_LAND_VAT = 'VAT';
    public const ISO_LAND_HND = 'HND';
    public const ISO_LAND_HUN = 'HUN';
    public const ISO_LAND_ISL = 'ISL';
    public const ISO_LAND_IND = 'IND';
    public const ISO_LAND_IDN = 'IDN';
    public const ISO_LAND_IRN = 'IRN';
    public const ISO_LAND_IRQ = 'IRQ';
    public const ISO_LAND_IRL = 'IRL';
    public const ISO_LAND_ISR = 'ISR';
    public const ISO_LAND_ITA = 'ITA';
    public const ISO_LAND_JAM = 'JAM';
    public const ISO_LAND_JPN = 'JPN';
    public const ISO_LAND_JOR = 'JOR';
    public const ISO_LAND_KAZ = 'KAZ';
    public const ISO_LAND_KEN = 'KEN';
    public const ISO_LAND_KIR = 'KIR';
    public const ISO_LAND_KWT = 'KWT';
    public const ISO_LAND_KGZ = 'KGZ';
    public const ISO_LAND_LAO = 'LAO';
    public const ISO_LAND_LVA = 'LVA';
    public const ISO_LAND_LBN = 'LBN';
    public const ISO_LAND_LSO = 'LSO';
    public const ISO_LAND_LBR = 'LBR';
    public const ISO_LAND_LBY = 'LBY';
    public const ISO_LAND_LIE = 'LIE';
    public const ISO_LAND_LTU = 'LTU';
    public const ISO_LAND_LUX = 'LUX';
    public const ISO_LAND_MDG = 'MDG';
    public const ISO_LAND_MWI = 'MWI';
    public const ISO_LAND_MYS = 'MYS';
    public const ISO_LAND_MDV = 'MDV';
    public const ISO_LAND_MLI = 'MLI';
    public const ISO_LAND_MLT = 'MLT';
    public const ISO_LAND_MHL = 'MHL';
    public const ISO_LAND_MTQ = 'MTQ';
    public const ISO_LAND_MRT = 'MRT';
    public const ISO_LAND_MUS = 'MUS';
    public const ISO_LAND_MEX = 'MEX';
    public const ISO_LAND_FSM = 'FSM';
    public const ISO_LAND_MCO = 'MCO';
    public const ISO_LAND_MNG = 'MNG';
    public const ISO_LAND_MNE = 'MNE';
    public const ISO_LAND_MSR = 'MSR';
    public const ISO_LAND_MAR = 'MAR';
    public const ISO_LAND_MOZ = 'MOZ';
    public const ISO_LAND_MMR = 'MMR';
    public const ISO_LAND_NAM = 'NAM';
    public const ISO_LAND_NRU = 'NRU';
    public const ISO_LAND_NPL = 'NPL';
    public const ISO_LAND_NLD = 'NLD';
    public const ISO_LAND_ANT = 'ANT';
    public const ISO_LAND_NCL = 'NCL';
    public const ISO_LAND_NZL = 'NZL';
    public const ISO_LAND_NIC = 'NIC';
    public const ISO_LAND_NER = 'NER';
    public const ISO_LAND_NGA = 'NGA';
    public const ISO_LAND_NIU = 'NIU';
    public const ISO_LAND_NFK = 'NFK';
    public const ISO_LAND_MNP = 'MNP';
    public const ISO_LAND_NOR = 'NOR';
    public const ISO_LAND_PSE = 'PSE';
    public const ISO_LAND_OMN = 'OMN';
    public const ISO_LAND_PAK = 'PAK';
    public const ISO_LAND_PLW = 'PLW';
    public const ISO_LAND_PAN = 'PAN';
    public const ISO_LAND_PNG = 'PNG';
    public const ISO_LAND_PRY = 'PRY';
    public const ISO_LAND_PER = 'PER';
    public const ISO_LAND_PHL = 'PHL';
    public const ISO_LAND_PCN = 'PCN';
    public const ISO_LAND_POL = 'POL';
    public const ISO_LAND_PRT = 'PRT';
    public const ISO_LAND_PRI = 'PRI';
    public const ISO_LAND_QAT = 'QAT';
    public const ISO_LAND_KOR = 'KOR';
    public const ISO_LAND_MDA = 'MDA';
    public const ISO_LAND_REU = 'REU';
    public const ISO_LAND_ROM = 'ROM';
    public const ISO_LAND_RUS = 'RUS';
    public const ISO_LAND_RWA = 'RWA';
    public const ISO_LAND_SHN = 'SHN';
    public const ISO_LAND_KNA = 'KNA';
    public const ISO_LAND_LCA = 'LCA';
    public const ISO_LAND_SPM = 'SPM';
    public const ISO_LAND_VCT = 'VCT';
    public const ISO_LAND_WSM = 'WSM';
    public const ISO_LAND_SMR = 'SMR';
    public const ISO_LAND_STP = 'STP';
    public const ISO_LAND_SAU = 'SAU';
    public const ISO_LAND_SEN = 'SEN';
    public const ISO_LAND_SRB = 'SRB';
    public const ISO_LAND_SYC = 'SYC';
    public const ISO_LAND_SLE = 'SLE';
    public const ISO_LAND_SGP = 'SGP';
    public const ISO_LAND_SMX = 'SMX';
    public const ISO_LAND_SVK = 'SVK';
    public const ISO_LAND_SVN = 'SVN';
    public const ISO_LAND_SLB = 'SLB';
    public const ISO_LAND_SOM = 'SOM';
    public const ISO_LAND_ZAF = 'ZAF';
    public const ISO_LAND_ESP = 'ESP';
    public const ISO_LAND_LKA = 'LKA';
    public const ISO_LAND_SDN = 'SDN';
    public const ISO_LAND_SUR = 'SUR';
    public const ISO_LAND_SJM = 'SJM';
    public const ISO_LAND_SWZ = 'SWZ';
    public const ISO_LAND_SWE = 'SWE';
    public const ISO_LAND_CHE = 'CHE';
    public const ISO_LAND_SYR = 'SYR';
    public const ISO_LAND_TWN = 'TWN';
    public const ISO_LAND_TJK = 'TJK';
    public const ISO_LAND_THA = 'THA';
    public const ISO_LAND_MKD = 'MKD';
    public const ISO_LAND_TGO = 'TGO';
    public const ISO_LAND_TKL = 'TKL';
    public const ISO_LAND_TON = 'TON';
    public const ISO_LAND_TTO = 'TTO';
    public const ISO_LAND_TUN = 'TUN';
    public const ISO_LAND_TUR = 'TUR';
    public const ISO_LAND_TKM = 'TKM';
    public const ISO_LAND_TCA = 'TCA';
    public const ISO_LAND_TUV = 'TUV';
    public const ISO_LAND_UGA = 'UGA';
    public const ISO_LAND_UKR = 'UKR';
    public const ISO_LAND_ARE = 'ARE';
    public const ISO_LAND_GBR = 'GBR';
    public const ISO_LAND_TZA = 'TZA';
    public const ISO_LAND_USA = 'USA';
    public const ISO_LAND_VIR = 'VIR';
    public const ISO_LAND_URY = 'URY';
    public const ISO_LAND_UZB = 'UZB';
    public const ISO_LAND_VUT = 'VUT';
    public const ISO_LAND_VEN = 'VEN';
    public const ISO_LAND_VNM = 'VNM';
    public const ISO_LAND_WLF = 'WLF';
    public const ISO_LAND_ESH = 'ESH';
    public const ISO_LAND_YEM = 'YEM';
    public const ISO_LAND_YUG = 'YUG';
    public const ISO_LAND_ZMB = 'ZMB';
    public const ISO_LAND_ZWE = 'ZWE';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see ISO_LAND_* constants
     */
    protected ?string $isoLand;

    public function getIsoLand(): ?string
    {
        return $this->isoLand;
    }

    public function setIsoLand(?string $isoLand): Land
    {
        $this->isoLand = $isoLand;
        return $this;
    }

    public function __construct(string $isoLand = null)
    {
        $this->isoLand = $isoLand;
    }
}
