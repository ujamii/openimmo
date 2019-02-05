<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Land
 * Land
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("land") 
 */
class Land {

	/**
	 */
	const ISO_LAND_ABW = 'ABW';

	/**
	 */
	const ISO_LAND_AFG = 'AFG';

	/**
	 */
	const ISO_LAND_AGO = 'AGO';

	/**
	 */
	const ISO_LAND_AIA = 'AIA';

	/**
	 */
	const ISO_LAND_ALB = 'ALB';

	/**
	 */
	const ISO_LAND_AND = 'AND';

	/**
	 */
	const ISO_LAND_ANT = 'ANT';

	/**
	 */
	const ISO_LAND_ARE = 'ARE';

	/**
	 */
	const ISO_LAND_ARG = 'ARG';

	/**
	 */
	const ISO_LAND_ARM = 'ARM';

	/**
	 */
	const ISO_LAND_ASM = 'ASM';

	/**
	 */
	const ISO_LAND_ATG = 'ATG';

	/**
	 */
	const ISO_LAND_AUS = 'AUS';

	/**
	 */
	const ISO_LAND_AUT = 'AUT';

	/**
	 */
	const ISO_LAND_AZE = 'AZE';

	/**
	 */
	const ISO_LAND_BDI = 'BDI';

	/**
	 */
	const ISO_LAND_BEL = 'BEL';

	/**
	 */
	const ISO_LAND_BEN = 'BEN';

	/**
	 */
	const ISO_LAND_BFA = 'BFA';

	/**
	 */
	const ISO_LAND_BGD = 'BGD';

	/**
	 */
	const ISO_LAND_BGR = 'BGR';

	/**
	 */
	const ISO_LAND_BHR = 'BHR';

	/**
	 */
	const ISO_LAND_BHS = 'BHS';

	/**
	 */
	const ISO_LAND_BIH = 'BIH';

	/**
	 */
	const ISO_LAND_BLR = 'BLR';

	/**
	 */
	const ISO_LAND_BLZ = 'BLZ';

	/**
	 */
	const ISO_LAND_BMU = 'BMU';

	/**
	 */
	const ISO_LAND_BOL = 'BOL';

	/**
	 */
	const ISO_LAND_BRA = 'BRA';

	/**
	 */
	const ISO_LAND_BRB = 'BRB';

	/**
	 */
	const ISO_LAND_BRN = 'BRN';

	/**
	 */
	const ISO_LAND_BTN = 'BTN';

	/**
	 */
	const ISO_LAND_BWA = 'BWA';

	/**
	 */
	const ISO_LAND_CAF = 'CAF';

	/**
	 */
	const ISO_LAND_CAN = 'CAN';

	/**
	 */
	const ISO_LAND_CHE = 'CHE';

	/**
	 */
	const ISO_LAND_CHL = 'CHL';

	/**
	 */
	const ISO_LAND_CHN = 'CHN';

	/**
	 */
	const ISO_LAND_CIV = 'CIV';

	/**
	 */
	const ISO_LAND_CMR = 'CMR';

	/**
	 */
	const ISO_LAND_COD = 'COD';

	/**
	 */
	const ISO_LAND_COG = 'COG';

	/**
	 */
	const ISO_LAND_COK = 'COK';

	/**
	 */
	const ISO_LAND_COL = 'COL';

	/**
	 */
	const ISO_LAND_COM = 'COM';

	/**
	 */
	const ISO_LAND_CPV = 'CPV';

	/**
	 */
	const ISO_LAND_CRI = 'CRI';

	/**
	 */
	const ISO_LAND_CUB = 'CUB';

	/**
	 */
	const ISO_LAND_CYM = 'CYM';

	/**
	 */
	const ISO_LAND_CYP = 'CYP';

	/**
	 */
	const ISO_LAND_CZE = 'CZE';

	/**
	 */
	const ISO_LAND_DEU = 'DEU';

	/**
	 */
	const ISO_LAND_DJI = 'DJI';

	/**
	 */
	const ISO_LAND_DMA = 'DMA';

	/**
	 */
	const ISO_LAND_DNK = 'DNK';

	/**
	 */
	const ISO_LAND_DOM = 'DOM';

	/**
	 */
	const ISO_LAND_DZA = 'DZA';

	/**
	 */
	const ISO_LAND_ECU = 'ECU';

	/**
	 */
	const ISO_LAND_EGY = 'EGY';

	/**
	 */
	const ISO_LAND_ERI = 'ERI';

	/**
	 */
	const ISO_LAND_ESH = 'ESH';

	/**
	 */
	const ISO_LAND_ESP = 'ESP';

	/**
	 */
	const ISO_LAND_EST = 'EST';

	/**
	 */
	const ISO_LAND_ETH = 'ETH';

	/**
	 */
	const ISO_LAND_FIN = 'FIN';

	/**
	 */
	const ISO_LAND_FJI = 'FJI';

	/**
	 */
	const ISO_LAND_FLK = 'FLK';

	/**
	 */
	const ISO_LAND_FRA = 'FRA';

	/**
	 */
	const ISO_LAND_FRO = 'FRO';

	/**
	 */
	const ISO_LAND_FSM = 'FSM';

	/**
	 */
	const ISO_LAND_GAB = 'GAB';

	/**
	 */
	const ISO_LAND_GBR = 'GBR';

	/**
	 */
	const ISO_LAND_GEO = 'GEO';

	/**
	 */
	const ISO_LAND_GHA = 'GHA';

	/**
	 */
	const ISO_LAND_GIB = 'GIB';

	/**
	 */
	const ISO_LAND_GIN = 'GIN';

	/**
	 */
	const ISO_LAND_GLP = 'GLP';

	/**
	 */
	const ISO_LAND_GMB = 'GMB';

	/**
	 */
	const ISO_LAND_GNB = 'GNB';

	/**
	 */
	const ISO_LAND_GNQ = 'GNQ';

	/**
	 */
	const ISO_LAND_GRC = 'GRC';

	/**
	 */
	const ISO_LAND_GRD = 'GRD';

	/**
	 */
	const ISO_LAND_GRL = 'GRL';

	/**
	 */
	const ISO_LAND_GTM = 'GTM';

	/**
	 */
	const ISO_LAND_GUF = 'GUF';

	/**
	 */
	const ISO_LAND_GUM = 'GUM';

	/**
	 */
	const ISO_LAND_GUY = 'GUY';

	/**
	 */
	const ISO_LAND_HKG = 'HKG';

	/**
	 */
	const ISO_LAND_HND = 'HND';

	/**
	 */
	const ISO_LAND_HRV = 'HRV';

	/**
	 */
	const ISO_LAND_HTI = 'HTI';

	/**
	 */
	const ISO_LAND_HUN = 'HUN';

	/**
	 */
	const ISO_LAND_IDN = 'IDN';

	/**
	 */
	const ISO_LAND_IND = 'IND';

	/**
	 */
	const ISO_LAND_IRL = 'IRL';

	/**
	 */
	const ISO_LAND_IRN = 'IRN';

	/**
	 */
	const ISO_LAND_IRQ = 'IRQ';

	/**
	 */
	const ISO_LAND_ISL = 'ISL';

	/**
	 */
	const ISO_LAND_ISR = 'ISR';

	/**
	 */
	const ISO_LAND_ITA = 'ITA';

	/**
	 */
	const ISO_LAND_JAM = 'JAM';

	/**
	 */
	const ISO_LAND_JOR = 'JOR';

	/**
	 */
	const ISO_LAND_JPN = 'JPN';

	/**
	 */
	const ISO_LAND_KAZ = 'KAZ';

	/**
	 */
	const ISO_LAND_KEN = 'KEN';

	/**
	 */
	const ISO_LAND_KGZ = 'KGZ';

	/**
	 */
	const ISO_LAND_KHM = 'KHM';

	/**
	 */
	const ISO_LAND_KIR = 'KIR';

	/**
	 */
	const ISO_LAND_KNA = 'KNA';

	/**
	 */
	const ISO_LAND_KOR = 'KOR';

	/**
	 */
	const ISO_LAND_KWT = 'KWT';

	/**
	 */
	const ISO_LAND_LAO = 'LAO';

	/**
	 */
	const ISO_LAND_LBN = 'LBN';

	/**
	 */
	const ISO_LAND_LBR = 'LBR';

	/**
	 */
	const ISO_LAND_LBY = 'LBY';

	/**
	 */
	const ISO_LAND_LCA = 'LCA';

	/**
	 */
	const ISO_LAND_LIE = 'LIE';

	/**
	 */
	const ISO_LAND_LKA = 'LKA';

	/**
	 */
	const ISO_LAND_LSO = 'LSO';

	/**
	 */
	const ISO_LAND_LTU = 'LTU';

	/**
	 */
	const ISO_LAND_LUX = 'LUX';

	/**
	 */
	const ISO_LAND_LVA = 'LVA';

	/**
	 */
	const ISO_LAND_MAC = 'MAC';

	/**
	 */
	const ISO_LAND_MAR = 'MAR';

	/**
	 */
	const ISO_LAND_MCO = 'MCO';

	/**
	 */
	const ISO_LAND_MDA = 'MDA';

	/**
	 */
	const ISO_LAND_MDG = 'MDG';

	/**
	 */
	const ISO_LAND_MDV = 'MDV';

	/**
	 */
	const ISO_LAND_MEX = 'MEX';

	/**
	 */
	const ISO_LAND_MHL = 'MHL';

	/**
	 */
	const ISO_LAND_MKD = 'MKD';

	/**
	 */
	const ISO_LAND_MLI = 'MLI';

	/**
	 */
	const ISO_LAND_MLT = 'MLT';

	/**
	 */
	const ISO_LAND_MMR = 'MMR';

	/**
	 */
	const ISO_LAND_MNE = 'MNE';

	/**
	 */
	const ISO_LAND_MNG = 'MNG';

	/**
	 */
	const ISO_LAND_MNP = 'MNP';

	/**
	 */
	const ISO_LAND_MOZ = 'MOZ';

	/**
	 */
	const ISO_LAND_MRT = 'MRT';

	/**
	 */
	const ISO_LAND_MSR = 'MSR';

	/**
	 */
	const ISO_LAND_MTQ = 'MTQ';

	/**
	 */
	const ISO_LAND_MUS = 'MUS';

	/**
	 */
	const ISO_LAND_MWI = 'MWI';

	/**
	 */
	const ISO_LAND_MYS = 'MYS';

	/**
	 */
	const ISO_LAND_NAM = 'NAM';

	/**
	 */
	const ISO_LAND_NCL = 'NCL';

	/**
	 */
	const ISO_LAND_NER = 'NER';

	/**
	 */
	const ISO_LAND_NFK = 'NFK';

	/**
	 */
	const ISO_LAND_NGA = 'NGA';

	/**
	 */
	const ISO_LAND_NIC = 'NIC';

	/**
	 */
	const ISO_LAND_NIU = 'NIU';

	/**
	 */
	const ISO_LAND_NLD = 'NLD';

	/**
	 */
	const ISO_LAND_NOR = 'NOR';

	/**
	 */
	const ISO_LAND_NPL = 'NPL';

	/**
	 */
	const ISO_LAND_NRU = 'NRU';

	/**
	 */
	const ISO_LAND_NZL = 'NZL';

	/**
	 */
	const ISO_LAND_OMN = 'OMN';

	/**
	 */
	const ISO_LAND_PAK = 'PAK';

	/**
	 */
	const ISO_LAND_PAN = 'PAN';

	/**
	 */
	const ISO_LAND_PCN = 'PCN';

	/**
	 */
	const ISO_LAND_PER = 'PER';

	/**
	 */
	const ISO_LAND_PHL = 'PHL';

	/**
	 */
	const ISO_LAND_PLW = 'PLW';

	/**
	 */
	const ISO_LAND_PNG = 'PNG';

	/**
	 */
	const ISO_LAND_POL = 'POL';

	/**
	 */
	const ISO_LAND_PRI = 'PRI';

	/**
	 */
	const ISO_LAND_PRK = 'PRK';

	/**
	 */
	const ISO_LAND_PRT = 'PRT';

	/**
	 */
	const ISO_LAND_PRY = 'PRY';

	/**
	 */
	const ISO_LAND_PSE = 'PSE';

	/**
	 */
	const ISO_LAND_PYF = 'PYF';

	/**
	 */
	const ISO_LAND_QAT = 'QAT';

	/**
	 */
	const ISO_LAND_REU = 'REU';

	/**
	 */
	const ISO_LAND_ROM = 'ROM';

	/**
	 */
	const ISO_LAND_RUS = 'RUS';

	/**
	 */
	const ISO_LAND_RWA = 'RWA';

	/**
	 */
	const ISO_LAND_SAU = 'SAU';

	/**
	 */
	const ISO_LAND_SDN = 'SDN';

	/**
	 */
	const ISO_LAND_SEN = 'SEN';

	/**
	 */
	const ISO_LAND_SGP = 'SGP';

	/**
	 */
	const ISO_LAND_SHN = 'SHN';

	/**
	 */
	const ISO_LAND_SJM = 'SJM';

	/**
	 */
	const ISO_LAND_SLB = 'SLB';

	/**
	 */
	const ISO_LAND_SLE = 'SLE';

	/**
	 */
	const ISO_LAND_SLV = 'SLV';

	/**
	 */
	const ISO_LAND_SMR = 'SMR';

	/**
	 */
	const ISO_LAND_SMX = 'SMX';

	/**
	 */
	const ISO_LAND_SOM = 'SOM';

	/**
	 */
	const ISO_LAND_SPM = 'SPM';

	/**
	 */
	const ISO_LAND_SRB = 'SRB';

	/**
	 */
	const ISO_LAND_STP = 'STP';

	/**
	 */
	const ISO_LAND_SUR = 'SUR';

	/**
	 */
	const ISO_LAND_SVK = 'SVK';

	/**
	 */
	const ISO_LAND_SVN = 'SVN';

	/**
	 */
	const ISO_LAND_SWE = 'SWE';

	/**
	 */
	const ISO_LAND_SWZ = 'SWZ';

	/**
	 */
	const ISO_LAND_SYC = 'SYC';

	/**
	 */
	const ISO_LAND_SYR = 'SYR';

	/**
	 */
	const ISO_LAND_TCA = 'TCA';

	/**
	 */
	const ISO_LAND_TCD = 'TCD';

	/**
	 */
	const ISO_LAND_TGO = 'TGO';

	/**
	 */
	const ISO_LAND_THA = 'THA';

	/**
	 */
	const ISO_LAND_TJK = 'TJK';

	/**
	 */
	const ISO_LAND_TKL = 'TKL';

	/**
	 */
	const ISO_LAND_TKM = 'TKM';

	/**
	 */
	const ISO_LAND_TMP = 'TMP';

	/**
	 */
	const ISO_LAND_TON = 'TON';

	/**
	 */
	const ISO_LAND_TTO = 'TTO';

	/**
	 */
	const ISO_LAND_TUN = 'TUN';

	/**
	 */
	const ISO_LAND_TUR = 'TUR';

	/**
	 */
	const ISO_LAND_TUV = 'TUV';

	/**
	 */
	const ISO_LAND_TWN = 'TWN';

	/**
	 */
	const ISO_LAND_TZA = 'TZA';

	/**
	 */
	const ISO_LAND_UGA = 'UGA';

	/**
	 */
	const ISO_LAND_UKR = 'UKR';

	/**
	 */
	const ISO_LAND_URY = 'URY';

	/**
	 */
	const ISO_LAND_USA = 'USA';

	/**
	 */
	const ISO_LAND_UZB = 'UZB';

	/**
	 */
	const ISO_LAND_VAT = 'VAT';

	/**
	 */
	const ISO_LAND_VCT = 'VCT';

	/**
	 */
	const ISO_LAND_VEN = 'VEN';

	/**
	 */
	const ISO_LAND_VGB = 'VGB';

	/**
	 */
	const ISO_LAND_VIR = 'VIR';

	/**
	 */
	const ISO_LAND_VNM = 'VNM';

	/**
	 */
	const ISO_LAND_VUT = 'VUT';

	/**
	 */
	const ISO_LAND_WLF = 'WLF';

	/**
	 */
	const ISO_LAND_WSM = 'WSM';

	/**
	 */
	const ISO_LAND_YEM = 'YEM';

	/**
	 */
	const ISO_LAND_YUG = 'YUG';

	/**
	 */
	const ISO_LAND_ZAF = 'ZAF';

	/**
	 */
	const ISO_LAND_ZMB = 'ZMB';

	/**
	 */
	const ISO_LAND_ZWE = 'ZWE';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ISO_LAND_* constants
	 * @var string
	 */
	protected $isoLand;

	/**
	 * @return string
	 */
	public function getIsoLand(): string {
		return $this->isoLand;
	}

	/**
	 * @param string $isoLand Setter for isoLand
	 * @return Land
	 */
	public function setIsoLand(string $isoLand) {
		$this->isoLand = $isoLand;
		return $this;
	}
}
