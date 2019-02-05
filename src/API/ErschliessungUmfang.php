<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ErschliessungUmfang
 * Detailbeschreibung der Massnahmen
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("erschliessung_umfang") 
 */
class ErschliessungUmfang {

	/**
	 */
	const ERSCHL_ATTR_GAS = 'GAS';

	/**
	 */
	const ERSCHL_ATTR_STROM = 'STROM';

	/**
	 */
	const ERSCHL_ATTR_TK = 'TK';

	/**
	 */
	const ERSCHL_ATTR_WASSER = 'WASSER';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ERSCHL_ATTR_* constants
	 * @var string
	 */
	protected $erschlAttr;

	/**
	 * @return string
	 */
	public function getErschlAttr(): string {
		return $this->erschlAttr;
	}

	/**
	 * @param string $erschlAttr Setter for erschlAttr
	 * @return ErschliessungUmfang
	 */
	public function setErschlAttr(string $erschlAttr) {
		$this->erschlAttr = $erschlAttr;
		return $this;
	}
}
