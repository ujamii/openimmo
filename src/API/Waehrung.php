<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Waehrung
 * Währung
 * @XmlRoot("waehrung")
 */
class Waehrung
{
    public const ISO_WAEHRUNG_AED = 'AED';
    public const ISO_WAEHRUNG_AFA = 'AFA';
    public const ISO_WAEHRUNG_ALL = 'ALL';
    public const ISO_WAEHRUNG_AMD = 'AMD';
    public const ISO_WAEHRUNG_ANG = 'ANG';
    public const ISO_WAEHRUNG_AON = 'AON';
    public const ISO_WAEHRUNG_ARP = 'ARP';
    public const ISO_WAEHRUNG_ATS = 'ATS';
    public const ISO_WAEHRUNG_AUD = 'AUD';
    public const ISO_WAEHRUNG_AWF = 'AWF';
    public const ISO_WAEHRUNG_AZM = 'AZM';
    public const ISO_WAEHRUNG_BAK = 'BAK';
    public const ISO_WAEHRUNG_BBD = 'BBD';
    public const ISO_WAEHRUNG_BDT = 'BDT';
    public const ISO_WAEHRUNG_BEF = 'BEF';
    public const ISO_WAEHRUNG_BGL = 'BGL';
    public const ISO_WAEHRUNG_BHD = 'BHD';
    public const ISO_WAEHRUNG_BIF = 'BIF';
    public const ISO_WAEHRUNG_BMD = 'BMD';
    public const ISO_WAEHRUNG_BND = 'BND';
    public const ISO_WAEHRUNG_BOB = 'BOB';
    public const ISO_WAEHRUNG_BES = 'BES';
    public const ISO_WAEHRUNG_BRL = 'BRL';
    public const ISO_WAEHRUNG_BSD = 'BSD';
    public const ISO_WAEHRUNG_BTR = 'BTR';
    public const ISO_WAEHRUNG_BWP = 'BWP';
    public const ISO_WAEHRUNG_BYR = 'BYR';
    public const ISO_WAEHRUNG_BZD = 'BZD';
    public const ISO_WAEHRUNG_CAD = 'CAD';
    public const ISO_WAEHRUNG_CDF = 'CDF';
    public const ISO_WAEHRUNG_CHF = 'CHF';
    public const ISO_WAEHRUNG_CLP = 'CLP';
    public const ISO_WAEHRUNG_CNY = 'CNY';
    public const ISO_WAEHRUNG_COP = 'COP';
    public const ISO_WAEHRUNG_CRC = 'CRC';
    public const ISO_WAEHRUNG_CZK = 'CZK';
    public const ISO_WAEHRUNG_CUP = 'CUP';
    public const ISO_WAEHRUNG_CVE = 'CVE';
    public const ISO_WAEHRUNG_CUW = 'CUW';
    public const ISO_WAEHRUNG_CYP = 'CYP';
    public const ISO_WAEHRUNG_DEM = 'DEM';
    public const ISO_WAEHRUNG_DJF = 'DJF';
    public const ISO_WAEHRUNG_DKK = 'DKK';
    public const ISO_WAEHRUNG_DOP = 'DOP';
    public const ISO_WAEHRUNG_DZD = 'DZD';
    public const ISO_WAEHRUNG_ECS = 'ECS';
    public const ISO_WAEHRUNG_EEK = 'EEK';
    public const ISO_WAEHRUNG_EGP = 'EGP';
    public const ISO_WAEHRUNG_ERN = 'ERN';
    public const ISO_WAEHRUNG_ESP = 'ESP';
    public const ISO_WAEHRUNG_ETB = 'ETB';
    public const ISO_WAEHRUNG_EUR = 'EUR';
    public const ISO_WAEHRUNG_FIM = 'FIM';
    public const ISO_WAEHRUNG_FJD = 'FJD';
    public const ISO_WAEHRUNG_FKP = 'FKP';
    public const ISO_WAEHRUNG_FRF = 'FRF';
    public const ISO_WAEHRUNG_GBP = 'GBP';
    public const ISO_WAEHRUNG_GEL = 'GEL';
    public const ISO_WAEHRUNG_GHC = 'GHC';
    public const ISO_WAEHRUNG_GIP = 'GIP';
    public const ISO_WAEHRUNG_GMD = 'GMD';
    public const ISO_WAEHRUNG_GNF = 'GNF';
    public const ISO_WAEHRUNG_GRD = 'GRD';
    public const ISO_WAEHRUNG_GTQ = 'GTQ';
    public const ISO_WAEHRUNG_GYD = 'GYD';
    public const ISO_WAEHRUNG_HKD = 'HKD';
    public const ISO_WAEHRUNG_HNL = 'HNL';
    public const ISO_WAEHRUNG_HRK = 'HRK';
    public const ISO_WAEHRUNG_HTG = 'HTG';
    public const ISO_WAEHRUNG_HUF = 'HUF';
    public const ISO_WAEHRUNG_IDR = 'IDR';
    public const ISO_WAEHRUNG_IEP = 'IEP';
    public const ISO_WAEHRUNG_ILS = 'ILS';
    public const ISO_WAEHRUNG_INR = 'INR';
    public const ISO_WAEHRUNG_IQD = 'IQD';
    public const ISO_WAEHRUNG_IRR = 'IRR';
    public const ISO_WAEHRUNG_ISK = 'ISK';
    public const ISO_WAEHRUNG_ITL = 'ITL';
    public const ISO_WAEHRUNG_JMD = 'JMD';
    public const ISO_WAEHRUNG_JOD = 'JOD';
    public const ISO_WAEHRUNG_JPY = 'JPY';
    public const ISO_WAEHRUNG_KES = 'KES';
    public const ISO_WAEHRUNG_KGS = 'KGS';
    public const ISO_WAEHRUNG_KHR = 'KHR';
    public const ISO_WAEHRUNG_KMF = 'KMF';
    public const ISO_WAEHRUNG_KPW = 'KPW';
    public const ISO_WAEHRUNG_KRW = 'KRW';
    public const ISO_WAEHRUNG_KWD = 'KWD';
    public const ISO_WAEHRUNG_KYD = 'KYD';
    public const ISO_WAEHRUNG_KZT = 'KZT';
    public const ISO_WAEHRUNG_LAK = 'LAK';
    public const ISO_WAEHRUNG_LBP = 'LBP';
    public const ISO_WAEHRUNG_LKR = 'LKR';
    public const ISO_WAEHRUNG_LRD = 'LRD';
    public const ISO_WAEHRUNG_LSL = 'LSL';
    public const ISO_WAEHRUNG_LTL = 'LTL';
    public const ISO_WAEHRUNG_LUF = 'LUF';
    public const ISO_WAEHRUNG_LVL = 'LVL';
    public const ISO_WAEHRUNG_LYD = 'LYD';
    public const ISO_WAEHRUNG_MAD = 'MAD';
    public const ISO_WAEHRUNG_MDL = 'MDL';
    public const ISO_WAEHRUNG_MGF = 'MGF';
    public const ISO_WAEHRUNG_MMK = 'MMK';
    public const ISO_WAEHRUNG_MNT = 'MNT';
    public const ISO_WAEHRUNG_MOP = 'MOP';
    public const ISO_WAEHRUNG_MRO = 'MRO';
    public const ISO_WAEHRUNG_MTL = 'MTL';
    public const ISO_WAEHRUNG_MUR = 'MUR';
    public const ISO_WAEHRUNG_MVR = 'MVR';
    public const ISO_WAEHRUNG_MWK = 'MWK';
    public const ISO_WAEHRUNG_MXP = 'MXP';
    public const ISO_WAEHRUNG_MYR = 'MYR';
    public const ISO_WAEHRUNG_MZM = 'MZM';
    public const ISO_WAEHRUNG_NAD = 'NAD';
    public const ISO_WAEHRUNG_NGN = 'NGN';
    public const ISO_WAEHRUNG_NIO = 'NIO';
    public const ISO_WAEHRUNG_NLG = 'NLG';
    public const ISO_WAEHRUNG_NOK = 'NOK';
    public const ISO_WAEHRUNG_NPR = 'NPR';
    public const ISO_WAEHRUNG_NZD = 'NZD';
    public const ISO_WAEHRUNG_OMR = 'OMR';
    public const ISO_WAEHRUNG_PAB = 'PAB';
    public const ISO_WAEHRUNG_PEN = 'PEN';
    public const ISO_WAEHRUNG_PGK = 'PGK';
    public const ISO_WAEHRUNG_PHP = 'PHP';
    public const ISO_WAEHRUNG_PKR = 'PKR';
    public const ISO_WAEHRUNG_PLZ = 'PLZ';
    public const ISO_WAEHRUNG_PTE = 'PTE';
    public const ISO_WAEHRUNG_PYG = 'PYG';
    public const ISO_WAEHRUNG_QAR = 'QAR';
    public const ISO_WAEHRUNG_ROL = 'ROL';
    public const ISO_WAEHRUNG_RUR = 'RUR';
    public const ISO_WAEHRUNG_RWF = 'RWF';
    public const ISO_WAEHRUNG_SAR = 'SAR';
    public const ISO_WAEHRUNG_SBD = 'SBD';
    public const ISO_WAEHRUNG_SBL = 'SBL';
    public const ISO_WAEHRUNG_SCR = 'SCR';
    public const ISO_WAEHRUNG_SDD = 'SDD';
    public const ISO_WAEHRUNG_SEK = 'SEK';
    public const ISO_WAEHRUNG_SGD = 'SGD';
    public const ISO_WAEHRUNG_SHP = 'SHP';
    public const ISO_WAEHRUNG_SIT = 'SIT';
    public const ISO_WAEHRUNG_SKK = 'SKK';
    public const ISO_WAEHRUNG_SLL = 'SLL';
    public const ISO_WAEHRUNG_SOS = 'SOS';
    public const ISO_WAEHRUNG_SRG = 'SRG';
    public const ISO_WAEHRUNG_STD = 'STD';
    public const ISO_WAEHRUNG_SVC = 'SVC';
    public const ISO_WAEHRUNG_SYP = 'SYP';
    public const ISO_WAEHRUNG_SZL = 'SZL';
    public const ISO_WAEHRUNG_THB = 'THB';
    public const ISO_WAEHRUNG_TJR = 'TJR';
    public const ISO_WAEHRUNG_TMM = 'TMM';
    public const ISO_WAEHRUNG_TND = 'TND';
    public const ISO_WAEHRUNG_TOP = 'TOP';
    public const ISO_WAEHRUNG_TRL = 'TRL';
    public const ISO_WAEHRUNG_TTD = 'TTD';
    public const ISO_WAEHRUNG_TWD = 'TWD';
    public const ISO_WAEHRUNG_TZS = 'TZS';
    public const ISO_WAEHRUNG_UAH = 'UAH';
    public const ISO_WAEHRUNG_UGX = 'UGX';
    public const ISO_WAEHRUNG_USD = 'USD';
    public const ISO_WAEHRUNG_UYU = 'UYU';
    public const ISO_WAEHRUNG_UZS = 'UZS';
    public const ISO_WAEHRUNG_VEB = 'VEB';
    public const ISO_WAEHRUNG_VND = 'VND';
    public const ISO_WAEHRUNG_VUV = 'VUV';
    public const ISO_WAEHRUNG_WST = 'WST';
    public const ISO_WAEHRUNG_XAF = 'XAF';
    public const ISO_WAEHRUNG_XAG = 'XAG';
    public const ISO_WAEHRUNG_XAU = 'XAU';
    public const ISO_WAEHRUNG_XCD = 'XCD';
    public const ISO_WAEHRUNG_XCO = 'XCO';
    public const ISO_WAEHRUNG_XDR = 'XDR';
    public const ISO_WAEHRUNG_XPD = 'XPD';
    public const ISO_WAEHRUNG_XPF = 'XPF';
    public const ISO_WAEHRUNG_XPT = 'XPT';
    public const ISO_WAEHRUNG_YER = 'YER';
    public const ISO_WAEHRUNG_YUN = 'YUN';
    public const ISO_WAEHRUNG_ZAR = 'ZAR';
    public const ISO_WAEHRUNG_ZMK = 'ZMK';
    public const ISO_WAEHRUNG_ZWD = 'ZWD';

    /**
     * @Type("string")
     * @XmlAttribute
     * optional
     * @see ISO_WAEHRUNG_* constants
     */
    protected ?string $isoWaehrung;

    public function getIsoWaehrung(): ?string
    {
        return $this->isoWaehrung;
    }

    public function setIsoWaehrung(?string $isoWaehrung): Waehrung
    {
        $this->isoWaehrung = $isoWaehrung;
        return $this;
    }

    public function __construct(string $isoWaehrung = null)
    {
        $this->isoWaehrung = $isoWaehrung;
    }
}
