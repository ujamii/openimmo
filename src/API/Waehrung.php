<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Waehrung
 * Währung
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("waehrung") 
 */
class Waehrung {

	/**
	 */
	const ISO_WAEHRUNG_AED = 'AED';

	/**
	 */
	const ISO_WAEHRUNG_AFA = 'AFA';

	/**
	 */
	const ISO_WAEHRUNG_ALL = 'ALL';

	/**
	 */
	const ISO_WAEHRUNG_AMD = 'AMD';

	/**
	 */
	const ISO_WAEHRUNG_ANG = 'ANG';

	/**
	 */
	const ISO_WAEHRUNG_AON = 'AON';

	/**
	 */
	const ISO_WAEHRUNG_ARP = 'ARP';

	/**
	 */
	const ISO_WAEHRUNG_ATS = 'ATS';

	/**
	 */
	const ISO_WAEHRUNG_AUD = 'AUD';

	/**
	 */
	const ISO_WAEHRUNG_AWF = 'AWF';

	/**
	 */
	const ISO_WAEHRUNG_AZM = 'AZM';

	/**
	 */
	const ISO_WAEHRUNG_BAK = 'BAK';

	/**
	 */
	const ISO_WAEHRUNG_BBD = 'BBD';

	/**
	 */
	const ISO_WAEHRUNG_BDT = 'BDT';

	/**
	 */
	const ISO_WAEHRUNG_BEF = 'BEF';

	/**
	 */
	const ISO_WAEHRUNG_BES = 'BES';

	/**
	 */
	const ISO_WAEHRUNG_BGL = 'BGL';

	/**
	 */
	const ISO_WAEHRUNG_BHD = 'BHD';

	/**
	 */
	const ISO_WAEHRUNG_BIF = 'BIF';

	/**
	 */
	const ISO_WAEHRUNG_BMD = 'BMD';

	/**
	 */
	const ISO_WAEHRUNG_BND = 'BND';

	/**
	 */
	const ISO_WAEHRUNG_BOB = 'BOB';

	/**
	 */
	const ISO_WAEHRUNG_BRL = 'BRL';

	/**
	 */
	const ISO_WAEHRUNG_BSD = 'BSD';

	/**
	 */
	const ISO_WAEHRUNG_BTR = 'BTR';

	/**
	 */
	const ISO_WAEHRUNG_BWP = 'BWP';

	/**
	 */
	const ISO_WAEHRUNG_BYR = 'BYR';

	/**
	 */
	const ISO_WAEHRUNG_BZD = 'BZD';

	/**
	 */
	const ISO_WAEHRUNG_CAD = 'CAD';

	/**
	 */
	const ISO_WAEHRUNG_CDF = 'CDF';

	/**
	 */
	const ISO_WAEHRUNG_CHF = 'CHF';

	/**
	 */
	const ISO_WAEHRUNG_CLP = 'CLP';

	/**
	 */
	const ISO_WAEHRUNG_CNY = 'CNY';

	/**
	 */
	const ISO_WAEHRUNG_COP = 'COP';

	/**
	 */
	const ISO_WAEHRUNG_CRC = 'CRC';

	/**
	 */
	const ISO_WAEHRUNG_CUP = 'CUP';

	/**
	 */
	const ISO_WAEHRUNG_CUW = 'CUW';

	/**
	 */
	const ISO_WAEHRUNG_CVE = 'CVE';

	/**
	 */
	const ISO_WAEHRUNG_CYP = 'CYP';

	/**
	 */
	const ISO_WAEHRUNG_CZK = 'CZK';

	/**
	 */
	const ISO_WAEHRUNG_DEM = 'DEM';

	/**
	 */
	const ISO_WAEHRUNG_DJF = 'DJF';

	/**
	 */
	const ISO_WAEHRUNG_DKK = 'DKK';

	/**
	 */
	const ISO_WAEHRUNG_DOP = 'DOP';

	/**
	 */
	const ISO_WAEHRUNG_DZD = 'DZD';

	/**
	 */
	const ISO_WAEHRUNG_ECS = 'ECS';

	/**
	 */
	const ISO_WAEHRUNG_EEK = 'EEK';

	/**
	 */
	const ISO_WAEHRUNG_EGP = 'EGP';

	/**
	 */
	const ISO_WAEHRUNG_ERN = 'ERN';

	/**
	 */
	const ISO_WAEHRUNG_ESP = 'ESP';

	/**
	 */
	const ISO_WAEHRUNG_ETB = 'ETB';

	/**
	 */
	const ISO_WAEHRUNG_EUR = 'EUR';

	/**
	 */
	const ISO_WAEHRUNG_FIM = 'FIM';

	/**
	 */
	const ISO_WAEHRUNG_FJD = 'FJD';

	/**
	 */
	const ISO_WAEHRUNG_FKP = 'FKP';

	/**
	 */
	const ISO_WAEHRUNG_FRF = 'FRF';

	/**
	 */
	const ISO_WAEHRUNG_GBP = 'GBP';

	/**
	 */
	const ISO_WAEHRUNG_GEL = 'GEL';

	/**
	 */
	const ISO_WAEHRUNG_GHC = 'GHC';

	/**
	 */
	const ISO_WAEHRUNG_GIP = 'GIP';

	/**
	 */
	const ISO_WAEHRUNG_GMD = 'GMD';

	/**
	 */
	const ISO_WAEHRUNG_GNF = 'GNF';

	/**
	 */
	const ISO_WAEHRUNG_GRD = 'GRD';

	/**
	 */
	const ISO_WAEHRUNG_GTQ = 'GTQ';

	/**
	 */
	const ISO_WAEHRUNG_GYD = 'GYD';

	/**
	 */
	const ISO_WAEHRUNG_HKD = 'HKD';

	/**
	 */
	const ISO_WAEHRUNG_HNL = 'HNL';

	/**
	 */
	const ISO_WAEHRUNG_HRK = 'HRK';

	/**
	 */
	const ISO_WAEHRUNG_HTG = 'HTG';

	/**
	 */
	const ISO_WAEHRUNG_HUF = 'HUF';

	/**
	 */
	const ISO_WAEHRUNG_IDR = 'IDR';

	/**
	 */
	const ISO_WAEHRUNG_IEP = 'IEP';

	/**
	 */
	const ISO_WAEHRUNG_ILS = 'ILS';

	/**
	 */
	const ISO_WAEHRUNG_INR = 'INR';

	/**
	 */
	const ISO_WAEHRUNG_IQD = 'IQD';

	/**
	 */
	const ISO_WAEHRUNG_IRR = 'IRR';

	/**
	 */
	const ISO_WAEHRUNG_ISK = 'ISK';

	/**
	 */
	const ISO_WAEHRUNG_ITL = 'ITL';

	/**
	 */
	const ISO_WAEHRUNG_JMD = 'JMD';

	/**
	 */
	const ISO_WAEHRUNG_JOD = 'JOD';

	/**
	 */
	const ISO_WAEHRUNG_JPY = 'JPY';

	/**
	 */
	const ISO_WAEHRUNG_KES = 'KES';

	/**
	 */
	const ISO_WAEHRUNG_KGS = 'KGS';

	/**
	 */
	const ISO_WAEHRUNG_KHR = 'KHR';

	/**
	 */
	const ISO_WAEHRUNG_KMF = 'KMF';

	/**
	 */
	const ISO_WAEHRUNG_KPW = 'KPW';

	/**
	 */
	const ISO_WAEHRUNG_KRW = 'KRW';

	/**
	 */
	const ISO_WAEHRUNG_KWD = 'KWD';

	/**
	 */
	const ISO_WAEHRUNG_KYD = 'KYD';

	/**
	 */
	const ISO_WAEHRUNG_KZT = 'KZT';

	/**
	 */
	const ISO_WAEHRUNG_LAK = 'LAK';

	/**
	 */
	const ISO_WAEHRUNG_LBP = 'LBP';

	/**
	 */
	const ISO_WAEHRUNG_LKR = 'LKR';

	/**
	 */
	const ISO_WAEHRUNG_LRD = 'LRD';

	/**
	 */
	const ISO_WAEHRUNG_LSL = 'LSL';

	/**
	 */
	const ISO_WAEHRUNG_LTL = 'LTL';

	/**
	 */
	const ISO_WAEHRUNG_LUF = 'LUF';

	/**
	 */
	const ISO_WAEHRUNG_LVL = 'LVL';

	/**
	 */
	const ISO_WAEHRUNG_LYD = 'LYD';

	/**
	 */
	const ISO_WAEHRUNG_MAD = 'MAD';

	/**
	 */
	const ISO_WAEHRUNG_MDL = 'MDL';

	/**
	 */
	const ISO_WAEHRUNG_MGF = 'MGF';

	/**
	 */
	const ISO_WAEHRUNG_MMK = 'MMK';

	/**
	 */
	const ISO_WAEHRUNG_MNT = 'MNT';

	/**
	 */
	const ISO_WAEHRUNG_MOP = 'MOP';

	/**
	 */
	const ISO_WAEHRUNG_MRO = 'MRO';

	/**
	 */
	const ISO_WAEHRUNG_MTL = 'MTL';

	/**
	 */
	const ISO_WAEHRUNG_MUR = 'MUR';

	/**
	 */
	const ISO_WAEHRUNG_MVR = 'MVR';

	/**
	 */
	const ISO_WAEHRUNG_MWK = 'MWK';

	/**
	 */
	const ISO_WAEHRUNG_MXP = 'MXP';

	/**
	 */
	const ISO_WAEHRUNG_MYR = 'MYR';

	/**
	 */
	const ISO_WAEHRUNG_MZM = 'MZM';

	/**
	 */
	const ISO_WAEHRUNG_NAD = 'NAD';

	/**
	 */
	const ISO_WAEHRUNG_NGN = 'NGN';

	/**
	 */
	const ISO_WAEHRUNG_NIO = 'NIO';

	/**
	 */
	const ISO_WAEHRUNG_NLG = 'NLG';

	/**
	 */
	const ISO_WAEHRUNG_NOK = 'NOK';

	/**
	 */
	const ISO_WAEHRUNG_NPR = 'NPR';

	/**
	 */
	const ISO_WAEHRUNG_NZD = 'NZD';

	/**
	 */
	const ISO_WAEHRUNG_OMR = 'OMR';

	/**
	 */
	const ISO_WAEHRUNG_PAB = 'PAB';

	/**
	 */
	const ISO_WAEHRUNG_PEN = 'PEN';

	/**
	 */
	const ISO_WAEHRUNG_PGK = 'PGK';

	/**
	 */
	const ISO_WAEHRUNG_PHP = 'PHP';

	/**
	 */
	const ISO_WAEHRUNG_PKR = 'PKR';

	/**
	 */
	const ISO_WAEHRUNG_PLZ = 'PLZ';

	/**
	 */
	const ISO_WAEHRUNG_PTE = 'PTE';

	/**
	 */
	const ISO_WAEHRUNG_PYG = 'PYG';

	/**
	 */
	const ISO_WAEHRUNG_QAR = 'QAR';

	/**
	 */
	const ISO_WAEHRUNG_ROL = 'ROL';

	/**
	 */
	const ISO_WAEHRUNG_RUR = 'RUR';

	/**
	 */
	const ISO_WAEHRUNG_RWF = 'RWF';

	/**
	 */
	const ISO_WAEHRUNG_SAR = 'SAR';

	/**
	 */
	const ISO_WAEHRUNG_SBD = 'SBD';

	/**
	 */
	const ISO_WAEHRUNG_SBL = 'SBL';

	/**
	 */
	const ISO_WAEHRUNG_SCR = 'SCR';

	/**
	 */
	const ISO_WAEHRUNG_SDD = 'SDD';

	/**
	 */
	const ISO_WAEHRUNG_SEK = 'SEK';

	/**
	 */
	const ISO_WAEHRUNG_SGD = 'SGD';

	/**
	 */
	const ISO_WAEHRUNG_SHP = 'SHP';

	/**
	 */
	const ISO_WAEHRUNG_SIT = 'SIT';

	/**
	 */
	const ISO_WAEHRUNG_SKK = 'SKK';

	/**
	 */
	const ISO_WAEHRUNG_SLL = 'SLL';

	/**
	 */
	const ISO_WAEHRUNG_SOS = 'SOS';

	/**
	 */
	const ISO_WAEHRUNG_SRG = 'SRG';

	/**
	 */
	const ISO_WAEHRUNG_STD = 'STD';

	/**
	 */
	const ISO_WAEHRUNG_SVC = 'SVC';

	/**
	 */
	const ISO_WAEHRUNG_SYP = 'SYP';

	/**
	 */
	const ISO_WAEHRUNG_SZL = 'SZL';

	/**
	 */
	const ISO_WAEHRUNG_THB = 'THB';

	/**
	 */
	const ISO_WAEHRUNG_TJR = 'TJR';

	/**
	 */
	const ISO_WAEHRUNG_TMM = 'TMM';

	/**
	 */
	const ISO_WAEHRUNG_TND = 'TND';

	/**
	 */
	const ISO_WAEHRUNG_TOP = 'TOP';

	/**
	 */
	const ISO_WAEHRUNG_TRL = 'TRL';

	/**
	 */
	const ISO_WAEHRUNG_TTD = 'TTD';

	/**
	 */
	const ISO_WAEHRUNG_TWD = 'TWD';

	/**
	 */
	const ISO_WAEHRUNG_TZS = 'TZS';

	/**
	 */
	const ISO_WAEHRUNG_UAH = 'UAH';

	/**
	 */
	const ISO_WAEHRUNG_UGX = 'UGX';

	/**
	 */
	const ISO_WAEHRUNG_USD = 'USD';

	/**
	 */
	const ISO_WAEHRUNG_UYU = 'UYU';

	/**
	 */
	const ISO_WAEHRUNG_UZS = 'UZS';

	/**
	 */
	const ISO_WAEHRUNG_VEB = 'VEB';

	/**
	 */
	const ISO_WAEHRUNG_VND = 'VND';

	/**
	 */
	const ISO_WAEHRUNG_VUV = 'VUV';

	/**
	 */
	const ISO_WAEHRUNG_WST = 'WST';

	/**
	 */
	const ISO_WAEHRUNG_XAF = 'XAF';

	/**
	 */
	const ISO_WAEHRUNG_XAG = 'XAG';

	/**
	 */
	const ISO_WAEHRUNG_XAU = 'XAU';

	/**
	 */
	const ISO_WAEHRUNG_XCD = 'XCD';

	/**
	 */
	const ISO_WAEHRUNG_XCO = 'XCO';

	/**
	 */
	const ISO_WAEHRUNG_XDR = 'XDR';

	/**
	 */
	const ISO_WAEHRUNG_XPD = 'XPD';

	/**
	 */
	const ISO_WAEHRUNG_XPF = 'XPF';

	/**
	 */
	const ISO_WAEHRUNG_XPT = 'XPT';

	/**
	 */
	const ISO_WAEHRUNG_YER = 'YER';

	/**
	 */
	const ISO_WAEHRUNG_YUN = 'YUN';

	/**
	 */
	const ISO_WAEHRUNG_ZAR = 'ZAR';

	/**
	 */
	const ISO_WAEHRUNG_ZMK = 'ZMK';

	/**
	 */
	const ISO_WAEHRUNG_ZWD = 'ZWD';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ISO_WAEHRUNG_* constants
	 * @var string
	 */
	protected $isoWaehrung;

	/**
	 * @return string
	 */
	public function getIsoWaehrung(): string {
		return $this->isoWaehrung;
	}

	/**
	 * @param string $isoWaehrung Setter for isoWaehrung
	 * @return Waehrung
	 */
	public function setIsoWaehrung(string $isoWaehrung) {
		$this->isoWaehrung = $isoWaehrung;
		return $this;
	}
}
